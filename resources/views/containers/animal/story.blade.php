<section class="mx-auto w-full max-w-7xl px-5 pb-8 sm:px-8 lg:px-10 lg:pb-12">
    <div class="grid gap-6 lg:grid-cols-[1.7fr_1fr] lg:items-stretch xl:gap-8">
        <article id="historia-animal" class="flex h-full flex-col rounded-[1.5rem] border border-[#ead8d0] bg-white p-5 shadow-[0_14px_30px_rgba(123,87,69,0.06)] sm:p-6">
            <div class="flex items-start gap-3">
                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#fff0e8] text-[#b63817]">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 3a9 9 0 1 0 9 9h-2a7 7 0 1 1-7-7V3Zm1 0v8h8v-2h-6V3h-2Zm-5.5 8.5A1.5 1.5 0 1 0 9 13a1.5 1.5 0 0 0-1.5-1.5Zm9 0A1.5 1.5 0 1 0 18 13a1.5 1.5 0 0 0-1.5-1.5ZM9 16h6a3 3 0 0 1-6 0Z" />
                    </svg>
                </div>
                <div>
                    <h2 class="font-serif text-xl font-bold leading-tight text-[#261714] sm:text-2xl">História de {{ $animal->name }}</h2>
                    <p class="mt-2 text-[11px] leading-5 text-[#704f45] sm:text-xs">Conheça a história de {{ $animal->name }} e os cuidados recebidos até estar disponível para adoção.</p>
                </div>
            </div>

            <div class="mt-4 space-y-3 text-[11px] leading-5 text-[#704f45] sm:text-xs">
                {!! $animal->description !!}
                <p>{{ $animal->name }} está aguardando um lar responsável, seguro e cheio de afeto.</p>
            </div>
        </article>

        <article id="requisitos-tutela" class="flex h-full flex-col rounded-[1.5rem] border border-[#ead8d0] bg-white p-5 shadow-[0_14px_30px_rgba(123,87,69,0.06)] sm:p-6">
            <div class="flex items-start gap-3">
                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#fff0e8] text-[#b63817]">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm1 15h-2v-2h2v2Zm2.1-6.8-.9.9c-.7.6-1.2 1.1-1.2 2.4h-2c0-1.8.7-2.7 1.7-3.6l1.1-1a1.8 1.8 0 0 0-1.2-3.1 1.9 1.9 0 0 0-1.9 1.8h-2a3.9 3.9 0 0 1 7.8.2 3.7 3.7 0 0 1-1.4 2.4Z" /></svg>
                </div>
                <div>
                    <h2 class="font-serif text-xl font-bold leading-tight text-[#261714] sm:text-2xl">Requisitos de Tutela</h2>
                    <p class="mt-2 text-[11px] leading-5 text-[#704f45] sm:text-xs">Para garantir o bem-estar de {{ $animal->name }}, buscamos um adotante ou família que cumpra estes critérios simples.</p>
                </div>
            </div>

            <ul class="mt-4 space-y-2 text-[10px] leading-4 text-[#4a3a35] sm:text-[11px]">
                @foreach (['Ambiente seguro' => 'Casa com portão bem fechado e sem acesso à rua.', 'Compromisso' => 'Responsabilidade por 10 anos ou mais.', 'Condições financeiras' => 'Capacidade para cuidados veterinários.', 'Tempo e carinho' => 'Disponibilidade para adaptação e rotina.', 'Acompanhamento' => 'Aceitar notícias sobre a adaptação.'] as $title => $description)
                    <li class="flex items-start gap-2">
                        <span class="mt-0.5 flex h-3.5 w-3.5 shrink-0 items-center justify-center rounded-full bg-[#d9f0d2] text-[#356442]">
                            <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="m9.3 16.7-4.7-4.7L6 10.6l3.3 3.3L18 5.2l1.4 1.4L9.3 16.7Z" /></svg>
                        </span>
                        <span><strong class="font-semibold text-[#356442]">{{ $title }}:</strong> {{ $description }}</span>
                    </li>
                @endforeach
            </ul>

            <div class="mt-4 flex items-start gap-2 rounded-lg bg-[#fff1ed] px-3 py-2 text-[9px] leading-4 text-[#9a3b27] sm:text-[10px]">
                <svg class="mt-0.5 h-3 w-3 shrink-0 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm1 15h-2v-2h2v2Zm0-4h-2V7h2v6Z" /></svg>
                <span><strong class="font-semibold">Não solicitamos nenhuma contribuição financeira</strong> ou taxa para adoção.</span>
            </div>
        </article>
    </div>
</section>
