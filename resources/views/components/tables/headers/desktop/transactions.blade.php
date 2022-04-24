@props([
    'responsive' => false,
    'breakpoint' => 'lg',
    'firstOn' => null,
    'lastOn' => null,
    'class' => '',
    'name' => '',
])

<x-cauri-tables.header
    :responsive="$responsive"
    :breakpoint="$breakpoint"
    :first-on="$firstOn"
    :last-on="$lastOn"
    :class="$class"
>
    <div class="inline-block text-left">
        <span>@lang($name)</span>
    </div>
</x-cauri-tables.header>
