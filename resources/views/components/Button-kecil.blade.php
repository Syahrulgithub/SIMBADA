@props(['variant' => 'default', 'disabled' => false])

<button 
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'shadow-inner px-3 py-0.5 rounded-md w-full text-[8pt] tracking-widest font-medium h-fit transition-all duration-200 inline-flex items-center justify-center',
        'disabled' => $disabled ? 'disabled' : null,
    ]) }}
    :class="{
       'bg-blue-600 text-white hover:bg-blue-700 active:bg-blue-800': '{{ $variant }}'
        === 'default',
        'bg-customRed text-white hover:bg-red-700 active:bg-customRed': '{{ $variant }}'
        === 'danger',
        
    }"
    {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</button>


