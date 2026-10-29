@extends('template')

@section('title', 'Animais para Adoção | Cães e Gatos | Cuidar & Adotar')

@section('heads')
	<meta name="description" content="Encontre cães e gatos disponíveis para adoção responsável. Conheça os animais do nosso catálogo e encontre seu novo companheiro no Cuidar & Adotar.">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="{{ route('catalog') }}">

	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Animais para Adoção | Cães e Gatos | Cuidar & Adotar">
	<meta property="og:description" content="Encontre cães e gatos disponíveis para adoção responsável e descubra seu novo companheiro no Cuidar & Adotar.">
	<meta property="og:url" content="{{ route('catalog') }}">
	<meta property="og:site_name" content="Cuidar & Adotar">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Animais para Adoção | Cães e Gatos | Cuidar & Adotar">
	<meta name="twitter:description" content="Encontre cães e gatos disponíveis para adoção responsável e descubra seu novo companheiro no Cuidar & Adotar.">
@endsection

@section('body')
	<main class="bg-linear-to-br from-[#fffaf2] via-[#fff4ef] to-[#f7f5ec]">
		@include('containers.catalog.banner')
		@livewire('catalog.manager-filters')
		@include('containers.catalog.animals')
	</main>
@endsection

@section('scripts')
	<script src="{{ asset('js/pages/catalog.js') }}"></script>
@endsection
