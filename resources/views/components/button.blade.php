@props([
    'url' => '',
    'label' => '',
    'iconLeft' => null,
    'color' => 'default',
])

@php
    $classColor = match ($color) {
        'white' => 'fill-[#b63817] text-[#704f45] hover:bg-white/70 hover:text-[#b63817] focus:ring-[#b63817]',
        default => 'fill-white bg-[#b63817] text-white hover:bg-[#922d12] focus:ring-[#b63817] shadow-sm',
    };
@endphp

<a href="{{ $url }}" class="mt-4 inline-flex items-center justify-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold transition focus:outline-none focus:ring-2 focus:ring-offset-2 lg:mt-0 {{ $classColor }}">
    {{ $iconLeft  }}
    {{ $label }}
</a>
