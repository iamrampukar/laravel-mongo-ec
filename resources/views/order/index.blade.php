@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-7">
		
		<hr/>
		@php
			$total = 0;
		@endphp
		@foreach ($orderModel as $key => $element)
			<div style="border: 1px solid #ccc;" class="m-1">
				<pre> {{ print_r($orderModel[$key]) }}</pre>
				@php
					$total += $orderModel[$key]['total'];
				@endphp
			</div>
		@endforeach
		<p class="text text-primary">Total: {{ number_format($total,2) }}</p>
		
		<form method="post" action="{{ route('order.checkout') }}">
			@csrf
			@method('POST')
			<input type="text" name="net_total" value="{{ $total }}"><br/>
			Shipping Detail:
			<div class="mb-3">
				<label for="full_name" class="form-label">Full Name</label>
				<input type="text" class="form-control form-control-sm" id="full_name" name="full_name" placeholder="Enter full name">
			</div>
			<div class="mb-3">
				<label for="address" class="form-label">Address</label>
				<input type="text" class="form-control form-control-sm" id="address" name="address" placeholder="Enter address">
			</div>
			<div class="mb-3">
				<label for="credit_cart" class="form-label">Credit Card No</label>
				<input type="text" class="form-control form-control-sm" id="credit_cart" name="credit_cart" placeholder="Enter card number">
			</div>
			<button class="btn btn-primary btn-sm">Checkout</button> 
		</form>
	</div>
</div>
@endsection

