@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-inline-flex align-items-center h-100 text-decoration-none text-dark px-1 pt-1 border-bottom border-2 border-info text-sm font-medium leading-5 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'd-inline-flex align-items-center h-100 text-decoration-none text-dark px-1 pt-1 border-bottom border-2 border-transparent text-sm font-medium leading-5 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
