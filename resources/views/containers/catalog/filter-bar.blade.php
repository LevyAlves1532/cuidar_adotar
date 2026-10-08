<section class="mx-auto w-full max-w-7xl px-5 pb-2 sm:px-8 lg:px-10" aria-labelledby="catalog-filters-title">
    <div class="rounded-[1.75rem] border border-[#f2e5df] bg-white p-3 shadow-[0_8px_24px_rgba(104,56,38,0.06)] sm:p-4">
        <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex min-w-0 flex-1 flex-wrap items-center gap-2">
                <h2 id="catalog-filters-title" class="flex shrink-0 items-center gap-2 text-xs font-semibold text-[#704f45]">
                    <svg class="h-4 w-4 text-[#356442]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M7 12h10M10 18h4" />
                    </svg>
                    Filtros ativos:
                </h2>

                @component('components.tag', ['label' => 'Cães'])
                    @slot('iconRight')
                        <button type="button" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro Cães">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                @endcomponent

                @component('components.tag', ['label' => 'Porte Pequeno'])
                    @slot('iconRight')
                        <button type="button" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro Porte Pequeno">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                @endcomponent

                @component('components.tag', ['label' => 'São Paulo, SP'])
                    @slot('iconRight')
                        <button type="button" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro São Paulo, SP">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                @endcomponent

                @component('components.tag', ['label' => 'Apto para apartamento'])
                    @slot('iconRight')
                        <button type="button" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro Apto para apartamento">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                @endcomponent

                <button type="button" class="px-1 text-[11px] font-medium text-[#b63817] underline-offset-2 transition hover:underline">Limpar tudo</button>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center lg:shrink-0">
                <p class="flex items-center gap-2 whitespace-nowrap text-xs text-[#704f45]">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#5f805f]" aria-hidden="true"></span>
                    <strong class="font-semibold text-[#3d2a24]">284</strong> pets disponíveis
                </p>

                <div class="flex items-center gap-2">
                    @component('components.select', [
                        'customClass' => 'flex items-center gap-2',
                        'label' => 'Ordenar por:',
                        'id' => 'catalog-sort',
                        'name' => 'sort',
                        'compact' => true,
                        'options' => [
                            'recent' => 'Mais recentes',
                            'oldest' => 'Mais antigos',
                            'name' => 'Nome',
                        ],
                    ])
                    @endcomponent

                    <div class="flex shrink-0 items-center rounded-full bg-[#fff7f3] p-1" aria-label="Modo de visualização">
                        <button type="button" class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-[#b63817] shadow-sm" aria-label="Visualização em grade" aria-pressed="true">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M4 4h6v6H4V4Zm10 0h6v6h-6V4ZM4 14h6v6H4v-6Zm10 0h6v6h-6v-6Z" />
                            </svg>
                        </button>
                        <button type="button" class="flex h-8 w-8 items-center justify-center rounded-full text-[#c9aaa0] transition hover:text-[#b63817]" aria-label="Visualização em lista" aria-pressed="false">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="M8 6h12M8 12h12M8 18h12M4 6h.01M4 12h.01M4 18h.01" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>