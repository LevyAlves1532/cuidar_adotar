@extends('template')

@php
	$animalTitle = $animal->name.' para adoção'.($animal->city ? ' em '.$animal->city : '').' | Cuidar & Adotar';
	$animalDescription = trim(strip_tags($animal->description ?? ''));
	$animalDescription = \Illuminate\Support\Str::limit(
		$animalDescription ?: 'Conheça '.$animal->name.', disponível para adoção responsável no Cuidar & Adotar.',
		155
	);
	$animalUrl = route('animal', ['animalId' => $animal->id]);
	$animalImage = $animal->primaryImage?->path
		? (filter_var($animal->primaryImage->path, FILTER_VALIDATE_URL)
			? $animal->primaryImage->path
			: asset('storage/'.$animal->primaryImage->path))
		: null;
@endphp

@section('title', $animalTitle)

@section('heads')
	<meta name="description" content="{{ $animalDescription }}">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="{{ $animalUrl }}">

	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="profile">
	<meta property="og:title" content="{{ $animalTitle }}">
	<meta property="og:description" content="{{ $animalDescription }}">
	<meta property="og:url" content="{{ $animalUrl }}">
	<meta property="og:site_name" content="Cuidar & Adotar">

	@if($animalImage)
		<meta property="og:image" content="{{ $animalImage }}">
		<meta property="og:image:alt" content="{{ $animal->name }} disponível para adoção responsável">
	@endif

	<meta name="twitter:card" content="{{ $animalImage ? 'summary_large_image' : 'summary' }}">
	<meta name="twitter:title" content="{{ $animalTitle }}">
	<meta name="twitter:description" content="{{ $animalDescription }}">

	@if($animalImage)
		<meta name="twitter:image" content="{{ $animalImage }}">
		<meta name="twitter:image:alt" content="{{ $animal->name }} disponível para adoção responsável">
	@endif
@endsection

@section('body')
	<main class="bg-[#fffaf7]">
		@include('containers.animal.sub-heading')
		@include('containers.animal.profile')
		@include('containers.animal.story')
		@include('containers.animal.how-it-works')
		@include('containers.animal.support')
	</main>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/embla-carousel@8.6.0/embla-carousel.umd.js" defer></script>
    <script src="{{ asset('js/pages/animal.js') }}" defer></script>
@endsection
