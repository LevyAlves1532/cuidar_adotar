<section id="adotar" class="relative z-10 mx-auto -mt-4 w-full max-w-7xl px-5 pb-12 sm:px-8 lg:-mt-8 lg:px-10" aria-labelledby="animal-filter-title">
    <div class="rounded-[1.75rem] border border-white/80 bg-white p-4 shadow-[0_18px_45px_rgba(104,56,38,0.12)] sm:p-6 lg:p-8">
        <div class="mb-5 flex flex-col gap-2 sm:mb-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#b63817]">Encontre seu novo melhor amigo</p>
                <h2 id="animal-filter-title" class="mt-1 font-serif text-2xl font-bold tracking-tight text-[#261714] sm:text-3xl">Qual pet combina com você?</h2>
            </div>
            <p class="max-w-sm text-sm leading-6 text-[#8c6b60] sm:text-right">Use os filtros para encontrar animais disponíveis para adoção perto de você.</p>
        </div>

        <form action="#catalogo" method="GET" class="grid gap-4 lg:grid-cols-12 lg:items-end" aria-label="Filtrar animais para adoção">
            @component('components.input', [
                'id' => 'animal-search',
                'customClass' => 'lg:col-span-12',
                'label' => 'O que você está procurando?',
                'name' => 'q',
                'type' => 'search',
                'placeholder' => 'Pesquise por nome, raça, perfil (dócil, calmo)...',
            ])
                @slot('iconLeft')
                    <svg class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-[#b68c7d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <circle cx="11" cy="11" r="7" />
                        <path stroke-linecap="round" d="m20 20-4-4" />
                    </svg>
                @endslot
            @endcomponent

            @component('components.select', [
                'customClass' => 'lg:col-span-3',
                'label' => 'Espécie',
                'id' => 'animal-species',
                'name' => 'species',
                'options' => [
                    '' => 'Cães e gatos',
                    'dog' => 'Cães',
                    'cat' => 'Gatos',
                ],
            ])
            @endcomponent

            @component('components.select', [
                'customClass' => 'lg:col-span-3',
                'label' => 'Porte',
                'id' => 'animal-size',
                'name' => 'size',
                'options' => [
                    '' => 'Qualquer porte',
                    'small' => 'Pequeno',
                    'medium' => 'Médio',
                    'large' => 'Grande',
                ],
            ])
            @endcomponent

            @component('components.select', [
                'customClass' => 'lg:col-span-3',
                'label' => 'Idade',
                'id' => 'animal-age',
                'name' => 'age',
                'options' => [
                    '' => 'Qualquer idade',
                    'puppy' => 'Filhote',
                    'adult' => 'Adulto',
                    'senior' => 'Idoso',
                ],
            ])
            @endcomponent

            @component('components.input', [
                'id' => 'animal-location',
                'customClass' => 'lg:col-span-3',
                'label' => 'Localização',
                'name' => 'location',
                'type' => 'text',
                'placeholder' => 'Cidade ou estado',
            ])
            @endcomponent

            <div class="flex flex-col gap-3 border-t border-[#f4e8e1] pt-4 sm:flex-row sm:items-center sm:justify-between lg:col-span-12">
                <label class="flex items-center gap-2 text-xs text-[#8c6b60]">
                    <input type="checkbox" name="verified" value="1" class="h-4 w-4 rounded border-[#dcbfb3] text-[#b63817] accent-[#b63817] focus:ring-[#b63817]/20" />
                    Apenas animais verificados e com acompanhamento inicial garantido
                </label>
                @component('components.button', [
                    'tag' => 'button',
                    'type' => 'submit',
                    'label' => 'Buscar animais',
                ])
                    @slot('iconLeft')
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path stroke-linecap="round" d="m20 20-4-4" />
                        </svg>
                    @endslot
                @endcomponent
            </div>
        </form>
    </div>
</section>
