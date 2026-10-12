@props([
    'url' => '',
    'label' => '',
    'iconLeft' => null,
    'color' => 'primary',
    'tag' => 'anchor',
    'type' => 'button',
    'spacing' => 'default',
])

@php
    $classColor = match ($color) {
        'secondary' => 'bg-[#f8ebe6] text-[#201a18] hover:bg-[#a43716] hover:text-[#ffffff]',
        'white' => 'fill-[#b63817] text-[#704f45] hover:bg-white/70 hover:text-[#b63817] focus:ring-[#b63817]',
        'white-red' => 'fill-[#b63817] bg-[#fffaf7] text-[#b63817] hover:bg-white focus:ring-white',
        'terracotta' => 'fill-white bg-[#c64a2a] text-white hover:bg-[#d25432] focus:ring-[#f2b6a4]',
        default => 'fill-white bg-[#b63817] text-white hover:bg-[#922d12] focus:ring-[#b63817] shadow-sm',
    };
    $classSpacing = $spacing === 'none' ? '' : 'mt-4 lg:mt-0';
@endphp

@switch($tag)
    @case('button')
        <button type="{{ $type }}" {{ $attributes->merge(['class' => 'cursor-pointer '.$classSpacing.' inline-flex items-center justify-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold transition focus:outline-none focus:ring-2 focus:ring-offset-2 '.$classColor]) }}>
            {{ $iconLeft ?: $slot }}
            {{ $label }}
        </button>
        @break

    @default
        <a href="{{ $url }}" {{ $attributes->merge(['class' => $classSpacing.' inline-flex items-center justify-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold transition focus:outline-none focus:ring-2 focus:ring-offset-2 '.$classColor]) }}>
            {{ $iconLeft ?: $slot }}
            {{ $label }}
        </a>
@endswitch
