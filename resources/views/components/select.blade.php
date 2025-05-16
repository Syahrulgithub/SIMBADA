@props(['id', 'name', 'options' => [], 'placeholder' => 'Pilih'])

<select {{ $attributes->merge(['class' => 'border rounded w-full']) }} id="{{ $id }}" name="{{ $name }}">
    <option value="">{{ $placeholder }}</option>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
</select>
