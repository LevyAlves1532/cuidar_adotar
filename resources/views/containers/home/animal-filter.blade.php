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
            <div class="lg:col-span-12">
                <label for="animal-search" class="mb-2 block text-xs font-semibold text-[#704f45]">O que você está procurando?</label>
                <div class="relative">
                    <svg class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-[#b68c7d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <circle cx="11" cy="11" r="7" />
                        <path stroke-linecap="round" d="m20 20-4-4" />
                    </svg>
                    <input id="animal-search" name="q" type="search" placeholder="Pesquise por nome, raça, perfil (dócil, calmo)..." class="h-12 w-full rounded-xl border border-[#f0ddd5] bg-[#fffaf7] pl-11 pr-4 text-sm text-[#3d2a24] outline-none transition placeholder:text-[#bda399] focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10" />
                </div>
            </div>

            <div class="lg:col-span-3">
                <label for="animal-species" class="mb-2 block text-xs font-semibold text-[#704f45]">Espécie</label>
                <select id="animal-species" name="species" class="h-12 w-full appearance-none rounded-xl border border-[#f0ddd5] bg-[#fffaf7] px-4 text-sm text-[#3d2a24] outline-none transition focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10">
                    <option value="">Cães e gatos</option>
                    <option value="dog">Cães</option>
                    <option value="cat">Gatos</option>
                </select>
            </div>

            <div class="lg:col-span-3">
                <label for="animal-size" class="mb-2 block text-xs font-semibold text-[#704f45]">Porte</label>
                <select id="animal-size" name="size" class="h-12 w-full appearance-none rounded-xl border border-[#f0ddd5] bg-[#fffaf7] px-4 text-sm text-[#3d2a24] outline-none transition focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10">
                    <option value="">Qualquer porte</option>
                    <option value="small">Pequeno</option>
                    <option value="medium">Médio</option>
                    <option value="large">Grande</option>
                </select>
            </div>

            <div class="lg:col-span-3">
                <label for="animal-age" class="mb-2 block text-xs font-semibold text-[#704f45]">Idade</label>
                <select id="animal-age" name="age" class="h-12 w-full appearance-none rounded-xl border border-[#f0ddd5] bg-[#fffaf7] px-4 text-sm text-[#3d2a24] outline-none transition focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10">
                    <option value="">Qualquer idade</option>
                    <option value="puppy">Filhote</option>
                    <option value="adult">Adulto</option>
                    <option value="senior">Idoso</option>
                </select>
            </div>

            <div class="lg:col-span-3">
                <label for="animal-location" class="mb-2 block text-xs font-semibold text-[#704f45]">Localização</label>
                <div class="flex gap-2">
                    <input id="animal-location" name="location" type="text" placeholder="Cidade ou estado" class="h-12 min-w-0 flex-1 rounded-xl border border-[#f0ddd5] bg-[#fffaf7] px-4 text-sm text-[#3d2a24] outline-none transition placeholder:text-[#bda399] focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10" />
                    <button type="button" class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#b63817] text-white transition hover:bg-[#922d12] focus:outline-none focus:ring-4 focus:ring-[#b63817]/20" aria-label="Usar minha localização">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-5.2 7-11a7 7 0 1 0-14 0c0 5.8 7 11 7 11Z" />
                            <circle cx="12" cy="10" r="2.5" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col gap-3 border-t border-[#f4e8e1] pt-4 sm:flex-row sm:items-center sm:justify-between lg:col-span-12">
                <label class="flex items-center gap-2 text-xs text-[#8c6b60]">
                    <input type="checkbox" name="verified" value="1" class="h-4 w-4 rounded border-[#dcbfb3] text-[#b63817] accent-[#b63817] focus:ring-[#b63817]/20" />
                    Apenas animais verificados e com acompanhamento inicial garantido
                </label>
                <button type="submit" class="inline-flex h-12 items-center justify-center gap-2 rounded-full bg-[#b63817] px-6 text-sm font-bold text-white shadow-sm transition hover:bg-[#922d12] focus:outline-none focus:ring-4 focus:ring-[#b63817]/20">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                        <circle cx="11" cy="11" r="7" />
                        <path stroke-linecap="round" d="m20 20-4-4" />
                    </svg>
                    Buscar animais
                </button>
            </div>
        </form>
    </div>
</section>
