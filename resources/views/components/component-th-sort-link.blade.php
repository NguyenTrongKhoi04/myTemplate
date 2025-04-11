@props(['columns'])

@foreach ($columns as $field => $label)
    @php
        $isActive = request('field_sort') === $field;
        $nextOrder = ($isActive && request('type_sort') === 'desc') ? 'asc': 'desc';
        $url = request()->fullUrlWithQuery(['field_sort' => $field, 'type_sort' => $nextOrder]);
    @endphp
    <th class="cursor-pointer text-nowrap ">
        <a href="{{ $url }}" class="text-dark text-decoration-none d-flex justify-content-center align-items-center w-100 h-100">
            <span class="me-1">{{ $label }}</span>
            @if ($isActive)
                @if (request('type_sort') === 'desc')
                    <i class="fas fa-arrow-down text-primary"></i>
                @else
                    <i class="fas fa-arrow-up text-primary"></i>
                @endif
            @else
                <i class="fas fa-sort"></i>
            @endif
        </a>
    </th>
@endforeach
