@props([
    'customClass' => '',
    'label' => '',
    'id' => '',
    'name' => '',
    'options' => [],
])

<div class="{{ $customClass }}">
    <label for="{{ $id }}" class="mb-2 block text-xs font-semibold text-[#704f45]">
        {{ $label }}
    </label>
    <select id="{{ $id }}" name="{{ $name }}" class="h-12 w-full appearance-none rounded-xl border border-[#f0ddd5] bg-[#fffaf7] px-4 text-sm text-[#3d2a24] outline-none transition focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10">
        @foreach ($options as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
