<div class="container-fluid py-5">
	<div class="col-10 mx-auto">
		<h1 class="text-center">Our Products</h1>
		<div class="text-center my-4">
			{{ $slot }}
		</div>
		<div class="row row-cols-4 gap-5 justify-content-center">
			@foreach ($products as $product)
			<div class="card col p-0">
				<img src="{{ asset('/img/' . $product->img) }}" class="card-img-top" alt="..." />
				<div class="card-body">
					<h4 class="card-title">{{ $product["product_name"] }}</h4>
					<p class="card-text">P{{ $product["price"] }}</p>
					@if($admin)
					<div class="d-flex gap-2">
						<a href="/shop/edit/{{ $product['id'] }}" class="btn-dark-green text-decoration-none">Edit</a>
						<form action="{{route('delete', ['id' => $product['id']])}}" method="post">
							@csrf @method("DELETE")
							<button type="submit" value="Delete" name="submit" class="btn btn-danger rounded-0 text-decoration-none" onclick="return confirm('Are you sure to delete?')">Delete</button>
						</form>
					</div>
					@else
					<a href="#" class="btn-dark-green text-decoration-none">Buy now</a>
					@endif
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
