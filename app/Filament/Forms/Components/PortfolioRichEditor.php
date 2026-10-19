<?php

namespace App\Filament\Forms\Components;

use App\Filament\Forms\Components\StateCasts\SpacerLinesStateCast;
use Closure;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\RichEditor\StateCasts\RichEditorStateCast;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;

/**
 * The rich text editor for portfolio descriptions:
 * - a fuller toolbar (H1 for the centered titles, normal text, divider line, clear formatting);
 * - "Preview": the description as the portfolio website shows it;
 * - "HTML": the description's HTML in a code editor with a live preview, to paste or edit HTML directly;
 * - <br> spacers between blocks become empty lines the editor can select and delete (see SpacerLinesStateCast);
 * - the text keeps its language's direction (English left to right, Arabic right to left) in either admin language.
 */
class PortfolioRichEditor extends RichEditor
{
    protected string | Closure | null $contentDirection = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->extraInputAttributes(fn (PortfolioRichEditor $component): array => ['dir' => $component->getContentDirection()], merge: true);

        $this->toolbarButtons([
            ['bold', 'italic', 'underline', 'strike', 'link', 'clearFormatting'],
            ['h1', 'h2', 'h3', 'paragraph'],
            ['alignStart', 'alignCenter', 'alignEnd'],
            ['bulletList', 'orderedList', 'blockquote', 'horizontalRule', 'table'],
            ['undo', 'redo'],
        ]);

        $this->hintActions([
            Action::make('previewHtml')
                ->label(__('keys.preview'))
                ->icon(Heroicon::OutlinedEye)
                ->modalHeading(fn (PortfolioRichEditor $component): string => $component->getLabel() . ' · ' . __('keys.preview'))
                ->modalWidth(Width::FiveExtraLarge)
                ->modalContent(fn (PortfolioRichEditor $component) => view('filament.forms.components.html-preview', [
                    'html' => (string) $component->getState(),
                    'direction' => $component->getContentDirection(),
                ]))
                ->modalSubmitAction(false)
                ->modalCancelActionLabel(__('filament-actions::view.single.modal.actions.close.label')),

            Action::make('editHtml')
                ->label('HTML')
                ->icon(Heroicon::OutlinedCodeBracket)
                ->modalHeading(fn (PortfolioRichEditor $component): string => $component->getLabel() . ' · HTML')
                ->modalDescription(__('keys.html_window_note'))
                ->modalWidth(Width::SevenExtraLarge)
                ->fillForm(fn (PortfolioRichEditor $component): array => ['html' => $component->getHtmlForEditing()])
                ->schema(fn (PortfolioRichEditor $component): array => [
                    HtmlEditor::make('html')
                        ->hiddenLabel()
                        ->previewDirection($component->getContentDirection())
                        ->previewUsing(fn (?string $state): string => $component->convertHtml($state)),
                ])
                ->modalSubmitActionLabel(__('keys.apply'))
                ->action(function (array $data, PortfolioRichEditor $component): void {
                    $component->state($data['html'] ?? null);
                }),
        ]);
    }

    /**
     * Wraps Filament's HTML <-> editor-document conversion with the spacer fix.
     */
    public function getDefaultStateCasts(): array
    {
        return array_map(
            fn ($cast) => $cast instanceof RichEditorStateCast ? new SpacerLinesStateCast($cast) : $cast,
            parent::getDefaultStateCasts(),
        );
    }

    /**
     * The current HTML for the HTML window; an empty editor gives an empty window rather than one empty line.
     */
    public function getHtmlForEditing(): string
    {
        $html = (string) $this->getState();

        return trim(preg_replace('~<p(\s[^>]*)?><br></p>~iu', '', $html) ?? $html) === '' ? '' : $html;
    }

    /**
     * What the editor keeps of the given HTML: the same conversion as "HTML" > Apply followed by saving.
     */
    public function convertHtml(?string $html): string
    {
        $state = $html;
        foreach (array_reverse($this->getStateCasts()) as $cast) {
            $state = $cast->set($state);
        }
        foreach ($this->getStateCasts() as $cast) {
            $state = $cast->get($state);
        }

        $html = (string) $state;

        return trim(preg_replace('~<p(\s[^>]*)?><br></p>~iu', '', $html) ?? $html) === '' ? '' : $html;
    }

    public function contentDirection(string | Closure | null $direction): static
    {
        $this->contentDirection = $direction;

        return $this;
    }

    public function getContentDirection(): string
    {
        return $this->evaluate($this->contentDirection) ?? 'ltr';
    }
}
