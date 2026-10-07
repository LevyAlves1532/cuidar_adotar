<section id="categorias" class="mx-auto max-w-7xl px-5 py-10 sm:px-8 sm:py-12 lg:px-10" aria-labelledby="categories-title">
    <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#b63817]">Navegação expressa</p>
            <h2 id="categories-title" class="mt-1 font-serif text-2xl font-bold tracking-tight text-[#261714] sm:text-3xl">Categorias Mais Procuradas</h2>
        </div>
        <p class="max-w-xs text-sm leading-5 text-[#8c6b60] sm:text-right">Encontre o companheiro ideal de acordo com sua rotina, espaço físico e familiar.</p>
    </div>

    <div class="mt-5 grid grid-cols-2 gap-2 sm:gap-3 md:grid-cols-3 lg:grid-cols-5">
        @component('components.category-card', [
            'label' => 'Cachorros',
            'available' => '+142',
            'iconBackground' => 'bg-[#fde9e3]',
            'iconColor' => 'text-[#b63817]',
        ])
            @slot('icon')
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 10.5c-1.6-1.8-2-4.5-.7-5.7 1.1-1 2.8-.2 3.7 1.2l1.5 2.4 1.5-2.4c.9-1.4 2.6-2.2 3.7-1.2 1.3 1.2.9 3.9-.7 5.7M7.5 10.5c-1 .8-1.5 2-1.5 3.3V19h4v-3h4v3h4v-5.2c0-1.3-.5-2.5-1.5-3.3" />
                </svg>
            @endslot
        @endcomponent

        @component('components.category-card', [
            'label' => 'Gatinhos',
            'available' => '+98',
            'iconBackground' => 'bg-[#d9f0d2]',
            'iconColor' => 'text-[#356442]',
        ])
            @slot('icon')
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m7 5 2 2.2L12 6l3 1.2L17 5l1 5.5c.4 3-1.8 5.5-6 5.5s-6.4-2.5-6-5.5L7 5Z" />
                    <path stroke-linecap="round" d="M9 20c1-.8 1.8-1.2 3-1.2s2 .4 3 1.2M9.5 11h.01M14.5 11h.01" />
                </svg>
            @endslot
        @endcomponent

        @component('components.category-card', [
            'label' => 'Filhotes',
            'available' => '+45',
            'iconBackground' => 'bg-[#ffe5c5]',
            'iconColor' => 'text-[#a96521]',
        ])
            @slot('icon')
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true">
                    <circle cx="12" cy="12" r="6.5" />
                    <path stroke-linecap="round" d="M9.5 12h.01M14.5 12h.01M9.5 15c1.4 1 3.6 1 5 0M12 5.5V3M7 7 5.5 5.5M17 7l1.5-1.5" />
                </svg>
            @endslot
        @endcomponent

        @component('components.category-card', [
            'label' => 'Sêniores',
            'available' => '+30',
            'iconBackground' => 'bg-[#eee9e5]',
            'iconColor' => 'text-[#40342f]',
        ])
            @slot('icon')
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true">
                    <circle cx="12" cy="5" r="1.5" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12 7 1.5 5-2 2.5M12 9 8.5 11M11.5 14.5 9 20M13.5 14.5 17 19M8.5 11l-1 4" />
                </svg>
            @endslot
        @endcomponent

        @component('components.category-card', [
            'label' => 'Cachorros Grandões',
            'available' => '+15',
            'iconBackground' => 'bg-[#ffd9d6]',
            'iconColor' => 'text-[#d04d45]',
        ])
            @slot('icon')
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 8.8c0 4.1-4.8 7.2-8 9.7-3.2-2.5-8-5.6-8-9.7C4 6.7 5.6 5 7.7 5c1.6 0 3 .9 4.3 2.2C13.3 5.9 14.7 5 16.3 5 18.4 5 20 6.7 20 8.8Z" />
                </svg>
            @endslot
        @endcomponent
    </div>
</section>
