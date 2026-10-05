@props([
    'id' => '',
    'customClass' => '',
    'label' => '',
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'iconLeft' => null,
])

<div class="{{ $customClass }}">
    <label for="{{ $id }}" class="mb-2 block text-xs font-semibold text-[#704f45]">
        {{ $label }}
    </label>
    <div class="relative">
        {{ $iconLeft }}
        <input id="{{ $id }}" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" class="h-12 w-full rounded-xl border border-[#f0ddd5] bg-[#fffaf7] {{ $iconLeft ? 'pl-11' : 'pl-4' }} pr-4 text-sm text-[#3d2a24] outline-none transition placeholder:text-[#bda399] focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10" />
    </div>
</div>
