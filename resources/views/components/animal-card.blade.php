@props([
    'name' => '',
    'species' => '',
    'age' => '',
    'size' => '',
    'location' => '',
    'description' => '',
    'image' => '',
    'status' => '',
    'gender' => '',
    'genderColor' => 'bg-[#d9f0d2] text-[#356442]',
    'url' => '#adotar',
])

<article class="flex min-w-0 flex-col rounded-2xl border border-white bg-white p-2.5 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-[0_14px_30px_rgba(104,56,38,0.12)] sm:p-3">
    <div class="relative aspect-[1.08/1] overflow-hidden rounded-xl bg-[#f4e4dc]">
        @if (filled($image))
            <img src="{{ $image }}" alt="{{ $name }} aguardando adoção" class="h-full w-full object-cover object-center" loading="lazy" />
        @else
            <div class="flex h-full w-full flex-col items-center justify-center gap-2 px-4 text-center text-[#8c6b60]" role="img" aria-label="Imagem de {{ $name }} ainda não cadastrada">
                <svg class="h-10 w-10 opacity-60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 3.75-3.75 3 3 4.5-5.25 8.25 8.25M3.75 19.5h16.5A1.75 1.75 0 0 0 22 17.75v-11A1.75 1.75 0 0 0 20.25 5H3.75A1.75 1.75 0 0 0 2 6.75v11a1.75 1.75 0 0 0 1.75 1.75Z" />
                    <circle cx="8.25" cy="9" r="1.25" />
                </svg>
                <span class="text-xs font-medium">Imagem ainda não cadastrada</span>
            </div>
        @endif
        <div class="absolute left-2 top-2 max-w-[calc(100%-3rem)]">
            @component('components.tag', [
                'label' => $status,
                'color' => 'green',
                'customSize' => '10px',
            ])
            @endcomponent
        </div>
        <button type="button" class="absolute right-2 top-2 flex h-7 w-7 items-center justify-center rounded-full bg-white/90 text-[#8c6b60] shadow-sm transition hover:bg-white hover:text-[#b63817] focus:outline-none focus:ring-2 focus:ring-[#b63817]" aria-label="Favoritar {{ $name }}">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.8 8.8c0 4.2-4.8 7.2-8.8 10.2C8 16 3.2 13 3.2 8.8A4.3 4.3 0 0 1 7.5 4.5c1.7 0 3.3 1 4.5 2.4 1.2-1.4 2.8-2.4 4.5-2.4a4.3 4.3 0 0 1 4.3 4.3Z" />
            </svg>
        </button>
    </div>

    <div class="flex flex-1 flex-col px-1 pt-2">
        <div class="flex items-start justify-between gap-2">
            <h3 class="truncate font-serif text-lg font-bold leading-tight text-[#261714] sm:text-xl">{{ $name }}</h3>
            @component('components.tag', [
                'label' => $gender,
                'color' => $genderColor,
                'customSize' => '9px',
            ])
            @endcomponent
        </div>

        <div class="mt-1 flex flex-wrap gap-x-2 gap-y-1 text-[10px] text-[#704f45] fill-[#704f45] sm:text-[11px]">
            <span class="inline-flex items-center gap-1">
                <span aria-hidden="true">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z"/></svg>
                </span>
                {{ $age }}
            </span>
            <span class="inline-flex items-center gap-1">
                <span aria-hidden="true">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M80 448C53.5 448 32 426.5 32 400L32 240C32 213.5 53.5 192 80 192L104 192L104 296C104 309.3 114.7 320 128 320C141.3 320 152 309.3 152 296L152 192L200 192L200 264C200 277.3 210.7 288 224 288C237.3 288 248 277.3 248 264L248 192L296 192L296 296C296 309.3 306.7 320 320 320C333.3 320 344 309.3 344 296L344 192L392 192L392 264C392 277.3 402.7 288 416 288C429.3 288 440 277.3 440 264L440 192L488 192L488 296C488 309.3 498.7 320 512 320C525.3 320 536 309.3 536 296L536 192L560 192C586.5 192 608 213.5 608 240L608 400C608 426.5 586.5 448 560 448L80 448z"/></svg>
                </span>
                {{ $size }}
            </span>
        </div>
        <p class="mt-1 inline-flex items-center gap-1 truncate text-[10px] text-[#704f45] fill-[#704f45] sm:text-[11px]" title="{{ $location }}">
            <span aria-hidden="true">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg>
            </span>
            {{ $location }}
        </p>
        <p class="mt-1 mb-4 line-clamp-2 min-h-8 text-[10px] leading-4 text-[#8c6b60] sm:text-[11px]">{{ $description }}</p>

        @component('components.button', [
            'label' => "Conhecer {$name}",
            'url' => $url,
            'color' => 'secondary',
        ])
        @endcomponent
    </div>
</article>
