<section id="como-funciona" class="mx-auto max-w-7xl px-5 py-10 sm:px-8 sm:py-12 lg:px-10 lg:py-14" aria-labelledby="animal-how-it-works-title">
    <div class="mx-auto max-w-xl text-center">
        <p class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#b63817] sm:text-xs">Transparência &amp; carinho</p>
        <h2 id="animal-how-it-works-title" class="mt-2 font-serif text-2xl font-bold leading-tight tracking-tight text-[#17110f] sm:text-3xl">
            Como Funciona Adotar a Amora?
        </h2>
        <p class="mt-2 text-xs leading-5 text-[#704f45] sm:text-sm">
            Nosso processo é desenhado para proteger o pet e dar suporte total aos novos tutores em 4 etapas leves e ágeis.
        </p>
    </div>

    <div class="mt-7 grid grid-cols-1 gap-3 min-[480px]:grid-cols-2 md:grid-cols-4 sm:mt-8 sm:gap-4">
        @component('components.adoption-step-card', [
            'number' => '01',
            'title' => 'Escolha com Afinidade',
            'description' => 'Filtre por espécie, idade e nível de energia para identificar o bichinho que combina com seu estilo de vida.',
            'footnote' => 'Uso dos filtros inteligentes',
        ])
            @slot('icon')
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M7 12h10m-7 6h4" />
                    <circle cx="8" cy="6" r="1" fill="currentColor" />
                    <circle cx="15" cy="12" r="1" fill="currentColor" />
                    <circle cx="10" cy="18" r="1" fill="currentColor" />
                </svg>
            @endslot
        @endcomponent

        @component('components.adoption-step-card', [
            'number' => '02',
            'title' => 'Conheça o Histórico',
            'description' => 'Acesse mais informações do animal de seu interesse e fotos preparadas por quem resgatou.',
            'footnote' => 'Perfil verificado',
        ])
            @slot('icon')
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l5 5v13H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 3v5h5m-9 4h4m-4 4h4" />
                </svg>
            @endslot
        @endcomponent

        @component('components.adoption-step-card', [
            'number' => '03',
            'title' => 'Envie a Intenção',
            'description' => 'Preencha um questionário de interesse pelo animal.',
            'footnote' => 'Notifique quem adotou',
        ])
            @slot('icon')
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h10M4 12h7m-7 6h4m4-1 6-6 2 2-6 6-3 1 1-3Z" />
                </svg>
            @endslot
        @endcomponent

        @component('components.adoption-step-card', [
            'number' => '04',
            'title' => 'Contato pelo WhatsApp',
            'description' => 'Quem resgatou o animal fica encarregado de entrar em contato com você, aguarde a mensagem no seu WhatsApp e prossiga com o processo de adoção!',
            'footnote' => 'Uma nova história está preste a começar',
        ])
            @slot('icon')
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10Z" />
                    <path stroke-linecap="round" d="m4 4 1 1m14 0 1-1" />
                </svg>
            @endslot
        @endcomponent
    </div>

    <div class="mt-4 flex flex-col gap-4 rounded-2xl bg-[#f8ebe6] px-4 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-5">
        <div class="flex items-start gap-3">
            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-[#b63817]">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 5h16v13H8l-4 3V5Zm5 5h6m-6 3h4" /></svg>
            </span>
            <div>
                <p class="text-xs font-semibold text-[#261714] sm:text-sm">Ainda tem dúvidas sobre o processo?</p>
                <p class="text-[10px] leading-4 text-[#704f45] sm:text-[11px]">Consulte nosso Guia de Adoção Responsável ou converse com um voluntário agora.</p>
            </div>
        </div>

        <div class="flex flex-wrap gap-2 sm:shrink-0">
            @component('components.button', [
                'label' => 'Ler Guia Completo',
                'url' => '#requisitos-tutela',
                'color' => 'white-red',
                'spacing' => 'none',
                'customClass' => 'px-4 py-2 text-[10px]',
            ])
            @endcomponent
            @component('components.button', [
                'label' => 'Iniciar Adoção',
                'url' => '#adotar',
                'color' => 'terracotta',
                'spacing' => 'none',
                'customClass' => 'px-4 py-2 text-[10px]',
            ])
            @endcomponent
        </div>
    </div>
</section>