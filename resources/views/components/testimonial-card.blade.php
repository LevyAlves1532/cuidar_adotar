@props([
    'image' => '',
    'imageAlt' => '',
    'quote' => '',
    'name' => '',
    'caption' => '',
    'initials' => '',
    'avatarColor' => 'bg-[#d9f0d2] text-[#356442]',
    'slide' => '',
    'totalSlides' => '',
])

<article class="flex h-full min-w-0 shrink-0 basis-[calc(100%-1rem)] snap-start flex-col rounded-2xl border border-white bg-white p-4 shadow-sm sm:basis-[calc(50%-0.5rem)] sm:p-5 lg:basis-[calc(33.333%-0.75rem)]" data-carousel-slide role="group" aria-roledescription="slide" aria-label="{{ $slide }} de {{ $totalSlides }}">
    <div class="overflow-hidden rounded-xl bg-[#f4e4dc]">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="aspect-[1.6/1] w-full object-cover" loading="lazy" />
    </div>

    <blockquote class="mt-3 flex-1 font-serif text-sm italic leading-5 text-[#704f45]">
        “{{ $quote }}”
    </blockquote>

    <footer class="mt-4 flex items-center gap-2.5">
        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full text-xs font-semibold {{ $avatarColor }}" aria-hidden="true">{{ $initials }}</span>
        <span class="min-w-0">
            <span class="block truncate text-sm font-semibold leading-tight text-[#261714]">{{ $name }}</span>
            <span class="mt-0.5 block truncate text-[11px] text-[#8c6b60]">{{ $caption }}</span>
        </span>
    </footer>
</article>
