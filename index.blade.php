@extends('layouts.admin')

@section('title', 'Dashboard')
@section('content')

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-white">Admin</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				@include('admin.dashboard.include.count')
			</div>
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold ">Dashboard</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body"></div>
			</div>
		</div>
	</div>

@endsection

@section('js')
@endsection