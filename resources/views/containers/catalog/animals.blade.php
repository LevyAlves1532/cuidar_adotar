<section class="mx-auto w-full max-w-7xl px-5 pb-14 sm:px-8 lg:px-10" aria-labelledby="available-animals-title">
    <div class="grid gap-5 lg:grid-cols-[15rem_minmax(0,1fr)] xl:grid-cols-[17rem_minmax(0,1fr)]">
        @livewire('catalog.filters')

        @livewire('catalog.list-animals')
    </div>
</section>
