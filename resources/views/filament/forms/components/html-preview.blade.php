{{--
    A description shown the way the portfolio website shows it, styled with the site's rules for descriptions
    (.html-element in the frontend's index.css). Links open in a new tab instead of leaving the admin.
    $html: trusted HTML (the rich editor's own output, which only holds the tags and attributes the editor supports)
    $direction: 'ltr' or 'rtl'
--}}
@once
    <style>
        .pf-html-preview-box {
            border: 1px solid var(--gray-200, #e5e7eb);
            border-radius: 0.5rem;
            background: #fff;
            overflow: hidden;
        }
        .dark .pf-html-preview-box { border-color: var(--gray-700, #374151); background: var(--gray-900, #111827); }
        .pf-html-preview-label {
            padding: 0.375rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--gray-500, #6b7280);
            border-bottom: 1px solid var(--gray-200, #e5e7eb);
        }
        .dark .pf-html-preview-label { border-color: var(--gray-700, #374151); color: var(--gray-400, #9ca3af); }
        /* the site's description box: 16px text, line height 1.8 */
        .pf-html-preview { padding: 0.75rem 1rem; max-height: 36rem; overflow: auto; font-size: 1rem; line-height: 1.8; }
        /* the portfolio website's rules for descriptions, on top of Tailwind's reset */
        .pf-html-preview :is(h1, h2, h3, h4, h5, h6, p) { font-size: revert; font-weight: revert; margin: 0; }
        .pf-html-preview :is(ul, ol) { list-style: revert; padding: revert; margin: 0; }
        .pf-html-preview a { text-decoration: underline; text-underline-offset: 2px; }
    </style>
@endonce

<div class="pf-html-preview-box">
    <div class="pf-html-preview-label">{{ __('keys.preview') }}</div>
    <div
        class="pf-html-preview"
        dir="{{ $direction }}"
        x-data
        x-on:click="const link = $event.target.closest('a[href]'); if (link) { $event.preventDefault(); if (/^(https?:|mailto:)/i.test(link.href)) window.open(link.href, '_blank', 'noopener'); }"
    >{!! $html !!}</div>
</div>
