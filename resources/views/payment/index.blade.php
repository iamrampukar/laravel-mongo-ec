@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-12">
		@foreach ($paymentModel as $key => $element)
			{{ print_r($element) }}
			<hr/>
		@endforeach
		<br/>
		{{ $paymentModel->links() }}
	</div>
</div>
@endsection

