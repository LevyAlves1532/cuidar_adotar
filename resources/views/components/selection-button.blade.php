@props([
    'label' => '',
    'count' => null,
    'icon' => null,
    'active' => false,
    'url' => '#',
    'color' => 'primary',
    'tag' => 'anchor',
    'type' => 'button',
    'name' => null,
    'value' => null,
    'customClass' => '',
    'compact' => false,
    'action' => null,
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

@if ($tag === 'button' || $tag === 'label')
@if ($tag === 'label')
<label {{ $attributes->merge(['class' => ($compact ? 'inline-flex min-h-8 px-3 py-1 text-xs' : 'inline-flex min-h-10 px-4 py-2 text-xs sm:px-5') . ' shrink-0 cursor-pointer items-center justify-center gap-2 rounded-full border font-medium transition focus-within:ring-2 focus-within:ring-[#b63817] focus-within:ring-offset-0 ' . $classColor . ' ' . $customClass]) }}>
@else
<button type="{{ $type }}" @if($action) wire:click="{{ $action }}" @endif {{ $attributes->merge(['class' => ($compact ? 'inline-flex min-h-8 px-3 py-1 text-xs' : 'inline-flex min-h-10 px-4 py-2 text-xs sm:px-5') . ' shrink-0 items-center justify-center gap-2 rounded-full border font-medium transition focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] focus-visible:ring-offset-0 ' . $classColor . ' ' . $customClass]) }}>
@endif
    @if ($name && $value)
        <input type="radio" name="{{ $name }}" value="{{ $value }}" class="sr-only" @checked($active) />
    @endif
@else
<a href="{{ $url }}" {{ $attributes->merge(['class' => 'inline-flex min-h-10 shrink-0 items-center justify-center gap-2 rounded-full border px-4 py-2 text-xs font-medium transition focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] focus-visible:ring-offset-0 sm:px-5 ' . $classColor . ' ' . $customClass]) }} @if($active) aria-current="page" @endif>
@endif
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
@if ($tag === 'button')
</button>
@elseif ($tag === 'label')
</label>
@else
</a>
@endif
