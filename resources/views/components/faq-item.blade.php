@props([
    'question',
    'answer',
])

<details {{ $attributes->merge(['class' => 'group rounded-xl bg-[#fff1eb] text-[#261714]']) }}>
    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 rounded-xl px-4 py-3 text-left text-xs font-semibold leading-5 transition hover:bg-[#fce9e1] focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-[#b63817] sm:px-5 sm:py-3.5 sm:text-sm">
        <span>{{ $question }}</span>
        <svg class="h-3.5 w-3.5 shrink-0 text-[#8c6b60] transition-transform group-open:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
        </svg>
    </summary>
    <div class="px-4 pb-4 text-xs leading-5 text-[#704f45] sm:px-5 sm:pb-5 sm:text-sm">
        <p>{{ $answer }}</p>
    </div>
</details>
