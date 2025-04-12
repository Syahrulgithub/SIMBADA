@props(['variant' => 'default', 'disabled' => false])

<a 
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'shadow-inner px-3 py-0.5 rounded-md w-full text-[8pt] tracking-widest font-medium h-fit transition-all duration-200 inline-flex items-center justify-center',
        'disabled' => $disabled ? 'disabled' : null,
    ]) }}
    :class="{
       'bg-blue-600 text-white hover:bg-blue-700 active:bg-blue-800': '{{ $variant }}'
        === 'default',
        'bg-primary text-white hover:bg-blue-300 active:bg-primary': '{{ $variant }}'
        === 'success',
        'bg-customGreen text-white hover:bg-green-800 active:bg-customGreen': '{{ $variant }}'
        === 'green'
        
    }"
    {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</a>


