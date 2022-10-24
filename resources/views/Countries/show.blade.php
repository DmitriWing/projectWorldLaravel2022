@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2> {{$country->Name}} </h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="/countries" title="Go back"> Back to CountriesList</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="form-group">
				<strong>Code:</strong> - {{ $country->Code }}
			</div>
			<div class="form-group">
				<strong>Name</strong> - {{ $country->Name }}
			</div>
			<div class="form-group">
				<strong>Continent</strong> - {{$country->Continent}}
			</div>
			<div class="form-group">
				<strong>Region</strong> - {{$country->Region}}
			</div>
			<?php if ($country->IndepYear != null) {
				
			 ?>
			<div class="form-group">
				<strong>IndepYear</strong> -  {{$country->IndepYear}}
			</div>
			<?php }else{

			 ?>
			 <div class="form-group">
				<strong>IndepYear</strong> -  Unknown
			</div>
		<?php } ?>

			<div class="form-group">
				<strong>Population</strong> - {{$country->Population}}
			</div>
			<div class="form-group">
				<strong>GovernmentForm</strong> - {{ $country->GovernmentForm }}
			</div>
			<div class="form-group">
				<strong>HeadOfState</strong> - {{ $country->HeadOfState }}
			</div>
			<div class="form-group">
				<strong>Domain</strong> - {{ $country->Code2 }}
			</div>
		</div>	<!--col-sm-5 -->
	</div>	<!--row -->
 </div> <!--container -->
@endsection