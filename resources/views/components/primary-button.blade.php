<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark px-3 lh-sm']) }}>
    {{ $slot }}
</button>
