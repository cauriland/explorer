@if($results->hasPages())
    <div class="flex justify-center {{ $class ?? '' }}">
        {{ $results->links('vendor.cauri.pagination') }}
    </div>
@endif
