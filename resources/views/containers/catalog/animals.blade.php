@php
    $animals = [
        ['name' => 'Amora', 'age' => '1 ano', 'size' => 'Porte Médio', 'location' => 'São Paulo, SP (Vila Mariana)', 'description' => 'Dócil, adora brincar com bolinhas e convive harmonicamente com outros pets.', 'image' => 'https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=700&q=85', 'status' => 'Castrada & Vacinada', 'gender' => 'Fêmea', 'genderColor' => 'white-red'],
        ['name' => 'Romeu', 'age' => '2 anos', 'size' => 'Porte Pequeno', 'location' => 'Campinas, SP (Cambuí)', 'description' => 'Muito ronronante, adora carinho na nuca e é extremamente tranquilo para apartamentos.', 'image' => 'https://images.unsplash.com/photo-1543852786-1cf6624b9987?auto=format&fit=crop&w=700&q=85', 'status' => 'Apto para Apartamento', 'gender' => 'Macho', 'genderColor' => 'white-green'],
        ['name' => 'Pipoca', 'age' => '8 meses', 'size' => 'Porte Pequeno', 'location' => 'São Paulo, SP (Moema)', 'description' => 'Curiosa e cheia de energia! Adora passeios matinais e aprender novos truques.', 'image' => 'https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=700&q=85', 'status' => 'Resgate Recente', 'gender' => 'Fêmea', 'genderColor' => 'white-red'],
        ['name' => 'Bento', 'age' => '8 anos', 'size' => 'Porte Grande', 'location' => 'São Paulo, SP (Pinheiros)', 'description' => 'Um verdadeiro cavalheiro. Ainda devagar na guia, adora cochilar perto da família.', 'image' => 'https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=700&q=85', 'status' => 'Sênior Doce', 'gender' => 'Macho', 'genderColor' => 'white-green'],
        ['name' => 'Luna', 'age' => '3 anos', 'size' => 'Porte Médio', 'location' => 'Santo André, SP', 'description' => 'Carinhosa, sociável e pronta para fazer parte de uma nova família.', 'image' => 'https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=700&q=85', 'status' => 'Vacinada', 'gender' => 'Fêmea', 'genderColor' => 'white-red'],
        ['name' => 'Tobias', 'age' => '5 anos', 'size' => 'Porte Pequeno', 'location' => 'São Paulo, SP (Lapa)', 'description' => 'Calmo e companheiro, perfeito para quem busca um amigo para todos os momentos.', 'image' => 'https://images.unsplash.com/photo-1587300003388-59208cc962cb?auto=format&fit=crop&w=700&q=85', 'status' => 'Pronto para Adoção', 'gender' => 'Macho', 'genderColor' => 'white-green'],
    ];
@endphp

<section class="mx-auto w-full max-w-7xl px-5 pb-14 sm:px-8 lg:px-10" aria-labelledby="available-animals-title">
    <div class="grid gap-5 lg:grid-cols-[15rem_minmax(0,1fr)] xl:grid-cols-[17rem_minmax(0,1fr)]">
        @include('containers.catalog.sidebar')

        <div class="min-w-0">
            <div class="mb-4 flex flex-wrap items-end justify-between gap-3">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.16em] text-[#b63817]">Catálogo de adoção</p>
                    <h2 id="available-animals-title" class="mt-1 font-serif text-2xl font-bold text-[#261714] sm:text-3xl">Animais esperando por você</h2>
                </div>
                <p class="text-xs text-[#704f45]"><strong class="text-[#261714]">284</strong> pets encontrados</p>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($animals as $animal)
                    @component('components.animal-card', $animal)
                    @endcomponent
                @endforeach
            </div>

            <div class="mt-8 flex justify-center">
                <button type="button" class="rounded-full border border-[#e7cfc5] bg-white px-5 py-2.5 text-xs font-semibold text-[#b63817] transition hover:bg-[#fff0eb]">Carregar mais animais</button>
            </div>
        </div>
    </div>
</section>
