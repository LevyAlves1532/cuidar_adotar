@extends('template')

@section('body')
	<div class="overflow-hidden bg-linear-to-br from-[#fffaf2] via-[#fff4ef] to-[#ffebe5]">
		@include('containers.home.banner')
		@include('containers.home.animal-filter', ['availableCities' => $availableCities])
		@include('containers.home.categories', ['categoryCounts' => $categoryCounts])
		@include('containers.home.animals')
	</div>

	<div class="overflow-hidden bg-white">
		@include('containers.home.responsible-adoption')
		@include('containers.home.how-it-works')
		@include('containers.home.rescuer-callout')
	</div>

	<div class="overflow-hidden bg-linear-to-br from-[#fffaf2] via-[#fff4ef] to-[#ffebe5]">
		@include('containers.home.testimonials')
		@include('containers.home.faq')
	</div>
@endsection

@section('scripts')
	<script src="https://cdn.jsdelivr.net/npm/embla-carousel@8.6.0/embla-carousel.umd.js" defer></script>
	<script src="{{ asset('js/pages/home.js') }}" defer></script>
@endsection
