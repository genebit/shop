@extends('layouts.app') @section('content')
<div>
	<div class="container-fluid p-5">
		<div class="col-4 mx-auto p-4 border border-success border-2">
			<h4 class="text-uppercase text-center">Edit Product</h4>
			<form method="POST" action="/shop/update/{{$product->id}}" enctype="multipart/form-data">
				@csrf
				<div class="row mb-2">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="product_name">Product Name</label>
							<input class="form-control @error('product_name') is-invalid @enderror" required id="product_name" name="product_name" type="text" placeholder="Enter product name" value="{{ $product->product_name }}" />
							@error('product_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="product_price">Product Price</label>
							<input class="form-control @error('product_price') is-invalid @enderror" required id="product_price" name="product_price" type="text" placeholder="Enter product price" value="{{ $product->price }}" />
							@error('product_price')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<!-- /.row-->
				<div class="form-group">
					<label for="img">Upload Product Image</label>
					<div class="row">
						<div class="col-sm-6">
							<img id="preview-image-before-upload" src="{{asset('/img/'.$product->img)}}" alt="preview image" style="height: 200px; width: 200px; object-fit: cover" class="mb-2" />
							<input class="form-control @error('img') is-invalid @enderror" type="file" name="img" value="" id="img" />
							@error('img')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="mt-5">
					<button class="btn-dark-green">Edit Product</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection @section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
	$(document).ready(function (e) {
		$("#img").change(function () {
			let reader = new FileReader();
			reader.onload = (e) => {
				$("#preview-image-before-upload").attr("src", e.target.result);
			};
			reader.readAsDataURL(this.files[0]);
		});
	});
</script>
@endsection
