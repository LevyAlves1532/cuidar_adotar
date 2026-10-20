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
                        'image' => asset('images/testimonial2.png'),
                        'imageAlt' => 'De um abandono a uma família cheia de carinho',
                        'quote' => 'Em Joinville (SC), uma filhote foi abandonada na calçada e correu atrás da mulher que a deixou para trás. A cena foi registrada por uma câmera de segurança e repercutiu nas redes sociais. Mas a história teve um desfecho feliz: Mel foi adotada naquele mesmo dia e passou a viver com uma família que já tinha outras duas cadelas.',
                        'name' => 'O sogro de Abigaiu Gabriela Oenning',
                        'caption' => 'Tutor da Mel • Há 1 ano e 2 meses',
                        'initials' => 'SG',
                        'avatarColor' => 'bg-[#ffd9d6] text-[#b63817]',
                        'slide' => '2',
                        'totalSlides' => '3',
                    ])
                    @endcomponent

                    @component('components.testimonial-card', [
                        'image' => asset('images/testimonial1.png'),
                        'imageAlt' => 'Um novo lar depois de uma despedida difícil',
                        'quote' => 'Após perder seu antigo tutor, Scooby foi acolhido pela ONG Viva Bicho, em Balneário Camboriú (SC). A história comoveu muitas pessoas, e o casal Lauriani e Allan decidiu oferecer a ele um novo lar. A família já tinha outros dois cães e preparou espaço para receber Scooby com carinho.',
                        'name' => 'Lauriani Garghetti e Allan Tatsch',
                        'caption' => 'Tutores do Scooby • Há 1 ano e 8 meses',
                        'initials' => 'LA',
                        'avatarColor' => 'bg-[#d9f0d2] text-[#356442]',
                        'slide' => '1',
                        'totalSlides' => '3',
                    ])
                    @endcomponent

                    @component('components.testimonial-card', [
                        'image' => asset('images/testimonial3.png'),
                        'imageAlt' => 'A adoção que virou uma amizade para a vida',
                        'quote' => 'Bianca encontrou Fred por acaso, ao ver uma publicação oferecendo filhotes para adoção nas redes sociais. Ela se encantou imediatamente e foi buscá-lo no dia seguinte. Desde então, os dois se tornaram inseparáveis. Fred acompanhou Bianca em mudanças importantes da vida, inclusive quando ela começou a morar sozinha, tornando-se seu companheiro e fonte de alegria.',
                        'name' => 'Bianca Mota',
                        'caption' => 'Tutora do Fred • Há 3 anos e 2 meses',
                        'initials' => 'FR',
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
