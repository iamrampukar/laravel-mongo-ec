@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-6">
		@foreach ($productModel as $element)
			<p>{{ $element['comment']['comment'] }}</p>
		@endforeach
	</div>
</div>
@endsection

