<section class="bg-[#fdf0eb]" aria-labelledby="animal-support-title">
    <div class="mx-auto flex w-full max-w-7xl flex-col items-center px-5 py-10 text-center sm:px-8 sm:py-12 lg:px-10 lg:py-14">
        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-[#c64a2a] text-white shadow-sm">
            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M448 256C501 256 544 213 544 160C544 107 501 64 448 64C395 64 352 107 352 160C352 165.4 352.5 170.8 353.3 176L223.6 248.1C206.7 233.1 184.4 224 160 224C107 224 64 267 64 320C64 373 107 416 160 416C184.4 416 206.6 406.9 223.6 391.9L353.3 464C352.4 469.2 352 474.5 352 480C352 533 395 576 448 576C501 576 544 533 544 480C544 427 501 384 448 384C423.6 384 401.4 393.1 384.4 408.1L254.7 336C255.6 330.8 256 325.5 256 320C256 314.5 255.5 309.2 254.7 304L384.4 231.9C401.3 246.9 423.6 256 448 256z"/></svg>
        </span>

        <h2 id="animal-support-title" class="mt-3 max-w-lg font-serif text-xl font-bold leading-tight text-[#261714] sm:text-2xl">
            Não pode adotar agora? Você ainda pode transformar o destino da Amora.
        </h2>
        <p class="mt-2 max-w-xl text-[11px] leading-5 text-[#704f45] sm:text-xs">
            Compartilhe o perfil dela nas suas redes sociais ou apadrinhe os custos mensais de vacinas e ração enquanto ela aguarda a família definitiva.
        </p>

        <div class="mt-4 flex w-full flex-col justify-center gap-2 sm:w-auto sm:flex-row">
            @component('components.button', [
                'label' => 'Compartilhar Perfil',
                'url' => '#',
                'color' => 'terracotta',
                'spacing' => 'none',
                'customClass' => 'w-full px-4 py-2 text-[10px] sm:w-auto',
            ])
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="18" cy="5" r="2" /><circle cx="6" cy="12" r="2" /><circle cx="18" cy="19" r="2" /><path stroke-linecap="round" stroke-linejoin="round" d="m8 11 8-5m-8 7 8 5" /></svg>
            @endcomponent
            @component('components.button', [
                'label' => 'Apadrinhar Cuidados da Amora',
                'url' => '#',
                'color' => 'white-red',
                'spacing' => 'none',
                'customClass' => 'w-full px-4 py-2 text-[10px] sm:w-auto',
            ])
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20.8 8.8c0 4.2-4.8 7.2-8.8 10.2C8 16 3.2 13 3.2 8.8A4.3 4.3 0 0 1 7.5 4.5c1.7 0 3.3 1 4.5 2.4 1.2-1.4 2.8-2.4 4.5-2.4a4.3 4.3 0 0 1 4.3 4.3Z" /></svg>
            @endcomponent
        </div>
    </div>
</section>