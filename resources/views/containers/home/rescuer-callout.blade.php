<section class="mx-auto max-w-7xl px-5 py-10 sm:px-8 sm:py-12 lg:px-10" aria-labelledby="rescuer-callout-title">
    <div class="relative isolate overflow-hidden rounded-3xl bg-[#a93616] px-6 py-7 shadow-[0_16px_30px_rgba(73,35,21,0.18)] sm:px-8 sm:py-9 lg:rounded-[2rem] lg:px-10 lg:py-8">
        <div class="pointer-events-none absolute -right-16 top-1/2 -z-10 h-56 w-56 -translate-y-1/2 rounded-full bg-[#d65a31]/25 sm:-right-10 sm:h-64 sm:w-64" aria-hidden="true"></div>

        <div class="grid gap-7 lg:grid-cols-[minmax(0,1.8fr)_minmax(16rem,0.9fr)] lg:items-center lg:gap-10">
            <div class="max-w-2xl">
                @component('components.tag', [
                    'label' => 'Para ONGs e Protetores Independentes',
                    'color' => 'orange',
                    'customSize' => '10px',
                ])
                    @slot('iconLeft')
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l7-4 7 4v14M9 10h.01M15 10h.01M9 14h.01M15 14h.01M10 21v-4h4v4" />
                        </svg>
                    @endslot
                @endcomponent

                <h2 id="rescuer-callout-title" class="mt-3 font-serif text-2xl font-bold leading-tight tracking-tight text-[#fffaf7] sm:text-3xl lg:text-[2rem]">
                    Tem animais resgatados sob seus cuidados?
                    <span class="block">Divulgue gratuitamente na Patas &amp; Lar.</span>
                </h2>
                <p class="mt-2 max-w-2xl text-xs leading-5 text-[#fff1e9] sm:text-sm">
                    Nossa plataforma conecta seu trabalho voluntário com milhares de famílias interessadas todos os meses. Tenha controle dos formulários de adoção, acompanhamento e visibilidade sem custo algum.
                </p>
            </div>

            <div class="flex w-full flex-col gap-2 sm:flex-row lg:flex-col">
                @component('components.button', [
                    'url' => '#cadastrar',
                    'label' => 'Cadastrar Animal Agora',
                    'color' => 'white-red',
                    'spacing' => 'none',
                ])
                    @slot('iconLeft')
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" />
                            <path stroke-linecap="round" d="M12 8v8m-4-4h8" />
                        </svg>
                    @endslot
                @endcomponent

                @component('components.button', [
                    'url' => '#sobre',
                    'label' => 'Conhecer Parcerias',
                    'color' => 'terracotta',
                    'spacing' => 'none',
                ])
                    @slot('iconLeft')
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8 12 3-3a3 3 0 0 1 4 0l1 1m-8 2-1 1a2.1 2.1 0 0 1-3-3l4-4a4.2 4.2 0 0 1 6 0m2 5-3 3a3 3 0 0 1-4 0l-1-1m8-2 1-1a2.1 2.1 0 0 1 3 3l-4 4a4.2 4.2 0 0 1-6 0" />
                        </svg>
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
</section>
