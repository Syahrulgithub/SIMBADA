@props(['variant' => 'default'])

<a
    {{ $attributes->merge(['type' => 'submit', 'class' => 'shadow-inner px-3 py-1 rounded-md text-sm font-semibold transition-all duration-200']) }}
    :class="{
        'bg-blue-600 text-white hover:bg-blue-700 active:bg-blue-800': '{{ $variant }}'
        === 'default',
        'bg-gray-700 text-white hover:bg-gray-950 active:bg-gray-950': '{{ $variant }}'
        === 'dark',
        'bg-gray-200 text-gray-950 hover:bg-gray-300 active:bg-gray-200': '{{ $variant }}'
        === 'light',
        'bg-green-500 text-white hover:bg-green-600 active:bg-green-700': '{{ $variant }}'
        === 'success',
        'bg-yellow-500 text-white hover:bg-yellow-600 active:bg-yellow-700': '{{ $variant }}'
        === 'warning',
        'bg-red-500 text-white hover:bg-red-600 active:bg-red-700': '{{ $variant }}'
        === 'danger',
    }">

    {{ $slot }}
</a>
