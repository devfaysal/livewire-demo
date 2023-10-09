@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-block w-100 ps-2 pe-2 py-2 border-start border-primary border-4 fw-medium text-decoration-none bg-primary-subtle'
            : 'd-block w-100 ps-2 pe-2 py-2 border-start border-4 fw-medium text-decoration-none hover-bg-body-tertiary hover-border-body-tertiary text-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
