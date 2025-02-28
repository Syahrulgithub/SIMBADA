@props(['variant' => 'default', 'disabled' => false])

@php
    $classes = match ($variant) {
        'success' => 'bg-primary text-white hover:bg-blue-700 active:bg-primary',
        'danger' => 'bg-customRed text-white hover:bg-red-700 active:bg-customRed',
        'default' => 'bg-blue-600 text-white hover:bg-blue-700 active:bg-blue-800',
    };
@endphp

<a
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => "shadow-inner px-4 py-2 rounded-md text-[10pt] tracking-widest font-semibold h-fit transition-all duration-200 $classes" . ($disabled ? ' opacity-50 cursor-not-allowed' : ''),
        'disabled' => $disabled ? 'disabled' : null,
    ]) }}>
    {{ $slot }}
    </a>
