<?php

namespace App\Filament\Forms\Components;

use Closure;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;

/**
 * An HTML code editor with a preview beside it. The preview shows what previewUsing() makes of the HTML (for the rich
 * editor's HTML window: the HTML the editor keeps after Apply), styled like the portfolio website's descriptions, and
 * follows the typing about half a second after a pause.
 */
class HtmlEditor extends CodeEditor
{
    /**
     * @var view-string
     */
    protected string $view = 'filament.forms.components.html-editor';

    protected string | Closure | null $previewDirection = null;

    protected ?Closure $previewUsing = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->language(Language::Html);
        $this->wrap();

        // one block per line, so a long one-line description is easy to read; the page looks the same
        $this->afterStateHydrated(function (HtmlEditor $component, $state): void {
            if (is_string($state) && $state !== '') {
                $component->state(static::oneBlockPerLine($state));
            }
        });
    }

    public function previewDirection(string | Closure | null $direction): static
    {
        $this->previewDirection = $direction;

        return $this;
    }

    public function getPreviewDirection(): string
    {
        return $this->evaluate($this->previewDirection) ?? 'ltr';
    }

    /**
     * The HTML to preview, worked out on the server from the current state. It is shown as it is, so it must only ever
     * return trusted HTML (the rich editor's own output is).
     */
    public function previewUsing(?Closure $callback): static
    {
        $this->previewUsing = $callback;
        $this->live(debounce: 500);

        return $this;
    }

    public function getPreviewHtml(): ?string
    {
        if (! $this->previewUsing) {
            return null;
        }

        return (string) $this->evaluate($this->previewUsing, ['state' => $this->getState()]);
    }

    /**
     * Starts a new line after a block's closing tag, after a list's opening tag, and after a <br> that comes before
     * another block, when the next tag follows straight away. Only whitespace between blocks is added, which browsers
     * do not show in normal text. HTML where whitespace can show (code blocks, white-space or inline layout styles) is
     * left exactly as it is.
     */
    public static function oneBlockPerLine(string $html): string
    {
        if (preg_match('~<(?:pre|textarea)\b|white-space\s*:|display\s*:\s*inline~iu', $html)) {
            return $html;
        }

        $blocks = 'h[1-6]|p|ul|ol|li|div|blockquote|table|thead|tbody|tr|hr|figure|pre';

        $html = preg_replace("~(</(?:{$blocks})>)(?=<(?!/li\b))~iu", "$1\n", $html) ?? $html;   // <li><p>...</p></li> stays one line
        $html = preg_replace('~(<(?:ul|ol)\b[^>]*>)(?=<li\b)~iu', "$1\n", $html) ?? $html;

        // not before a closing tag, so an empty line stays one line: <p><br></p>
        return preg_replace("~(<br\s*/?>)(?=<(?:(?:{$blocks})\b|br\b))~iu", "$1\n", $html) ?? $html;
    }
}
