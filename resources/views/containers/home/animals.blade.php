@php
    use Illuminate\Support\Facades\Storage;
@endphp

<section id="catalogo" class="bg-[#fff1eb]" aria-labelledby="animals-title">
    <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-14 lg:px-10 lg:py-16">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div class="max-w-xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#b63817]">Adoção imediata</p>
                <h2 id="animals-title" class="mt-1 font-serif text-3xl font-bold leading-tight tracking-tight text-[#261714] sm:text-4xl">Eles Estão Esperando Por Você</h2>
                <p class="mt-1 max-w-lg text-sm leading-5 text-[#704f45]">Cada olhar carrega uma história de superação. Conheça estes amigos ansiosos por um lar aconchegante.</p>
            </div>
            <a href="{{ route('catalog') }}" class="inline-flex items-center gap-1 self-start text-xs font-semibold text-[#b63817] transition hover:text-[#922d12] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] focus-visible:ring-offset-2 sm:self-auto">Explorar todos os {{ $availableAnimalsCount }} pets <span aria-hidden="true">→</span></a>
        </div>

        <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($animals as $animal)
                @component('components.animal-card', [
                    'name' => $animal->name,
                    'species' => $animal->species->label(),
                    'age' => $animal->age_group->label(),
                    'size' => 'Porte '.$animal->size->label(),
                    'location' => $animal->city,
                    'description' => strip_tags($animal->description),
                    'image' => $animal->primaryImage?->path ? Storage::disk('public')->url($animal->primaryImage->path) : '',
                    'status' => $animal->status->label(),
                    'gender' => $animal->sex->label(),
                    'genderColor' => $animal->sex->value === 'female' ? 'white-red' : 'white-green',
                    'url' => route('animal', $animal->id),
                ])
                @endcomponent
            @empty
                <p class="col-span-full rounded-2xl bg-white p-8 text-center text-sm text-[#704f45]">Nenhum animal disponível para adoção no momento.</p>
            @endforelse
        </div>

        <div class="mt-7 flex justify-center">
            @component('components.button', [
                'url' => route('catalog'),
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
