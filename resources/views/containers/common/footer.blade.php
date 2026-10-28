<footer class="bg-[#332c29] text-[#fffaf7]">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-10 sm:px-8 lg:grid-cols-[1.5fr_0.8fr_0.8fr_1.2fr] lg:gap-12 lg:px-10 lg:py-12">
        <div class="max-w-sm">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 font-serif text-lg font-bold tracking-tight text-white" aria-label="Patas & Lar - início">
                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#b63817] text-white" aria-hidden="true">
                    <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" aria-hidden="true"><path d="M298.5 156.9C312.8 199.8 298.2 243.1 265.9 253.7C233.6 264.3 195.8 238.1 181.5 195.2C167.2 152.3 181.8 109 214.1 98.4C246.4 87.8 284.2 114 298.5 156.9zM164.4 262.6C183.3 295 178.7 332.7 154.2 346.7C129.7 360.7 94.5 345.8 75.7 313.4C56.9 281 61.4 243.3 85.9 229.3C110.4 215.3 145.6 230.2 164.4 262.6zM133.2 465.2C185.6 323.9 278.7 288 320 288C361.3 288 454.4 323.9 506.8 465.2C510.4 474.9 512 485.3 512 495.7L512 497.3C512 523.1 491.1 544 465.3 544C453.8 544 442.4 542.6 431.3 539.8L343.3 517.8C328 514 312 514 296.7 517.8L208.7 539.8C197.6 542.6 186.2 544 174.7 544C148.9 544 128 523.1 128 497.3L128 495.7C128 485.3 129.6 474.9 133.2 465.2zM485.8 346.7C461.3 332.7 456.7 295 475.6 262.6C494.5 230.2 529.6 215.3 554.1 229.3C578.6 243.3 583.2 281 564.3 313.4C545.4 345.8 510.3 360.7 485.8 346.7zM374.1 253.7C341.8 243.1 327.2 199.8 341.5 156.9C355.8 114 393.6 87.8 425.9 98.4C458.2 109 472.8 152.3 458.5 195.2C444.2 238.1 406.4 264.3 374.1 253.7z" /></svg>
                </span>
                <span>Cuidar <span class="font-normal">&amp;</span> Adotar</span>
            </a>
            <p class="mt-4 max-w-xs text-sm leading-6 text-[#d8cfca]">Conectando corações e lares responsáveis. Nossa missão é transformar o resgate em recomeço digno, com saúde, respeito e carinho incondicional para cada animal.</p>

            {{-- <div class="mt-5 flex items-center gap-2" aria-label="Redes sociais">
                <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-[#625853] text-[#fffaf7] transition hover:bg-[#b63817] focus:outline-none focus:ring-2 focus:ring-[#e8a48f]" aria-label="Instagram">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M7.8 2h8.4A5.8 5.8 0 0 1 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8A5.8 5.8 0 0 1 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2Zm-.2 2A3.6 3.6 0 0 0 4 7.6v8.8A3.6 3.6 0 0 0 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6A3.6 3.6 0 0 0 16.4 4H7.6Zm8.65 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" /></svg>
                </a>
                <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-[#625853] text-[#fffaf7] transition hover:bg-[#b63817] focus:outline-none focus:ring-2 focus:ring-[#e8a48f]" aria-label="Facebook">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.6 1.7-1.6h1.8V3.8c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1V10H8v3h2.6v8h2.9Z" /></svg>
                </a>
                <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-[#625853] text-[#fffaf7] transition hover:bg-[#b63817] focus:outline-none focus:ring-2 focus:ring-[#e8a48f]" aria-label="YouTube">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M21.6 7.2a2.8 2.8 0 0 0-2-2C17.8 4.7 12 4.7 12 4.7s-5.8 0-7.6.5a2.8 2.8 0 0 0-2 2A29 29 0 0 0 1.9 12a29 29 0 0 0 .5 4.8 2.8 2.8 0 0 0 2 2c1.8.5 7.6.5 7.6.5s5.8 0 7.6-.5a2.8 2.8 0 0 0 2-2 29 29 0 0 0 .5-4.8 29 29 0 0 0-.5-4.8ZM10 15.5v-7l6 3.5-6 3.5Z" /></svg>
                </a>
            </div> --}}
        </div>

        <div>
            <h2 class="text-sm font-bold text-white">Navegação</h2>
            <nav class="mt-4 flex flex-col items-start gap-2 text-xs text-[#d8cfca]" aria-label="Navegação do rodapé">
                <a href="{{ route('home') }}#inicio" class="transition hover:text-white">Início</a>
                <a href="{{ route('catalog') }}" class="transition hover:text-white">Quero Adotar</a>
                <a href="{{ route('home') }}#como-funciona" class="transition hover:text-white">Como Funciona</a>
                <a href="{{ route('filament.caregiver.auth.login') }}" class="transition hover:text-white">Cadastrar Animal</a>
                <a href="{{ route('about-us') }}" class="transition hover:text-white">Sobre o Projeto</a>
            </nav>
        </div>

        <div>
            {{-- <h2 class="text-sm font-bold text-white">Apoio &amp; Proteção</h2>
            <nav class="mt-4 flex flex-col items-start gap-2 text-xs text-[#d8cfca]" aria-label="Links de apoio">
                <a href="#denuncias" class="transition hover:text-white">Canal de Denúncias</a>
                <a href="#protetores" class="transition hover:text-white">Cuide do Tutor Responsável</a>
                <a href="#parceiros" class="transition hover:text-white">Clínicas Parceiras</a>
                <a href="#ajuda" class="transition hover:text-white">Termos de Adesão</a>
            </nav> --}}
        </div>

        <div>
            {{-- <h2 class="text-sm font-bold text-white">Novos Resgates</h2>
            <p class="mt-4 text-xs leading-5 text-[#d8cfca]">Receba alertas e histórias de novos animais que acabaram de chegar.</p>
            <form class="mt-3 flex overflow-hidden rounded-full border border-[#776a64] bg-[#443b37] focus-within:ring-2 focus-within:ring-[#e8a48f]" action="#" method="post">
                <label class="sr-only" for="footer-email">Seu e-mail</label>
                <input id="footer-email" name="email" type="email" placeholder="Seu e-mail" required class="min-w-0 flex-1 bg-transparent px-4 py-2 text-xs text-white placeholder:text-[#b8aaa4] focus:outline-none">
                <button type="submit" class="flex h-9 w-10 shrink-0 items-center justify-center bg-[#b63817] text-white transition hover:bg-[#922d12]" aria-label="Assinar novidades">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="m21.7 3.3-19 7.6a1 1 0 0 0 .1 1.9l7.6 2.5 2.5 7.6a1 1 0 0 0 1.9.1l7.6-19a1 1 0 0 0-1.2-1.2ZM5.8 11.7l11.3-4.5-6.9 6.2-4.4-1.7Zm8.3 7-1.5-4.5 6.2-6.9-4.7 11.4Z" /></svg>
                </button>
            </form>
            <p class="mt-2 text-[10px] leading-4 text-[#b8aaa4]">Prometemos enviar apenas histórias felizes.</p> --}}
        </div>
    </div>

    <div class="mx-auto flex max-w-7xl flex-col gap-3 border-t border-[#514743] px-5 py-5 text-[10px] text-[#b8aaa4] sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-10">
        <p>© {{ date('Y') }} Cuidar &amp; Adotar. Amor, proteção e responsabilidade animal.</p>
        <div class="flex gap-4">
            <a href="#privacidade" class="transition hover:text-white">Privacidade</a>
            <a href="#termos" class="transition hover:text-white">Termos</a>
        </div>
    </div>
</footer>