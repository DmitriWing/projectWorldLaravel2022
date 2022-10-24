@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Cities List ({{$citiesCount}})</h2>
			</div>
		</div>
	</div>
	@if (count($cities ?? '') > 0)
	<table class="table table-striped">
		<tr>
			<th style="width:10%">Name</th>
			<th style="width:10%">Country code</th>
			<th style="width:10%">Population</th>
		</tr>
		@foreach ($cities as $city)
		<tr>
			<td>{{$city->Name}}</td>
			<td>{{$city->CountryCode}}</td>
			<td>{{$city->Population}}</td>
			<!--<td>
				 <a href="{{--url('detail/' . $country->Code)--}}" title="show">Detail</a> 
			</td>-->
		</tr>
	@endforeach
	</table>
	{!! $cities->links() !!}<!-- Это постраничная пагинация -->
	@else
	<p>Data no found</p>
	@endif
</div>
@endsection