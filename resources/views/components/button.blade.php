@props([
    'url' => '',
    'label' => '',
    'iconLeft' => null,
    'color' => 'primary',
    'tag' => 'anchor',
    'type' => 'button',
])

@php
    $classColor = match ($color) {
        'secondary' => 'bg-[#f8ebe6] text-[#201a18] hover:bg-[#a43716] hover:text-[#ffffff]',
        'white' => 'fill-[#b63817] text-[#704f45] hover:bg-white/70 hover:text-[#b63817] focus:ring-[#b63817]',
        default => 'fill-white bg-[#b63817] text-white hover:bg-[#922d12] focus:ring-[#b63817] shadow-sm',
    };
@endphp

@switch($tag)
    @case('button')
        <button type="{{ $type }}" {{ $attributes->merge(['class' => 'cursor-pointer mt-4 inline-flex items-center justify-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold transition focus:outline-none focus:ring-2 focus:ring-offset-2 lg:mt-0 '.$classColor]) }}>
            {{ $iconLeft  }}
            {{ $label }}
        </button>
        @break

    @default
        <a href="{{ $url }}" {{ $attributes->merge(['class' => 'mt-4 inline-flex items-center justify-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold transition focus:outline-none focus:ring-2 focus:ring-offset-2 lg:mt-0 '.$classColor]) }}>
            {{ $iconLeft  }}
            {{ $label }}
        </a>
@endswitch
