@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-6">
		<form method="post" action="{{ route('store') }}">
			@csrf
			@method('POST')
			<div class="mb-3">
				<label for="category-name-en" class="form-label">Category Name(en)</label>
				<input type="text" class="form-control form-control-sm" id="category-name-en" name="category_name_en" placeholder="Enter product name(en)">
			</div>

			<div class="mb-3">
				<label for="category-name-ja" class="form-label">Category Name(ja)</label>
				<input type="text" class="form-control form-control-sm" id="category-name-ja" name="category_name_ja" placeholder="Enter product name(ja)">
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

