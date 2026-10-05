@props([
    'label' => '',
    'available' => '',
    'url' => '#adotar',
    'iconBackground' => 'bg-[#fde9e3]',
    'iconColor' => 'text-[#b63817]',
    'icon' => null,
])

<a href="{{ $url }}" class="group flex min-h-32 flex-col items-center justify-center rounded-xl border border-[#f4e5df] bg-white/60 px-3 py-4 text-center transition duration-200 hover:-translate-y-1 hover:border-[#e7c9bd] hover:bg-white hover:shadow-[0_12px_25px_rgba(104,56,38,0.1)] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#b63817] focus-visible:ring-offset-2 sm:min-h-36">
    <span class="flex h-11 w-11 items-center justify-center rounded-full {{ $iconBackground }} {{ $iconColor }} transition-transform duration-200 group-hover:scale-110" aria-hidden="true">
        {{ $icon }}
    </span>
    <span class="mt-2 text-sm font-semibold leading-tight text-[#261714] sm:text-base">{{ $label }}</span>
    <span class="mt-0.5 text-[11px] text-[#8c6b60] sm:text-xs">{{ $available }} disponíveis</span>
</a>
