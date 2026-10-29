@extends('template')

@section('title', 'Cuidar & Adotar | Encontre seu novo companheiro')

@section('heads')
	<meta name="description" content="Encontre cães e gatos disponíveis para adoção responsável no Cuidar & Adotar. Conectamos animais que precisam de um lar a famílias interessadas.">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="{{ route('home') }}">

	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Cuidar & Adotar | Encontre seu novo companheiro">
	<meta property="og:description" content="Encontre cães e gatos disponíveis para adoção responsável e ajude um animal a encontrar um lar.">
	<meta property="og:url" content="{{ route('home') }}">
	<meta property="og:site_name" content="Cuidar & Adotar">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Cuidar & Adotar | Encontre seu novo companheiro">
	<meta name="twitter:description" content="Encontre cães e gatos disponíveis para adoção responsável e ajude um animal a encontrar um lar.">
@endsection

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
