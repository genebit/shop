@extends('layouts.app') @section('content')
<div class="container-fluid hero-section">
	<div class="container-fluid hero-section d-flex align-items-center">
		<div class="col-4 text-center m-auto bg-black bg-opacity-50 text-white p-5">
			<h1 class="mb-4">Our dedication to sustainability</h1>
			<p class="mb-5">Lorem ipsum dolor sit amet consectetur. Commodo pulvinar tortor nunc lectus. Vitae vitae tortor urna sodales mi.</p>
			<button class="btn-dark-green">Shop Now</button>
		</div>
	</div>
</div>

<x-product-list :products="$products" :admin="$admin"></x-product-list>
@endsection
