<section class="mx-auto max-w-7xl px-5 pb-7 pt-8 sm:px-8 sm:pb-9 sm:pt-10 lg:px-10" aria-labelledby="catalog-title">
    <nav class="flex flex-wrap items-center gap-x-2 gap-y-1 text-[10px] text-[#8c6b60] fill-[#8c6b60] sm:text-xs" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="transition hover:text-[#b63817] hover:fill-[#b63817] flex gap-1 items-center">
            <span class="">
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M304 70.1C313.1 61.9 326.9 61.9 336 70.1L568 278.1C577.9 286.9 578.7 302.1 569.8 312C560.9 321.9 545.8 322.7 535.9 313.8L527.9 306.6L527.9 511.9C527.9 547.2 499.2 575.9 463.9 575.9L175.9 575.9C140.6 575.9 111.9 547.2 111.9 511.9L111.9 306.6L103.9 313.8C94 322.6 78.9 321.8 70 312C61.1 302.2 62 287 71.8 278.1L304 70.1zM320 120.2L160 263.7L160 512C160 520.8 167.2 528 176 528L224 528L224 424C224 384.2 256.2 352 296 352L344 352C383.8 352 416 384.2 416 424L416 528L464 528C472.8 528 480 520.8 480 512L480 263.7L320 120.3zM272 528L368 528L368 424C368 410.7 357.3 400 344 400L296 400C282.7 400 272 410.7 272 424L272 528z"/></svg>
            </span>
            Início
        </a>
        <span aria-hidden="true">›</span>
        <a href="{{ route('catalog') }}" class="transition hover:text-[#b63817]">Quero Adotar</a>
        <span aria-hidden="true">›</span>
        <span class="text-[#b63817]" aria-current="page">Catálogo de Animais</span>
    </nav>

    <div class="mt-3 max-w-2xl">
        @component('components.tag', [
            'label' => 'Adoção Ética, Gratuita e Responsável',
            'color' => 'white-green',
        ])
            @slot('iconLeft')
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 6h14M5 10h14M5 14h8M5 18h6" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16 15 1.5 1.5L20 14" />
                </svg>
            @endslot
        @endcomponent

        <h1 id="catalog-title" class="mt-4 font-serif text-3xl font-bold leading-tight tracking-tight text-[#261714] sm:text-4xl lg:text-5xl">
            Encontre seu <span class="font-semibold italic text-[#b63817]">Novo Melhor Amigo</span>
        </h1>
        <p class="mt-2 max-w-xl text-sm leading-6 text-[#704f45] sm:text-base">
            Mais de 280 cães e gatos resgatados esperando por uma família amorosa e responsável. Use os filtros detalhados para encontrar o companheiro que melhor combina com seu lar, rotina e estilo de vida.
        </p>
    </div>

    <nav class="mt-7 -mx-5 flex gap-2 overflow-x-auto px-5 pb-1 scrollbar-none sm:-mx-8 sm:px-8 lg:-mx-10 lg:px-10" aria-label="Categorias do catálogo">
        @component('components.selection-button', [
            'label' => 'Todos os Pets',
            'count' => '284',
            'active' => true,
            'url' => route('catalog'),
        ])
            @slot('icon')
                <svg class="w-3.5 h-3.5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M104 112C90.7 112 80 122.7 80 136L80 184C80 197.3 90.7 208 104 208L152 208C165.3 208 176 197.3 176 184L176 136C176 122.7 165.3 112 152 112L104 112zM256 128C238.3 128 224 142.3 224 160C224 177.7 238.3 192 256 192L544 192C561.7 192 576 177.7 576 160C576 142.3 561.7 128 544 128L256 128zM256 288C238.3 288 224 302.3 224 320C224 337.7 238.3 352 256 352L544 352C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288L256 288zM256 448C238.3 448 224 462.3 224 480C224 497.7 238.3 512 256 512L544 512C561.7 512 576 497.7 576 480C576 462.3 561.7 448 544 448L256 448zM80 296L80 344C80 357.3 90.7 368 104 368L152 368C165.3 368 176 357.3 176 344L176 296C176 282.7 165.3 272 152 272L104 272C90.7 272 80 282.7 80 296zM104 432C90.7 432 80 442.7 80 456L80 504C80 517.3 90.7 528 104 528L152 528C165.3 528 176 517.3 176 504L176 456C176 442.7 165.3 432 152 432L104 432z"/></svg>
            @endslot
        @endcomponent

        @component('components.selection-button', ['label' => 'Cães Resgatados', 'count' => '182', 'url' => '#caes'])
            @slot('icon') 🐶 @endslot
        @endcomponent
        @component('components.selection-button', ['label' => 'Gatos Afetuosos', 'count' => '102', 'url' => '#gatos', 'color' => 'yellow'])
            @slot('icon') 🐱 @endslot
        @endcomponent
        @component('components.selection-button', ['label' => 'Casos Urgentes', 'count' => '14', 'url' => '#urgentes', 'color' => 'orange'])
            @slot('icon') ♢ @endslot
        @endcomponent
        @component('components.selection-button', ['label' => 'Patinhas Especiais', 'count' => '9', 'url' => '#especiais', 'color' => 'green'])
            @slot('icon') 🐾 @endslot
        @endcomponent
    </nav>
</section>
