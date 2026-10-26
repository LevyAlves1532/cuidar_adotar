<section class="border-b border-[#eadfd9] bg-[#fff4ef]" aria-label="Navegação do animal">
    <div class="mx-auto flex w-full max-w-7xl flex-wrap items-center justify-between gap-3 px-5 py-2.5 sm:px-8 lg:px-10">
        <nav class="flex min-w-0 flex-1 items-center gap-1.5 overflow-hidden text-[10px] text-[#8c6b60] sm:gap-2 sm:text-xs" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="inline-flex shrink-0 items-center gap-1 transition hover:text-[#b63817]" aria-label="Início">
                <svg class="h-3 w-3 fill-current" viewBox="0 0 640 640" aria-hidden="true">
                    <path d="M304 70.1C313.1 61.9 326.9 61.9 336 70.1L568 278.1C577.9 286.9 578.7 302.1 569.8 312C560.9 321.9 545.8 322.7 535.9 313.8L527.9 306.6V511.9C527.9 547.2 499.2 575.9 463.9 575.9H175.9C140.6 575.9 111.9 547.2 111.9 511.9V306.6L103.9 313.8C94 322.6 78.9 321.8 70 312C61.1 302.2 62 287 71.8 278.1L304 70.1ZM320 120.2L160 263.7V512C160 520.8 167.2 528 176 528H224V424C224 384.2 256.2 352 296 352H344C383.8 352 416 384.2 416 424V528H464C472.8 528 480 520.8 480 512V263.7L320 120.3ZM272 528H368V424C368 410.7 357.3 400 344 400H296C282.7 400 272 410.7 272 424V528Z" />
                </svg>
                <span class="hidden sm:inline">Início</span>
            </a>
            <span aria-hidden="true">/</span>
            <a href="{{ route('catalog') }}" class="shrink-0 transition hover:text-[#b63817]">Quero Adotar</a>
            <span aria-hidden="true">/</span>
            <span class="shrink-0 text-[#704f45]">{{ $animal->species->label() }}</span>
            <span aria-hidden="true">/</span>
            <span class="truncate font-medium text-[#b63817]" aria-current="page">{{ $animal->name }}</span>
        </nav>

        <div class="flex shrink-0 items-center gap-1.5">
            <a href="{{ route('catalog') }}" class="inline-flex items-center gap-1 rounded-full px-2.5 py-1.5 text-[10px] font-semibold text-[#704f45] transition hover:bg-white hover:text-[#b63817] sm:px-3 sm:text-xs">
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 18 9 12l6-6" />
                </svg>
                <span class="hidden sm:inline">Voltar ao Catálogo</span>
                <span class="sm:hidden">Voltar</span>
            </a>
            <button type="button" data-share-animal-profile data-share-title="{{ $animal->name }} | Cuidar & Adotar" data-share-text="Conheça {{ $animal->name }}, disponível para adoção responsável." class="flex h-7 w-7 items-center justify-center rounded-full bg-white text-[#8c6b60] shadow-sm transition hover:text-[#b63817] focus:outline-none focus:ring-2 focus:ring-[#b63817]" aria-label="Compartilhar {{ $animal->name }}">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <circle cx="18" cy="5" r="2" /><circle cx="6" cy="12" r="2" /><circle cx="18" cy="19" r="2" /><path stroke-linecap="round" d="m8 11 8-5M8 13l8 5" />
                </svg>
            </button>
        </div>
    </div>
</section>
