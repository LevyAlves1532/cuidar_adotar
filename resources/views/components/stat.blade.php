@props([
    'label' => '',
    'value' => '',
])

<div class="rounded-xl border border-[#f0e2dc] bg-white px-3 py-4 shadow-sm sm:px-4">
    <dt class="text-xs text-[#8c6b60] sm:text-sm">{{ $label }}</dt>
    <dd class="mt-1 font-serif text-2xl font-bold text-[#b63817] sm:text-3xl">{{ $value }}</dd>
</div>
