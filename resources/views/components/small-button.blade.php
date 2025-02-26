@props(['variant' => 'default', 'disabled' => false])

<a 
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'shadow-inner px-2 py-0.5 rounded-md text-[8pt] tracking-widest font-semibold h-fit transition-all duration-200',
        'disabled' => $disabled ? 'disabled' : null,
    ]) }}
    :class="{
       'bg-blue-600 text-white hover:bg-blue-700 active:bg-blue-800': '{{ $variant }}'
        === 'default',
        'bg-primary text-white hover:bg-gray-200 active:bg-primary': '{{ $variant }}'
        === 'success',
        'bg-customRed text-white hover:bg-red-700 active:bg-customRed': '{{ $variant }}'
        === 'danger',
        
    }"
    {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</a>
