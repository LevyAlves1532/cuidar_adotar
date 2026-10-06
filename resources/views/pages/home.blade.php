@extends('template')

@section('body')
	<div class="overflow-hidden bg-linear-to-br from-[#fffaf2] via-[#fff4ef] to-[#ffebe5]">
		@include('containers.home.banner')
		@include('containers.home.animal-filter')
		@include('containers.home.categories')
		@include('containers.home.animals')
	</div>

	<div class="overflow-hidden bg-white">
		@include('containers.home.responsible-adoption')
		@include('containers.home.how-it-works')
	</div>
@endsection
