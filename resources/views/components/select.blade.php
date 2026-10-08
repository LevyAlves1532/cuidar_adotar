@props([
    'customClass' => '',
    'label' => '',
    'id' => '',
    'name' => '',
    'options' => [],
    'compact' => false,
    'fullWidth' => false,
])

<div class="{{ $customClass }}">
    <label for="{{ $id }}" class="{{ $compact ? 'shrink-0 text-[11px]' : 'mb-2 block text-xs font-semibold' }} text-[#704f45]">
        {{ $label }}
    </label>
    <select id="{{ $id }}" name="{{ $name }}" class="{{ $compact ? ($fullWidth ? 'h-9 w-full rounded-full px-3 text-xs' : 'h-9 min-w-36 rounded-full px-3 text-xs') : 'h-12 w-full rounded-xl px-4 text-sm' }} appearance-none border border-[#f0ddd5] bg-[#fffaf7] text-[#3d2a24] outline-none transition focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10">
        @foreach ($options as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
