@props([
    'icon',
    'title',
    'content',
])

<x-grid.generic
    :title="$title"
    :icon="$icon"
    class="transition-none"
    :no-content="empty($content)"
>
    <x-cauri-read-more :content="$content" />
</x-grid.generic>
