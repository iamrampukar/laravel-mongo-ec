@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-6">
		Total Item {{ $itemCount }}
		<a href="{{ route('order.list') }}">Order Items</a>
		<br/>
		{{ $productModel }}
		<br/>
		<form method="post" action="{{ route('product_detail.add_cart',['id'=>$productModel->id]) }}">
			@csrf
			@method('POST')
			<div class="mb-3">
				<label for="qty" class="form-label">Qty</label>
				<input type="text" class="form-control form-control-sm" id="qty" name="qty" placeholder="Enter qty">
			</div>
			<button class="btn btn-primary btn-sm">Add Cart</button>
		</form>
	</div>

</div>
@endsection

