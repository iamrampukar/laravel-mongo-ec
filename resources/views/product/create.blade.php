@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-6">
		<h5>Product</h5>
		<form method="post" action="{{ route('product.store') }}">
			@csrf
			@method('POST')
			<div class="mb-3">
				<label for="product-name-en" class="form-label">Product Name(en)</label>
				<input type="text" class="form-control form-control-sm" id="product-name-en" name="product_name_en" placeholder="Enter product name(en)">
			</div>

			<div class="mb-3">
				<label for="product-name-ja" class="form-label">Product Name(ja)</label>
				<input type="text" class="form-control form-control-sm" id="product-name-ja" name="product_name_ja" placeholder="Enter product name(ja)">
			</div>

			<div class="mb-3">
				<label for="price" class="form-label">Price</label>
				<input type="text" class="form-control form-control-sm" id="price" name="price" placeholder="0.00">
			</div>

			<div class="mb-3">
				<label for="category" class="form-label">Category</label>
				<select class="form-select form-select-sm" name="category" id="category" aria-label="Default select example">
					<option selected>--select--</option>
					@foreach ($categoryList as $element)
						<option value="{{ $element->id }}">{{ $element->category_name_en }}</option>
					@endforeach
				</select>
			</div>

			<div class="mb-3">
				<label for="details" class="form-label">Details</label>
				<textarea class="form-control form-control-sm" id="details" name="detail" rows="5" placeholder="Enter details..."></textarea>
			</div>
			<button class="btn btn-primary btn-sm">
				SAVE
			</button>
		</form>
	</div>
</div>
@endsection

