<aside class="rounded-[1.75rem] border border-[#f2e5df] bg-white p-4 shadow-[0_8px_24px_rgba(104,56,38,0.06)] sm:p-5 lg:sticky lg:top-24 lg:h-fit" aria-labelledby="catalog-filter-title">
    <div class="flex items-center justify-between">
        <h2 id="catalog-filter-title" class="flex items-center gap-2 text-base font-bold text-[#261714]">
            <svg class="h-4 w-4 text-[#b63817]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M7 12h10M10 18h4" />
            </svg>
            Filtrar Adoção
        </h2>
        <button type="reset" form="catalog-filter-form" class="text-xs font-medium text-[#8c6b60] transition hover:text-[#b63817]">Redefinir</button>
    </div>

    <form id="catalog-filter-form" action="{{ route('catalog') }}" method="GET" class="mt-4 space-y-4">
        <div>
            @component('components.input', ['id' => 'catalog-search', 'name' => 'search', 'type' => 'search', 'label' => 'Busca Rápida', 'placeholder' => 'Nome, raça, porte, temperamento', 'customClass' => 'catalog-sidebar-input', 'compact' => true, 'iconPosition' => 'right'])
                @slot('iconLeft')
                    <svg class="pointer-events-none absolute right-3 top-2.5 h-3.5 w-3.5 text-[#8c6b60]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="7" /><path stroke-linecap="round" d="m20 20-4-4" /></svg>
                @endslot
            @endcomponent
        </div>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Espécie</legend>
            <div class="grid grid-cols-3 gap-2">
                <label class="flex cursor-pointer flex-col items-center gap-1 rounded-sm bg-[#b63817] px-1 py-2 text-[9px] font-semibold text-white"><input class="sr-only" type="radio" name="species" value="all" checked /> <span class="text-sm">🐾</span>Todos</label>
                <label class="flex cursor-pointer flex-col items-center gap-1 rounded-sm bg-[#fff0eb] px-1 py-2 text-[9px] font-semibold text-[#704f45]"><input class="sr-only" type="radio" name="species" value="dog" /> <span class="text-sm">🐕</span>Cães</label>
                <label class="flex cursor-pointer flex-col items-center gap-1 rounded-sm bg-[#fff0eb] px-1 py-2 text-[9px] font-semibold text-[#704f45]"><input class="sr-only" type="radio" name="species" value="cat" /> <span class="text-sm">🐈</span>Gatos</label>
            </div>
        </fieldset>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Sexo</legend>
            <div class="flex flex-wrap gap-1.5">
                @component('components.selection-button', ['tag' => 'label', 'name' => 'gender', 'value' => 'all', 'label' => 'Todos', 'active' => true, 'color' => 'green', 'compact' => true]) @endcomponent
                @component('components.selection-button', ['tag' => 'label', 'name' => 'gender', 'value' => 'male', 'label' => 'Macho ♂', 'compact' => true]) @endcomponent
                @component('components.selection-button', ['tag' => 'label', 'name' => 'gender', 'value' => 'female', 'label' => 'Fêmea ♀', 'compact' => true]) @endcomponent
            </div>
        </fieldset>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Faixa Etária</legend>
            <div class="space-y-2 text-xs text-[#704f45]">
                @foreach ([['Filhote (até 1 ano)', '64', 'puppy'], ['Jovem (1 a 3 anos)', '118', 'young'], ['Adulto (3 a 7 anos)', '75', 'adult'], ['Sênior (8+ anos)', '27', 'senior']] as [$label, $count, $value])
                    <label class="flex cursor-pointer items-center gap-2"><input type="checkbox" name="age[]" value="{{ $value }}" class="h-3.5 w-3.5 rounded border-[#cdb8af] accent-[#b63817]" /> <span class="flex-1">{{ $label }}</span><span class="text-[10px] text-[#8c6b60]">{{ $count }}</span></label>
                @endforeach
            </div>
        </fieldset>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Porte do Animal</legend>
            <div class="grid grid-cols-2 gap-1.5">
                @foreach ([['Pequeno', 'Até 10 kg'], ['Médio', '11 a 25 kg'], ['Grande', '26 a 40 kg'], ['Gigante', '40+ kg']] as [$label, $description])
                    <label class="cursor-pointer rounded-full bg-[#fff0eb] px-2 py-2 text-center text-[11px] text-[#704f45]"><input class="sr-only" type="radio" name="size" value="{{ strtolower($label) }}" /> <span class="block font-semibold text-[#704f45]">{{ $label }}</span><span class="text-[10px]">{{ $description }}</span></label>
                @endforeach
            </div>
        </fieldset>

        <div>
            @component('components.select', ['id' => 'catalog-location', 'name' => 'location', 'label' => 'Localização', 'compact' => true, 'fullWidth' => true, 'customClass' => 'catalog-sidebar-select', 'options' => ['sp' => 'São Paulo - SP (Grande SP)', 'rj' => 'Rio de Janeiro - RJ', 'mg' => 'Minas Gerais - MG', 'all' => 'Todo o Brasil']])
            @endcomponent
        </div>

        <button type="submit" class="flex h-11 w-full items-center justify-center gap-2 rounded-full bg-[#b63817] text-[11px] font-bold text-white shadow-sm transition hover:bg-[#922d12] focus:outline-none focus:ring-2 focus:ring-[#b63817] focus:ring-offset-2">
            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" /></svg>
            Aplicar Filtros (284)
        </button>
    </form>
</aside>
