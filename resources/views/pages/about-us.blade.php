@extends('template')

@section('title', 'Sobre o Projeto | Cuidar & Adotar')

@section('heads')
	<meta name="description" content="Conheça o Cuidar & Adotar, um projeto que usa a tecnologia para conectar animais a pessoas interessadas em adoção responsável e ajudar a reduzir o abandono animal.">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="{{ route('about-us') }}">

	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Sobre o Projeto | Cuidar & Adotar">
	<meta property="og:description" content="Conheça o Cuidar & Adotar e descubra como nosso projeto conecta animais a pessoas interessadas em adoção responsável.">
	<meta property="og:url" content="{{ route('about-us') }}">
	<meta property="og:site_name" content="Cuidar & Adotar">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Sobre o Projeto | Cuidar & Adotar">
	<meta name="twitter:description" content="Conheça o Cuidar & Adotar e descubra como nosso projeto contribui para reduzir o abandono animal.">
@endsection

@section('body')
	<main class="overflow-hidden bg-[#fffaf7]">
		@include('containers.about-us.banner')
		@include('containers.about-us.founders')
	</main>
@endsection
