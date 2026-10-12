@php
    $gallery = [
        'https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=1400&q=85',
        'https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=900&q=85',
        'https://images.unsplash.com/photo-1587300003388-59208cc962cb?auto=format&fit=crop&w=900&q=85',
        'https://images.unsplash.com/photo-1543466835-00a7907e9de1?auto=format&fit=crop&w=900&q=85',
    ];

    $facts = [
        ['label' => '1 ano e 2 meses', 'icon' => 'calendar'],
        ['label' => 'Porte Pequeno/Médio (8,2 kg)', 'icon' => 'weight'],
        ['label' => 'São Paulo, SP (Vila Mariana)', 'icon' => 'location'],
    ];

    $traits = [
        ['label' => 'Apta p/ Apartamento', 'icon' => 'home'],
        ['label' => 'Amigável c/ Gatos', 'icon' => 'cat'],
        ['label' => 'Adora Crianças', 'icon' => 'child'],
        ['label' => 'Energia: Moderada', 'icon' => 'bolt'],
    ];
@endphp

<section class="mx-auto w-full max-w-7xl px-5 py-6 sm:px-8 lg:px-10 lg:py-8">
    <div class="grid gap-6 lg:grid-cols-[1.7fr_1fr] xl:gap-8">
        <div data-animal-gallery class="overflow-hidden rounded-[2rem] border border-[#e9d9d2] bg-[#f5efe9] p-3 shadow-[0_20px_42px_rgba(117,72,57,0.08)] sm:p-4">
            <div class="mb-3 flex flex-wrap items-center justify-between gap-3">
                <div class="flex flex-wrap items-center gap-2">
                    @component('components.tag', [
                        'label' => 'Disponível para Adoção',
                        'color' => 'white-green',
                        'customSize' => '11px',
                    ])
                    @endcomponent
                    @component('components.tag', [
                        'label' => 'Castrada & Vacinada',
                        'color' => 'white-green',
                        'customSize' => '11px',
                    ])
                    @endcomponent
                </div>
            </div>

            <div data-animal-gallery-viewport class="overflow-x-auto rounded-[1.5rem] bg-[#e8d5cd]" tabindex="0" aria-label="Galeria de fotos da Amora">
                <div data-animal-gallery-container class="flex touch-pan-y">
                    @foreach ($gallery as $index => $image)
                        <div class="min-w-0 flex-[0_0_100%]">
                            <img src="{{ $image }}" alt="Amora aguardando adoção, foto {{ $index + 1 }}" class="h-[420px] w-full object-cover object-center sm:h-[500px]" loading="{{ $index === 0 ? 'eager' : 'lazy' }}" />
                        </div>
                    @endforeach
                </div>
            </div>

            <div data-animal-gallery-thumbnails class="mt-4 grid grid-cols-4 gap-2 sm:gap-3">
                @foreach ($gallery as $index => $image)
                    <button type="button" data-animal-gallery-thumbnail="{{ $index }}" class="group overflow-hidden rounded-xl border {{ $index === 0 ? 'border-[#b63817] ring-2 ring-[#f3cabd]' : 'border-[#ebddd7] hover:border-[#b63817]' }} bg-[#f7f1ef] focus:outline-none focus:ring-2 focus:ring-[#b63817]" aria-label="Ver foto {{ $index + 1 }} de {{ count($gallery) }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}">
                        <img src="{{ $image }}" alt="Amora foto {{ $index + 1 }}" class="h-20 w-full object-cover transition duration-200 group-hover:scale-105 sm:h-24" loading="lazy" />
                    </button>
                @endforeach
            </div>
        </div>

        <aside id="adotar" class="rounded-[2rem] border border-[#ead8d0] bg-[#f9f4f1] p-4 shadow-[0_18px_36px_rgba(123,87,69,0.06)] sm:p-5 lg:p-6">
            <div class="mb-4 flex items-center justify-between gap-3">
                @component('components.tag', [
                    'label' => 'Fêmea',
                    'color' => 'white-green',
                    'customSize' => '11px',
                ])
                @endcomponent
            </div>

            <h1 class="font-serif text-[2.4rem] leading-none tracking-[-0.04em] text-[#261714] sm:text-[3rem]">Amora</h1>

            <div class="mt-5 space-y-3 text-[15px] text-[#4a3a35]">
                @foreach ($facts as $fact)
                    <div class="flex items-center gap-3">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#ece2de] text-[#705a52]">
                            @switch($fact['icon'])
                                @case('calendar')
                                    <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 2h2v2h6V2h2v2h3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h3V2Zm13 8H4v10h16V10Zm-2-4H7v2h10V6Z"/></svg>
                                    @break
                                @case('weight')
                                    <svg class="w-3.5 h-3.5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M80 448C53.5 448 32 426.5 32 400L32 240C32 213.5 53.5 192 80 192L104 192L104 296C104 309.3 114.7 320 128 320C141.3 320 152 309.3 152 296L152 192L200 192L200 264C200 277.3 210.7 288 224 288C237.3 288 248 277.3 248 264L248 192L296 192L296 296C296 309.3 306.7 320 320 320C333.3 320 344 309.3 344 296L344 192L392 192L392 264C392 277.3 402.7 288 416 288C429.3 288 440 277.3 440 264L440 192L488 192L488 296C488 309.3 498.7 320 512 320C525.3 320 536 309.3 536 296L536 192L560 192C586.5 192 608 213.5 608 240L608 400C608 426.5 586.5 448 560 448L80 448z"/></svg>
                                    @break
                                @case('location')
                                    <svg class="h-3.5 w-3.5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg>
                                    @break
                            @endswitch
                        </span>
                        <span>{{ $fact['label'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 space-y-3">
                @component('components.button', [
                    'label' => 'Quero Adotar a Amora • Demonstrar Interesse',
                    'url' => '#',
                    'color' => 'terracotta',
                    'spacing' => 'none',
                    'customClass' => 'w-full py-3',
                ])
                    <svg class="h-4 w-4" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21.35 10.55 20C5.4 15.36 2 12.28 2 8.5A4.5 4.5 0 0 1 6.5 4a4.9 4.9 0 0 1 4.1 2.1L12 7l1.4-1.9A4.9 4.9 0 0 1 17.5 4 4.5 4.5 0 0 1 22 8.5c0 3.78-3.4 6.86-8.55 11.5L12 21.35Z"/></svg>
                @endcomponent
            </div>

            <p class="mt-4 text-center text-[11px] font-medium text-[#4c7d5e]">Adoção 100% ética e gratuita. Taxas de venda são proibidas.</p>

            <div class="mt-6 rounded-[1.5rem] border border-[#dfe9df] bg-[#edf6ee] p-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-[#dfeee0] text-[#356442]">
                        <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M448 96L439.4 96C428.4 76.9 407.7 64 384 64L256 64C232.3 64 211.6 76.9 200.6 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96zM264 176C250.7 176 240 165.3 240 152C240 138.7 250.7 128 264 128L376 128C389.3 128 400 138.7 400 152C400 165.3 389.3 176 376 176L264 176z"/></svg>
                    </div>
                    <div>
                        <p class="text-[11px] font-bold uppercase tracking-[0.14em] text-[#6e7c6d]">ONG Patinhas da Vila</p>
                        <p class="mt-1 text-sm font-semibold text-[#2b362d]">Membro desde 2021 • 140+ ações realizadas</p>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>
