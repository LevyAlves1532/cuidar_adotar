<section id="como-funciona" class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-14 lg:px-10 lg:py-16" aria-labelledby="how-it-works-title">
    <div class="mx-auto max-w-md text-center">
        <p class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#b63817] sm:text-xs">Passo a passo transparente</p>
        <h2 id="how-it-works-title" class="mt-2 font-serif text-2xl font-bold leading-tight tracking-tight text-[#17110f] sm:text-3xl">
            Como Funciona a Adoção na Patas &amp; Lar
        </h2>
        <p class="mt-2 text-xs leading-5 text-[#704f45] sm:text-sm">
            Um processo simples, humano e com o bem-estar do pet como prioridade absoluta.
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
            'description' => 'Acesse o histórico clínico, fotos, vídeos e notas de temperamento preparadas por quem resgatou.',
            'footnote' => 'Perfil médico verificado',
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
            'description' => 'Preencha um questionário carinhoso contando sobre sua residência, rotina e experiência com animais.',
            'footnote' => 'Resposta em até 48h úteis',
        ])
            @slot('icon')
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h10M4 12h7m-7 6h4m4-1 6-6 2 2-6 6-3 1 1-3Z" />
                </svg>
            @endslot
        @endcomponent

        @component('components.adoption-step-card', [
            'number' => '04',
            'title' => 'Encontro & Adoção',
            'description' => 'Agende uma visita com a ONG ou protetor, assine o termo de responsabilidade e dê as boas-vindas ao novo amigo!',
            'footnote' => 'Início de uma nova história',
        ])
            @slot('icon')
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10Z" />
                    <path stroke-linecap="round" d="m4 4 1 1m14 0 1-1" />
                </svg>
            @endslot
        @endcomponent
    </div>
</section>
