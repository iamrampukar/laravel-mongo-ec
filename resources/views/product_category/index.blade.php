@extends('app_layout')
@section('title','Home')
@section('content')
<div class="row">
	<div class="col-md-7">
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
					<th>CATEGORY NAME(en)</th>
					<th>CATEGORY NAME(ja)</th>
					<th>CREATED</th>
					<th></th>
				</tr>					
			</thead>
			<tbody>
				@foreach ($productModel as $key => $element)
				<tr>
					<td>{{ ++$key }}</td>
					<td>{{ $element->category_name_en }}</td>
					<td>{{ $element->category_name_ja }}</td>
					<td>{{ date('Y-m-d',strtotime($element->created_at)) }}</td>
					<td></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $productModel->links() }}
	</div>
</div>
@endsection

