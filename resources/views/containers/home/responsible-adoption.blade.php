<section id="guia-adotante" class="mx-auto max-w-7xl px-5 py-8 sm:px-8 sm:py-10 lg:px-10" aria-labelledby="responsible-adoption-title">
    <div class="rounded-2xl bg-[#eef1e6] p-5 sm:rounded-3xl sm:p-7 lg:p-8">
        @component('components.tag', [
            'label' => 'Compromisso Ético',
            'color' => 'green',
        ])
            @slot('iconLeft')
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12 3 8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4" />
                </svg>
            @endslot
        @endcomponent

        <div class="mt-3 max-w-xl">
            <h2 id="responsible-adoption-title" class="font-serif text-2xl font-bold leading-tight tracking-tight text-[#17110f] sm:text-3xl">
                Adoção Responsável:
                <span class="block font-semibold italic text-[#356442]">Um Laço de Amor Sem Prazo de Validade</span>
            </h2>
            <p class="mt-2 text-sm leading-5 text-[#704f45]">
                Um animal de estimação vive em média de 12 a 18 anos. Adotar é abraçar a rotina, os custos veterinários, as mudanças de residência e todos os ciclos com paciência e dedicação.
            </p>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-3 min-[480px]:grid-cols-2 md:grid-cols-4 sm:gap-4">
            @component('components.responsible-adoption-card', [
                'number' => '1.',
                'title' => 'Planejamento Familiar',
                'description' => 'Todos os membros da casa devem concordar com a chegada do pet e partilhar dos cuidados diários.',
                'iconBackground' => 'bg-[#d9f0d2]',
                'iconColor' => 'text-[#356442]',
            ])
                @slot('icon')
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <circle cx="9" cy="8" r="2.5" />
                        <circle cx="16" cy="9" r="2" />
                        <path d="M3.5 17a5.5 5.5 0 0 1 11 0v1h-11v-1ZM14 13.5a4 4 0 0 1 6.5 3.1v1.4h-4.5v-1a7.4 7.4 0 0 0-2-5.1v1.6Z" />
                    </svg>
                @endslot
            @endcomponent

            @component('components.responsible-adoption-card', [
                'number' => '2.',
                'title' => 'Espaço Seguro',
                'description' => 'Apartamentos com telas de proteção para felinos e quintais sem rotas de fuga ou risco de acidentes.',
                'iconBackground' => 'bg-[#ffd9d6]',
                'iconColor' => 'text-[#b63817]',
            ])
                @slot('icon')
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4 10 8-6 8 6v9a1 1 0 0 1-1 1h-5v-6h-4v6H5a1 1 0 0 1-1-1v-9Z" />
                        <path stroke-linecap="round" d="M12 8v4m-2-2h4" />
                    </svg>
                @endslot
            @endcomponent

            @component('components.responsible-adoption-card', [
                'number' => '3.',
                'title' => 'Saúde e Vacinas',
                'description' => 'Vacinação anual V10/V4 ou quádrupla, controle de pulgas, vermifugação e alimentação equilibrada de qualidade.',
                'iconBackground' => 'bg-[#ffe5c5]',
                'iconColor' => 'text-[#a96521]',
            ])
                @slot('icon')
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <rect x="5" y="7" width="14" height="14" rx="2" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7V5h6v2m-3 4v6m-3-3h6" />
                    </svg>
                @endslot
            @endcomponent

            @component('components.responsible-adoption-card', [
                'number' => '4.',
                'title' => 'Amor e Paciência',
                'description' => 'Tempo de adaptação, acolhimento de traumas passados e presença afetiva ao longo de toda a maturidade.',
                'iconBackground' => 'bg-[#d9f0d2]',
                'iconColor' => 'text-[#356442]',
            ])
                @slot('icon')
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.8 8.8c0 4.2-4.8 7.2-8.8 10.2C8 16 3.2 13 3.2 8.8A4.3 4.3 0 0 1 7.5 4.5c1.7 0 3.3 1 4.5 2.4 1.2-1.4 2.8-2.4 4.5-2.4a4.3 4.3 0 0 1 4.3 4.3Z" />
                    </svg>
                @endslot
            @endcomponent
        </div>
    </div>
</section>
