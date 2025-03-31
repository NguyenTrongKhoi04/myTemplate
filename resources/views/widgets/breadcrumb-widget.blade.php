<ol class="breadcrumb text-muted fs-6 fw-semibold">
    @foreach($breadcrumbs as $breadcrumb)
        @if (!$loop->last)
            <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a></li>
        @else
            <li class="breadcrumb-item text-muted">{{ $breadcrumb['label'] }}</li>
        @endif
    @endforeach
</ol>



