<section id="duvidas" class="bg-[#fffaf7]" aria-labelledby="faq-title">
    <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-14 lg:px-10 lg:py-16">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#b63817] sm:text-xs">Tire suas dúvidas</p>
            <h2 id="faq-title" class="mt-1 font-serif text-2xl font-bold leading-tight tracking-tight text-[#17110f] sm:text-3xl">
                Perguntas Frequentes sobre Adoção
            </h2>
        </div>

        <div class="mx-auto mt-5 grid max-w-3xl gap-2.5 sm:mt-6 sm:gap-3">
            @component('components.faq-item', [
                'question' => 'Há taxa de adoção na Patas & Lar?',
                'answer' => 'A Patas & Lar não cobra pela adoção. Cada ONG ou protetor parceiro pode ter orientações próprias sobre os custos de cuidados veterinários; confirme os detalhes diretamente com quem está responsável pelo pet.',
            ])
            @endcomponent

            @component('components.faq-item', [
                'question' => 'Moro em apartamento. Posso adotar cães de médio ou grande porte?',
                'answer' => 'Sim. O mais importante é que o perfil e a energia do cão combinem com sua rotina, e que você possa oferecer passeios, cuidados e um ambiente seguro. Verifique também as regras do condomínio e converse com o protetor sobre as necessidades daquele animal.',
            ])
            @endcomponent

            @component('components.faq-item', [
                'question' => 'Quais documentos são exigidos no processo?',
                'answer' => 'Em geral, podem ser solicitados documento de identificação com foto, comprovante de residência e o preenchimento de um formulário ou termo de adoção responsável. Os requisitos variam entre ONGs e protetores; confirme a lista com a pessoa responsável pelo pet.',
            ])
            @endcomponent
        </div>

        <p class="mt-5 text-center text-xs leading-5 text-[#704f45] sm:mt-6 sm:text-sm">
            Ainda com dúvidas?
            <a href="#guia-adotante" class="inline-flex items-center gap-1 font-semibold text-[#b63817] transition hover:text-[#922d12] focus:outline-none focus-visible:rounded-sm focus-visible:ring-2 focus-visible:ring-[#b63817] focus-visible:ring-offset-2">
                Consulte nosso Guia Completo do Adotante
                <span aria-hidden="true">→</span>
            </a>
        </p>
    </div>
</section>
