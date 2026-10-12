@extends('template')

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
