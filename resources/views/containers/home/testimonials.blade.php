<section id="historias" class="bg-[#fff1eb]" aria-labelledby="testimonials-title" data-testimonials-carousel role="region" aria-roledescription="carrossel">
    <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-14 lg:px-10 lg:py-16">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div class="max-w-xl">
                <p class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#b63817] sm:text-xs">Histórias reais</p>
                <h2 id="testimonials-title" class="mt-1 font-serif text-3xl font-bold leading-tight tracking-tight text-[#17110f] sm:text-4xl">Finais Felizes que Inspiram</h2>
                <p class="mt-1 max-w-lg text-sm leading-5 text-[#704f45]">Famílias que abriram as portas e o coração, e descobriram o amor mais puro do mundo.</p>
            </div>

            <div class="flex gap-2 self-end sm:self-auto" aria-label="Controles do carrossel de histórias">
                <button type="button" class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-[#261714] shadow-sm transition hover:bg-[#f8e4dc] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] disabled:cursor-not-allowed disabled:opacity-40" aria-label="História anterior" data-carousel-previous disabled>
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6" />
                    </svg>
                </button>
                <button type="button" class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-[#261714] shadow-sm transition hover:bg-[#f8e4dc] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] disabled:cursor-not-allowed disabled:opacity-40" aria-label="Próxima história" data-carousel-next disabled>
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="mt-6">
            <div data-carousel-viewport role="group" aria-label="Histórias de famílias que adotaram" tabindex="0" class="overflow-x-auto snap-x snap-mandatory focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] focus-visible:ring-offset-4">
                <div class="flex gap-4" data-carousel-track>
                    @component('components.testimonial-card', [
                        'image' => 'https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=800&q=85',
                        'imageAlt' => 'Cachorro Estrela adotado pela família',
                        'quote' => 'Adotar a Estrela transformou a rotina da nossa casa. A plataforma nos ajudou a entender o perfil dela com clareza antes do encontro. Ela é o coração da família hoje.',
                        'name' => 'Carolina & Felipe',
                        'caption' => 'Tutores da Estrela • Há 8 meses',
                        'initials' => 'CF',
                        'avatarColor' => 'bg-[#d9f0d2] text-[#356442]',
                        'slide' => '1',
                        'totalSlides' => '3',
                    ])
                    @endcomponent

                    @component('components.testimonial-card', [
                        'image' => 'https://images.unsplash.com/photo-1543852786-1cf6624b9987?auto=format&fit=crop&w=800&q=85',
                        'imageAlt' => 'Gato Frederico adotado',
                        'quote' => 'Eu nunca tinha tido gatos. O questionário e as orientações da ONG parceira me deram total segurança para preparar a casa e as telas. O Frederico é meu companheiro diário.',
                        'name' => 'Mariana Ramos',
                        'caption' => 'Tutora do Frederico • Há 1 ano',
                        'initials' => 'MR',
                        'avatarColor' => 'bg-[#ffd9d6] text-[#b63817]',
                        'slide' => '2',
                        'totalSlides' => '3',
                    ])
                    @endcomponent

                    @component('components.testimonial-card', [
                        'image' => 'https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=800&q=85',
                        'imageAlt' => 'Cachorro Barão adotado',
                        'quote' => 'Escolhemos adotar um cão adulto e foi a melhor decisão. O Barão já chegou educado, mansinho com o meu filho e trouxe uma serenidade inacreditável ao nosso lar.',
                        'name' => 'Rodrigo de Alencar',
                        'caption' => 'Tutor do Barão • Há 2 anos',
                        'initials' => 'RA',
                        'avatarColor' => 'bg-[#ffe5c5] text-[#a96521]',
                        'slide' => '3',
                        'totalSlides' => '3',
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</section>
