{{-- HTML code editor (Filament's code editor markup) with a live preview beside it: see App\Filament\Forms\Components\HtmlEditor --}}
@php
    $fieldWrapperView = $getFieldWrapperView();
    $extraAttributeBag = $getExtraAttributeBag();
    $isDisabled = $isDisabled();
    $isLive = $isLive();
    $isLiveOnBlur = $isLiveOnBlur();
    $isLiveDebounced = $isLiveDebounced();
    $liveDebounce = $getLiveDebounce();
    $key = $getKey();
    $language = $getLanguage();
    $statePath = $getStatePath();
    $livewireKey = $getLivewireKey();
    $previewDirection = $getPreviewDirection();
    $previewHtml = $getPreviewHtml();
@endphp

@once
    <style>
        .pf-html-editor { display: grid; gap: 0.75rem; }
        @media (min-width: 1280px) {
            .pf-html-editor { grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); align-items: start; }
        }
        .pf-html-editor .cm-editor { max-height: 36rem; }
        .pf-html-editor .cm-scroller { overflow: auto; }
    </style>
@endonce

<x-dynamic-component :component="$fieldWrapperView" :field="$field">
    <div class="pf-html-editor">
        <x-filament::input.wrapper
            :disabled="$isDisabled"
            :valid="! $errors->has($statePath)"
            :attributes="
                \Filament\Support\prepare_inherited_attributes($extraAttributeBag)
                    ->class(['fi-fo-code-editor'])
            "
        >
            {{-- HTML reads left to right, also in the Arabic admin --}}
            <div
                dir="ltr"
                x-load
                x-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('code-editor', 'filament/forms') }}"
                x-data="codeEditorFormComponent({
                            canWrap: @js($canWrap()),
                            isDisabled: @js($isDisabled),
                            isLive: @js($isLive),
                            isLiveDebounced: @js($isLiveDebounced),
                            isLiveOnBlur: @js($isLiveOnBlur),
                            liveDebounce: @js($liveDebounce),
                            language: @js($language?->value),
                            state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$statePath}')", isOptimisticallyLive: false) }},
                        })"
                wire:ignore
                wire:key="{{ $livewireKey }}.{{
                    substr(md5(serialize([
                        $isDisabled,
                        $language?->value,
                    ])), 0, 64)
                }}"
                {{ $getExtraAlpineAttributeBag() }}
            >
                <div x-ref="editor" x-cloak></div>
            </div>
        </x-filament::input.wrapper>

        {{-- worked out on the server (the field is live), so it shows exactly what previewUsing() keeps --}}
        @if ($previewHtml !== null)
            @include('filament.forms.components.html-preview', [
                'html' => $previewHtml,
                'direction' => $previewDirection,
            ])
        @endif
    </div>
</x-dynamic-component>
