<header class="border-b border-[#eadfd9] bg-[#fffaf7]">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8 lg:px-10" aria-label="Navegação principal">
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2" aria-label="Patas & Lar - início">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-[#b63817] text-white" aria-hidden="true">
                <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M298.5 156.9C312.8 199.8 298.2 243.1 265.9 253.7C233.6 264.3 195.8 238.1 181.5 195.2C167.2 152.3 181.8 109 214.1 98.4C246.4 87.8 284.2 114 298.5 156.9zM164.4 262.6C183.3 295 178.7 332.7 154.2 346.7C129.7 360.7 94.5 345.8 75.7 313.4C56.9 281 61.4 243.3 85.9 229.3C110.4 215.3 145.6 230.2 164.4 262.6zM133.2 465.2C185.6 323.9 278.7 288 320 288C361.3 288 454.4 323.9 506.8 465.2C510.4 474.9 512 485.3 512 495.7L512 497.3C512 523.1 491.1 544 465.3 544C453.8 544 442.4 542.6 431.3 539.8L343.3 517.8C328 514 312 514 296.7 517.8L208.7 539.8C197.6 542.6 186.2 544 174.7 544C148.9 544 128 523.1 128 497.3L128 495.7C128 485.3 129.6 474.9 133.2 465.2zM485.8 346.7C461.3 332.7 456.7 295 475.6 262.6C494.5 230.2 529.6 215.3 554.1 229.3C578.6 243.3 583.2 281 564.3 313.4C545.4 345.8 510.3 360.7 485.8 346.7zM374.1 253.7C341.8 243.1 327.2 199.8 341.5 156.9C355.8 114 393.6 87.8 425.9 98.4C458.2 109 472.8 152.3 458.5 195.2C444.2 238.1 406.4 264.3 374.1 253.7z"/></svg>
            </span>
            <span class="font-serif text-lg font-bold tracking-tight text-[#b63817] sm:text-xl">Patas <span class="font-normal">&amp;</span> Lar</span>
        </a>

        <button type="button" class="rounded-lg p-2 text-[#713b2c] transition hover:bg-[#f4e8e1] focus:outline-none focus:ring-2 focus:ring-[#b63817] lg:hidden" aria-controls="main-menu" aria-expanded="false" data-menu-toggle>
            <span class="sr-only">Abrir menu</span>
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div id="main-menu" class="absolute inset-x-0 top-18.25 z-10 hidden border-b border-[#eadfd9] bg-[#fffaf7] px-5 py-5 shadow-lg lg:static lg:flex lg:items-center lg:gap-7 lg-gap lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none" data-menu>
            <div class="flex flex-col gap-1 lg:flex-row lg:items-center lg:gap-2.5">
                <a href="#inicio" class="rounded-md px-2 py-2 text-sm font-medium transition hover:bg-[#f4e8e1] hover:text-[#b63817] lg:px-2 lg:py-1">Início</a>
                <a href="#adotar" class="rounded-md px-2 py-2 text-sm font-medium transition hover:bg-[#f4e8e1] hover:text-[#b63817] lg:px-2 lg:py-1">Quero Adotar</a>
                <a href="#como-funciona" class="rounded-md px-2 py-2 text-sm font-medium transition hover:bg-[#f4e8e1] hover:text-[#b63817] lg:px-2 lg:py-1">Como Funciona</a>
                <a href="#cadastrar" class="rounded-md px-2 py-2 text-sm font-medium transition hover:bg-[#f4e8e1] hover:text-[#b63817] lg:px-2 lg:py-1">Cadastrar Animal</a>
                <a href="#sobre" class="rounded-md px-2 py-2 text-sm font-medium transition hover:bg-[#f4e8e1] hover:text-[#b63817] lg:px-2 lg:py-1">Sobre Nós</a>
            </div>
            <a href="#encontrar-pet" class="mt-4 inline-flex items-center justify-center gap-2 rounded-full bg-[#b63817] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#922d12] focus:outline-none focus:ring-2 focus:ring-[#b63817] focus:ring-offset-2 lg:mt-0">
                <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M298.5 156.9C312.8 199.8 298.2 243.1 265.9 253.7C233.6 264.3 195.8 238.1 181.5 195.2C167.2 152.3 181.8 109 214.1 98.4C246.4 87.8 284.2 114 298.5 156.9zM164.4 262.6C183.3 295 178.7 332.7 154.2 346.7C129.7 360.7 94.5 345.8 75.7 313.4C56.9 281 61.4 243.3 85.9 229.3C110.4 215.3 145.6 230.2 164.4 262.6zM133.2 465.2C185.6 323.9 278.7 288 320 288C361.3 288 454.4 323.9 506.8 465.2C510.4 474.9 512 485.3 512 495.7L512 497.3C512 523.1 491.1 544 465.3 544C453.8 544 442.4 542.6 431.3 539.8L343.3 517.8C328 514 312 514 296.7 517.8L208.7 539.8C197.6 542.6 186.2 544 174.7 544C148.9 544 128 523.1 128 497.3L128 495.7C128 485.3 129.6 474.9 133.2 465.2zM485.8 346.7C461.3 332.7 456.7 295 475.6 262.6C494.5 230.2 529.6 215.3 554.1 229.3C578.6 243.3 583.2 281 564.3 313.4C545.4 345.8 510.3 360.7 485.8 346.7zM374.1 253.7C341.8 243.1 327.2 199.8 341.5 156.9C355.8 114 393.6 87.8 425.9 98.4C458.2 109 472.8 152.3 458.5 195.2C444.2 238.1 406.4 264.3 374.1 253.7z"/></svg>
                Encontrar Pet
            </a>
        </div>
    </nav>
</header>
