<section id="quem-faz-acontecer" class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-16 lg:px-10 lg:py-20" aria-labelledby="founders-title">
    <div class="max-w-2xl">
        @component('components.tag', [
            'label' => 'Gente Cuidando de Vidas',
            'color' => 'white-red',
        ])
            @slot('iconLeft')
                <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7.5-4.35-9.5-9.02C.7 8.44 2.27 5 5.7 5c1.9 0 3.16 1.08 4.3 2.38C11.14 6.08 12.4 5 14.3 5c3.43 0 5 3.44 3.2 6.98C17.5 16.65 12 21 12 21Z" /></svg>
            @endslot
        @endcomponent

        <h2 id="founders-title" class="mt-4 font-serif text-3xl font-bold leading-tight tracking-tight text-[#17110f] sm:text-4xl">
            Nossos fundadores e guardiões da
            <span class="block font-serif font-semibold italic text-[#b63817]">causa</span>
        </h2>
        <p class="mt-3 max-w-xl text-sm leading-6 text-[#704f45] sm:text-base">
            Uma equipe multidisciplinar de médicos veterinários, designers de experiência humana e voluntários dedicados a construir lares definitivos.
        </p>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 lg:gap-6">
        @component('components.founder-card', [
            'name' => 'Dra. Clara Mendonça',
            'role' => 'Co-fundadora & Médica Veterinária Comportamentalista',
            'specialty' => 'CRMV-SP',
            'quote' => 'Cuidar da saúde física é vital, mas entender a alma e a adaptação do pet é o que garante um lar definitivo.',
            'image' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=700&q=85',
            'imageAlt' => 'Dra. Clara Mendonça segurando um gato',
            'footer' => '+12 anos em bem-estar animal',
            'badgeColor' => 'bg-[#d9f0d2] text-[#356442]',
        ])
        @endcomponent

        @component('components.founder-card', [
            'name' => 'Gabriel Fontana',
            'role' => 'Co-fundador & Designer de Produto',
            'specialty' => 'Tech & UX',
            'quote' => 'Criamos uma ferramenta simples para que nenhuma ONG perca tempo com planilhas quando poderia estar salvando vidas.',
            'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=700&q=85',
            'imageAlt' => 'Gabriel Fontana segurando um cachorro',
            'footer' => 'Especialista em produtos digitais cívicos',
            'badgeColor' => 'bg-[#ffd9d6] text-[#b63817]',
        ])
        @endcomponent

        @component('components.founder-card', [
            'name' => 'Mariana Esteves',
            'role' => 'Coordenadora de Parcerias com ONGs & Resgatistas',
            'specialty' => 'Articulação',
            'quote' => 'Nossa missão é dar voz e fôlego a protetores independentes que doam o próprio tempo por amor incondicional.',
            'image' => 'https://images.unsplash.com/photo-1558898479-33c0057a5d12?auto=format&fit=crop&w=700&q=85',
            'imageAlt' => 'Mariana Esteves cercada por cachorros',
            'footer' => 'Rede com 350+ abrigos ativos',
            'badgeColor' => 'bg-[#ffe5c5] text-[#a96521]',
        ])
        @endcomponent
    </div>
</section>
