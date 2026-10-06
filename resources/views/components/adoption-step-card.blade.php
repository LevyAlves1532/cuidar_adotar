@props([
    'number' => '',
    'title' => '',
    'description' => '',
    'footnote' => '',
    'icon' => null,
])

<article class="flex h-full flex-col rounded-2xl bg-[#fdf0eb] p-5 sm:p-6">
    <span class="font-serif text-3xl font-bold leading-none text-[#efd4cb] sm:text-4xl" aria-hidden="true">{{ $number }}</span>
    <h3 class="mt-2 text-sm font-semibold leading-snug text-[#261714] sm:text-base">{{ $title }}</h3>
    <p class="mt-1.5 text-xs leading-5 text-[#8c6b60] sm:text-[13px]">{{ $description }}</p>
    <p class="mt-4 inline-flex items-center gap-1.5 text-[10px] font-medium leading-4 text-[#8b3d20] sm:mt-auto sm:pt-4 sm:text-[11px]">
        <span class="shrink-0" aria-hidden="true">{{ $icon }}</span>
        {{ $footnote }}
    </p>
</article>
