@props([
    'label' => '',
    'count' => null,
    'icon' => null,
    'active' => false,
    'url' => '#',
    'color' => 'primary',
])

@php
    $classColor = match ($color) {
        'orange' => $active
            ? 'border-[#c64a2a] bg-[#c64a2a] text-white shadow-sm'
            : 'border-[#f0d1c5] bg-white text-[#704f45] hover:border-[#c64a2a] hover:text-[#c64a2a]',
        'yellow' => $active
            ? 'border-[#d98d24] bg-[#d98d24] text-white shadow-sm'
            : 'border-[#f3dfbd] bg-white text-[#704f45] hover:border-[#d98d24] hover:text-[#d98d24]',
        'green' => $active
            ? 'border-[#6b9b61] bg-[#6b9b61] text-white shadow-sm'
            : 'border-[#d9ebd3] bg-white text-[#4f7650] hover:border-[#6b9b61] hover:text-[#4f7650]',
        default => $active
            ? 'border-[#b63817] bg-[#b63817] text-white shadow-sm'
            : 'border-[#eadfd9] bg-white text-[#704f45] hover:border-[#b63817] hover:text-[#b63817]',
    };
@endphp

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'inline-flex min-h-10 shrink-0 items-center justify-center gap-2 rounded-full border px-4 py-2 text-xs font-medium transition focus:outline-none focus:ring-2 focus:ring-[#b63817] focus:ring-offset-2 sm:px-5 ' . $classColor]) }} @if($active) aria-current="page" @endif>
    @if ($icon)
        <span class="flex h-4 w-4 items-center justify-center" aria-hidden="true">{!! $icon !!}</span>
    @endif
    <span>{{ $label }}</span>
    @if ($count !== null)
        @component('components.badge', [
            'label' => $count,
            'color' => $active ? 'white' : $color,
        ])
        @endcomponent
    @endif
</a>
