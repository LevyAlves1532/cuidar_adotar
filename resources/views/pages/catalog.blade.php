@extends('template')

@section('body')
	<main class="bg-linear-to-br from-[#fffaf2] via-[#fff4ef] to-[#f7f5ec]">
		@include('containers.catalog.banner')
		@include('containers.catalog.filter-bar')
		@include('containers.catalog.animals')
	</main>
@endsection

@section('scripts')
	<script src="{{ asset('js/pages/catalog.js') }}"></script>
@endsection
