@extends('layouts.main')

@section('content')
	<div class="container-fluid">
	    <div class="header-title text-center">Top Artist</div>	   	
   		@if($swipes->count())
   		<div class="form-group row">
		   	@foreach($swipes as  $swipe) 
		        <div class="col-md-12">
		           <p class="art-name">{{$swipe->artist->name}}</p>
		        </div>
		    @endforeach
		</div>
		@else
			<div class="header-title p-t-130 text-center">No Artist Found Related Genere !</div>
		@endif
		
	</div>
@endsection