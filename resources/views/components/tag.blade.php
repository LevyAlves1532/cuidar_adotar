@props([
    'iconLeft' => null,
    'label' => '',
    'color' => 'white-green',
    'customSize' => null,
])

@php
    $classColor = match ($color) {
        'white-green' => 'bg-[#d9f0d2] text-[#356442] fill-[#356442]',
        'white-red' => 'bg-[#ffd9d6] text-[#b63817] fill-[#b63817]',
        'green' => 'bg-[#356442] text-white fill-white shadow-sm',
        default => '',
    };
@endphp

<span style="{{ $customSize ? 'font-size: ' . $customSize . ';' : '' }}" class="inline-flex items-center gap-2 rounded-full px-3 py-1 {{ $customSize ? '' : 'text-xs' }} font-medium {{ $classColor }}">
    {{ $iconLeft }}
    {{ $label }}
</span>
