@props([
    'name' => '',
    'role' => '',
    'specialty' => '',
    'quote' => '',
    'image' => '',
    'imageAlt' => '',
    'footer' => '',
    'badgeColor' => 'bg-[#d9f0d2] text-[#356442]',
])

<article class="flex h-full flex-col overflow-hidden rounded-2xl bg-white p-3.5 shadow-sm ring-1 ring-[#f1e3dd] transition hover:-translate-y-1 hover:shadow-md sm:rounded-3xl sm:p-4">
    <div class="aspect-[1.35/1] overflow-hidden rounded-xl bg-[#ead6c7] sm:rounded-2xl">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="h-full w-full object-cover object-center" loading="lazy" />
    </div>

    <div class="flex flex-1 flex-col px-0.5 pt-4 sm:px-0.5">
        <div class="flex items-start justify-between gap-2">
            <div>
                <h3 class="text-sm font-semibold text-[#17110f] sm:text-base">{{ $name }}</h3>
                <p class="mt-0.5 text-[10px] leading-4 text-[#b63817] sm:text-xs">{{ $role }}</p>
            </div>
            @if ($specialty !== '')
                <span class="shrink-0 rounded-full px-2 py-1 text-[9px] font-medium {{ $badgeColor }}">{{ $specialty }}</span>
            @endif
        </div>

        <blockquote class="mt-4 border-l-2 border-[#f1c7b9] pl-3 text-[11px] italic leading-5 text-[#704f45] sm:text-xs">
            “{{ $quote }}”
        </blockquote>

        <div class="mt-auto flex items-end justify-between gap-3 pt-5 text-[10px] leading-4 text-[#8c6b60]">
            <span>{{ $footer }}</span>
            <span class="text-[#b63817]" aria-hidden="true">✦</span>
        </div>
    </div>
</article>
