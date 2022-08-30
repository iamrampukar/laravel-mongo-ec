@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-sm">
			<colgroup>
				<col width="10%">
				<col width="30%">
				<col width="30%">
				<col width="15%">
				<col width="15%">
			</colgroup>
			<thead>
				<tr>
					<th>#</th>
					<th>PRODUCT NAME(en)</th>
					<th>PRODUCT NAME(ja)</th>
					<th>CREATED</th>
					<th></th>
				</tr>					
			</thead>
			<tbody>
				@foreach ($productModel as $key => $element)
				<tr>
					<td>{{ ++$key }}</td>
					<td>{{ $element->product_name_en }}</td>
					<td>{{ $element->product_name_ja }}</td>
					<td>{{ date('Y-m-d',strtotime($element->created_at)) }}</td>
					<td>
						<a href="{{ route('product.show',['id'=>$element->id]) }}">SHOW</a> | 
						<a href="{{ route('product_detail.show',['id'=>$element->id]) }}">Product Detail</a> | 
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $productModel->links() }}
	</div>
</div>
@endsection

