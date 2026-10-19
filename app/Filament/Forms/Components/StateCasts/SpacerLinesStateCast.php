<?php

namespace App\Filament\Forms\Components\StateCasts;

use Filament\Schemas\Components\StateCasts\Contracts\StateCast;

/**
 * Wraps the rich editor's HTML <-> editor-document conversion so descriptions load cleanly and save the way the
 * portfolio website shows them.
 *
 * Descriptions use <br> between blocks for spacing, because the website removes all margins. The converter puts such a
 * <br> (and any other text that is not inside a block) straight into the document, where the editor cannot place the
 * cursor, so it could not be selected or deleted.
 * - Loading: a line that holds only a <br> becomes an empty paragraph, and anything left outside a block is wrapped in
 *   paragraphs (a lone <br> becomes an empty line). Every spacer is then a normal empty line, deleted with one Backspace.
 *   Line breaks in typed or pasted HTML count as spaces, as on the website (the converter would otherwise drop some and
 *   glue words together), and <div> lines become paragraphs.
 * - Saving: every empty paragraph becomes <p><br></p>. An empty <p> has no height on the website; <p><br></p> shows the
 *   same 1-line gap as <br>. So every empty line in the editor is a gap on the site.
 */
class SpacerLinesStateCast implements StateCast
{
    private const BLOCK_TAGS = 'h[1-6]|p|ul|ol|li|div|blockquote|table|thead|tbody|tfoot|tr|td|th|hr|br|figure';

    private const INLINE_NODES = ['text', 'hardBreak', 'mention', 'mergeTag'];

    public function __construct(
        protected StateCast $converter,
    ) {}

    /**
     * Editor document -> HTML (saving).
     */
    public function get(mixed $state): mixed
    {
        $html = $this->converter->get($state);

        return is_string($html) ? static::emptyLinesKeepTheirHeight($html) : $html;
    }

    /**
     * HTML -> editor document (loading, or "HTML" > Apply).
     */
    public function set(mixed $state): mixed
    {
        if (is_string($state)) {
            // nothing but whitespace or comments: an empty editor (the converter cannot read an empty string)
            $state = trim(preg_replace('~<!--.*?-->~su', '', $state) ?? $state) === '' ? null : static::prepareHtml($state);
        }

        $document = $this->converter->set($state);

        return is_array($document) ? static::wrapStrayInlineNodes($document) : $document;
    }

    public static function prepareHtml(string $html): string
    {
        if (! preg_match('~<pre\b~iu', $html)) {
            $tags = self::BLOCK_TAGS;
            $html = preg_replace("~\s*(</?(?:{$tags})\b[^>]*>)\s*~iu", '$1', $html) ?? $html;   // no space around blocks and <br>
            $html = preg_replace('~\s*\R\s*~u', ' ', trim($html)) ?? $html;                    // a line break in text is a space
            $html = preg_replace(['~<div\b[^>]*>~iu', '~</div>~iu'], ['<p>', '</p>'], $html) ?? $html;
        }

        // a line that holds only a <br> becomes a truly empty line: with the <br> inside, Backspace would move that
        // <br> into the block above instead of deleting the line
        return preg_replace('~<p(\s[^>]*)?>\s*<br\b[^>]*>\s*</p>~iu', '<p$1></p>', $html) ?? $html;
    }

    /**
     * Text, line breaks and other inline content directly in the document go into paragraphs; line breaks at the edges
     * of such a run (spacers between blocks) become empty paragraphs of their own.
     *
     * @param  array<string, mixed>  $document
     * @return array<string, mixed>
     */
    public static function wrapStrayInlineNodes(array $document): array
    {
        if (! is_array($document['content'] ?? null)) {
            return $document;
        }

        $content = [];
        $run = [];
        $flush = function () use (&$run, &$content): void {
            while ($run && $run[0]['type'] === 'hardBreak') {
                array_shift($run);
                $content[] = ['type' => 'paragraph'];
            }
            $trailing = 0;
            while ($run && end($run)['type'] === 'hardBreak') {
                array_pop($run);
                $trailing++;
            }
            if ($run) {
                $content[] = ['type' => 'paragraph', 'content' => array_values($run)];
            }
            for (; $trailing > 0; $trailing--) {
                $content[] = ['type' => 'paragraph'];
            }
            $run = [];
        };

        foreach ($document['content'] as $node) {
            if (in_array($node['type'] ?? null, self::INLINE_NODES, true)) {
                $run[] = $node;

                continue;
            }
            $flush();
            $content[] = $node;
        }
        $flush();

        $document['content'] = $content;

        return $document;
    }

    public static function emptyLinesKeepTheirHeight(string $html): string
    {
        return preg_replace('~<p(\s[^>]*)?>\s*</p>~iu', '<p$1><br></p>', $html) ?? $html;
    }
}
