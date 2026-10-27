<section class="mx-auto max-w-7xl px-5 pb-12 pt-8 sm:px-8 sm:pb-16 sm:pt-10 lg:px-10 lg:pb-20" aria-labelledby="about-us-title">
    <nav class="flex flex-wrap items-center gap-x-2 gap-y-1 text-[10px] text-[#8c6b60] fill-[#8c6b60] sm:text-xs" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="flex items-center gap-1 transition hover:text-[#b63817] hover:fill-[#b63817]">
            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" aria-hidden="true"><path d="M304 70.1C313.1 61.9 326.9 61.9 336 70.1L568 278.1C577.9 286.9 578.7 302.1 569.8 312C560.9 321.9 545.8 322.7 535.9 313.8L527.9 306.6L527.9 511.9C527.9 547.2 499.2 575.9 463.9 575.9L175.9 575.9C140.6 575.9 111.9 547.2 111.9 511.9L111.9 306.6L103.9 313.8C94 322.6 78.9 321.8 70 312C61.1 302.2 62 287 71.8 278.1L304 70.1zM320 120.2L160 263.7L160 512C160 520.8 167.2 528 176 528L224 528L224 424C224 384.2 256.2 352 296 352L344 352C383.8 352 416 384.2 416 424L416 528L464 528C472.8 528 480 520.8 480 512L480 263.7L320 120.3zM272 528L368 528L368 424C368 410.7 357.3 400 344 400L296 400C282.7 400 272 410.7 272 424L272 528z" /></svg>
            Início
        </a>
        <span aria-hidden="true">›</span>
        <span class="text-[#b63817]" aria-current="page">Sobre o Projeto</span>
    </nav>

    <div class="mt-8 grid items-center gap-10 lg:grid-cols-[1.08fr_0.92fr] lg:gap-14">
        <div class="max-w-2xl">
            @component('components.tag', [
                'label' => 'Nossa Causa e História • Amor que Transforma',
                'color' => 'white-red',
            ])
                @slot('iconLeft')
                    <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7.5-4.35-9.5-9.02C.7 8.44 2.27 5 5.7 5c1.9 0 3.16 1.08 4.3 2.38C11.14 6.08 12.4 5 14.3 5c3.43 0 5 3.44 3.2 6.98C17.5 16.65 12 21 12 21Z" /></svg>
                @endslot
            @endcomponent

            <h1 id="about-us-title" class="mt-5 max-w-xl font-serif text-3xl font-bold leading-[0.98] tracking-tight text-[#17110f] sm:text-4xl lg:text-5xl">
                Conectando corações para dar a cada animal uma história com
                <span class="font-serif font-semibold italic text-[#b63817]">final feliz.</span>
            </h1>

            <p class="mt-5 max-w-xl text-sm leading-6 text-[#704f45] sm:text-base">
                O Cuidar & Adotar nasceu da urgência de transformar resgates solitários em conexões duradouras. No Brasil, milhões de cães e gatos esperam por uma família enquanto protetores dedicam suas vidas sem infraestrutura adequada. Criamos uma ponte digital segura, humana e ética.
            </p>

            <div class="mt-7 flex flex-col gap-3 sm:flex-row sm:items-center">
                @component('components.button', [
                    'url' => '#pilares',
                    'label' => 'Conhecer Nossos Pilares',
                    'spacing' => 'none',
                ])
                    @slot('iconLeft')
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9" /><path stroke-linecap="round" d="m12 7 1.4 3.1L17 11.5l-3.6 1.4L12 16l-1.4-3.1L7 11.5l3.6-1.4L12 7Z" /></svg>
                    @endslot
                @endcomponent
                @component('components.button', [
                    'url' => '#quem-faz-acontecer',
                    'label' => 'Quem Faz Acontecer',
                    'color' => 'white',
                    'spacing' => 'none',
                ])
                    @slot('iconLeft')
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="9" cy="8" r="3" /><circle cx="17" cy="9" r="2" /><path stroke-linecap="round" d="M3 20a6 6 0 0 1 12 0M14 20a4 4 0 0 1 7 0" /></svg>
                    @endslot
                @endcomponent
            </div>

            <div class="mt-7 flex max-w-md items-center gap-3 rounded-xl bg-[#fff1eb] px-4 py-3 text-[10px] leading-4 text-[#8c6b60] sm:text-xs">
                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-[#c64a2a] text-white" aria-hidden="true">♥</span>
                <span class="font-semibold text-[#704f45]">Cuidar & Adotar</span>
                <span class="h-5 w-px bg-[#e8cfc5]" aria-hidden="true"></span>
                Iniciativa sem fins lucrativos comprometida com o fim do abandono e a guarda carinhosa.
            </div>
        </div>

        <div class="relative mx-auto w-full max-w-lg lg:max-w-none">
            <div class="relative aspect-[4/4.7] overflow-hidden rounded-[1.8rem] bg-[#d8b28d] shadow-xl sm:aspect-[4/4.2]">
                <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Pessoa abraçando um cachorro resgatado" class="h-full w-full object-cover object-center" />
                <div class="absolute inset-x-0 bottom-0 bg-linear-to-t from-black/60 to-transparent px-5 pb-5 pt-16 text-white">
                    <p class="text-xs font-semibold">Pipoca, resgatada em 2022</p>
                    <p class="mt-1 text-[10px] text-white/80">Cada história merece um novo começo.</p>
                </div>
            </div>
            <div class="absolute -bottom-4 left-1/2 flex w-[calc(100%-2rem)] -translate-x-1/2 items-center gap-3 rounded-xl bg-white px-4 py-3 shadow-lg sm:-bottom-5 sm:left-0 sm:w-auto sm:translate-x-0">
                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#d9f0d2] text-lg text-[#356442]" aria-hidden="true">♥</span>
                <div>
                    <p class="text-xs font-semibold text-[#4b352d]">100% Amor &amp; Cuidado</p>
                    <p class="text-[10px] text-[#8c6b60]">Processos éticos e humanizados</p>
                </div>
            </div>
        </div>
    </div>
</section>