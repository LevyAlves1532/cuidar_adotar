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
                    <x-tag label="Disponível para Adoção" color="white-green" custom-size="11px" />
                    <x-tag label="Castrada & Vacinada" color="white-green" custom-size="11px" />
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

        <aside class="rounded-[2rem] border border-[#ead8d0] bg-[#f9f4f1] p-4 shadow-[0_18px_36px_rgba(123,87,69,0.06)] sm:p-5 lg:p-6">
            <div class="mb-4 flex items-center justify-between gap-3">
                <x-tag label="Fêmea" color="white-green" custom-size="11px" />
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
                                    <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a8 8 0 0 1 8 8v1.4A3.1 3.1 0 0 1 16.9 14H14v.6a2.4 2.4 0 0 1-4.8 0V14H7.1A3.1 3.1 0 0 1 4 11.4V10a8 8 0 0 1 8-8Zm0 4a4 4 0 0 0-4 4v.3h8V10a4 4 0 0 0-4-4Zm-6 8h12v2H6v-2Z"/></svg>
                                    @break
                                @case('location')
                                    <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s6-5.6 6-11a6 6 0 1 0-12 0c0 5.4 6 11 6 11Zm0-9.5A2.5 2.5 0 1 1 12 7a2.5 2.5 0 0 1 0 5.5Z"/></svg>
                                    @break
                            @endswitch
                        </span>
                        <span>{{ $fact['label'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 space-y-3">
                <x-button
                    label="Quero Adotar a Amora • Demonstrar Interesse"
                    url="#"
                    color="terracotta"
                    spacing="none"
                    class="w-full py-3"
                >
                    <svg class="h-4 w-4" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21.35 10.55 20C5.4 15.36 2 12.28 2 8.5A4.5 4.5 0 0 1 6.5 4a4.9 4.9 0 0 1 4.1 2.1L12 7l1.4-1.9A4.9 4.9 0 0 1 17.5 4 4.5 4.5 0 0 1 22 8.5c0 3.78-3.4 6.86-8.55 11.5L12 21.35Z"/></svg>
                </x-button>
            </div>

            <p class="mt-4 text-center text-[11px] font-medium text-[#4c7d5e]">Adoção 100% ética e gratuita. Taxas de venda são proibidas.</p>

            <div class="mt-6 rounded-[1.5rem] border border-[#dfe9df] bg-[#edf6ee] p-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-[#dfeee0] text-[#356442]">
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3h-4.18A2.99 2.99 0 0 0 12 1a2.99 2.99 0 0 0-2.82 2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Zm-7 0a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1Zm-2 6h8v2H10V9Zm0 4h8v2h-8v-2Z"/></svg>
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
