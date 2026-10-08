@props([
    'label' => '',
    'color' => 'primary',
])

@php
    $classColor = match ($color) {
        'white' => 'bg-white/20 text-white',
        'orange' => 'bg-[#f9e2d8] text-[#a33b20]',
        'yellow' => 'bg-[#f8e8cc] text-[#a66a17]',
        'green' => 'bg-[#e2f1dd] text-[#4f7650]',
        default => 'bg-[#f4e8e1] text-[#8c6b60]',
    };
@endphp

<span class="inline-flex min-w-6 items-center justify-center rounded-full px-1.5 py-0.5 text-[10px] font-semibold leading-none {{ $classColor }}">
    {{ $label }}
</span>
