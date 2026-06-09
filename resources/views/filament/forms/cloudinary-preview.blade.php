<style>
    .media-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 16px;
    }

    .media-item {
        position: relative;
    }

    .media-item img {
        width: 100%;
        height: 140px;
        object-fit: cover;
        border-radius: 6px;
    }

    .remove-btn {
        position: absolute;
        top: 6px;
        right: 6px;
        background: #d9534f;
        color: white;
        border: none;
        padding: 6px 10px;
        border-radius: 4px;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.2s ease-in-out;
        font-size: 13px;
    }

    .media-item:hover .remove-btn {
        opacity: 1;
    }
</style>

@php
    $media = $media ?? collect();
    $kept = $this->data['kept_media'] ?? [];
    $media = $media->filter(fn($m) => in_array($m->url, $kept));
@endphp

@if ($media->count())
    <div x-data="{ kept_media: @entangle('data.kept_media') }" class="media-grid">
        @foreach ($media as $item)
            <div class="media-item">
                <img src="{{ $item->url }}" alt="media">

                <button type="button" class="remove-btn"
                    x-on:click="
                        kept_media = kept_media.filter(u => u !== '{{ $item->url }}');
                        $wire.set('data.kept_media', kept_media, false);
                        $el.closest('.media-item').remove();
                    ">
                    X
                </button>
            </div>
        @endforeach
    </div>
@endif
