@props([
    'id' => '',
    'customClass' => '',
    'label' => '',
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'iconLeft' => null,
    'compact' => false,
    'iconPosition' => 'left',
])

<div class="{{ $customClass }}">
    <label for="{{ $id }}" class="mb-2 block text-xs font-semibold text-[#704f45]">
        {{ $label }}
    </label>
    <div class="relative">
        {{ $iconLeft }}
        <input id="{{ $id }}" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" class="{{ $compact ? 'h-9 rounded-full px-3 text-xs' : 'h-12 rounded-xl px-4 text-sm' }} w-full border border-[#f0ddd5] bg-[#fffaf7] {{ $iconLeft && $iconPosition === 'left' ? 'pl-11' : '' }} {{ $iconLeft && $iconPosition === 'right' ? 'pr-9' : '' }} text-[#3d2a24] outline-none transition placeholder:text-[#bda399] focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10" />
    </div>
</div>
