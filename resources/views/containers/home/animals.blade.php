<section id="catalogo" class="bg-[#fff1eb]" aria-labelledby="animals-title">
    <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-14 lg:px-10 lg:py-16">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div class="max-w-xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#b63817]">Adoção imediata</p>
                <h2 id="animals-title" class="mt-1 font-serif text-3xl font-bold leading-tight tracking-tight text-[#261714] sm:text-4xl">Eles Estão Esperando Por Você</h2>
                <p class="mt-1 max-w-lg text-sm leading-5 text-[#704f45]">Cada olhar carrega uma história de superação. Conheça estes amigos ansiosos por um lar aconchegante.</p>
            </div>
            <a href="#adotar" class="inline-flex items-center gap-1 self-start text-xs font-semibold text-[#b63817] transition hover:text-[#922d12] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] focus-visible:ring-offset-2 sm:self-auto">Explorar todos os 280+ pets <span aria-hidden="true">→</span></a>
        </div>

        <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @component('components.animal-card', [
                'name' => 'Amora',
                'species' => 'Cão',
                'age' => '1 ano',
                'size' => 'Porte Médio',
                'location' => 'São Paulo, SP (Vila Mariana)',
                'description' => 'Dócil, adorável brincar com bolinhas e convive harmonicamente com outros pets.',
                'image' => 'https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=700&q=85',
                'status' => 'Castrada & Vacinada',
                'gender' => 'Fêmea',
                'genderColor' => 'bg-[#ffd9d6] text-[#b63817]',
            ])
            @endcomponent

            @component('components.animal-card', [
                'name' => 'Romeu',
                'species' => 'Gato',
                'age' => '2 anos',
                'size' => 'Porte Pequeno',
                'location' => 'Campinas, SP (Cambuí)',
                'description' => 'Muito ronronante, adora carinho na nuca e é extremamente tranquilo para apartamentos.',
                'image' => 'https://images.unsplash.com/photo-1543852786-1cf6624b9987?auto=format&fit=crop&w=700&q=85',
                'status' => 'Apto para Apartamento',
                'gender' => 'Macho',
            ])
            @endcomponent

            @component('components.animal-card', [
                'name' => 'Pipoca',
                'species' => 'Cão',
                'age' => '8 meses',
                'size' => 'Porte Pequeno',
                'location' => 'Curitiba, PR (Batel)',
                'description' => 'Curiosa e cheia de energia! Adora passeios matinais e aprender novos truques.',
                'image' => 'https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=700&q=85',
                'status' => 'Resgate Recente',
                'gender' => 'Fêmea',
                'genderColor' => 'bg-[#ffd9d6] text-[#b63817]',
            ])
            @endcomponent

            @component('components.animal-card', [
                'name' => 'Bento',
                'species' => 'Cão',
                'age' => '8 anos',
                'size' => 'Porte Grande',
                'location' => 'São Paulo, SP (Pinheiros)',
                'description' => 'Um verdadeiro cavalheiro. Ainda devagar na guia, adora cochilar perto da família.',
                'image' => 'https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=700&q=85',
                'status' => 'Sênior Doce',
                'gender' => 'Macho',
            ])
            @endcomponent
        </div>

        <div class="mt-7 flex justify-center">
            @component('components.button', [
                'url' => '#adotar',
                'label' => 'Ver Todos os Amigos Disponíveis',
            ])
                @slot('iconLeft')
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 9h14v10H5zM8 9V6h8v3M8 13h8" />
                    </svg>
                @endslot
            @endcomponent
        </div>
    </div>
</section>
