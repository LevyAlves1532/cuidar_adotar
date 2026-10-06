@props([
    'number' => '',
    'title' => '',
    'description' => '',
    'iconBackground' => 'bg-[#d9f0d2]',
    'iconColor' => 'text-[#356442]',
    'icon' => null,
])

<article class="h-full rounded-xl bg-white p-4 shadow-sm sm:p-5">
    <span class="flex h-9 w-9 items-center justify-center rounded-full {{ $iconBackground }} {{ $iconColor }}" aria-hidden="true">
        {{ $icon }}
    </span>

    <h3 class="mt-3 flex items-start gap-1 text-sm font-semibold leading-snug text-[#17110f]">
        <span class="shrink-0">{{ $number }}</span>
        <span>{{ $title }}</span>
    </h3>

    <p class="mt-1.5 text-xs leading-5 text-[#704f45] sm:text-[13px]">
        {{ $description }}
    </p>
</article>
