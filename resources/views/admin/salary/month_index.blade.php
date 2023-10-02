@extends('layouts.admin_app')
@section('styles')
<link href="{{ asset('admin_app/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="container">
				<!-- BEGIN row -->
				<div class="row justify-content-center">
					<!-- BEGIN col-10 -->
					<div class="col-xl-10">
						<!-- BEGIN row -->
						<div class="row">
							<!-- BEGIN col-9 -->
							<div class="col-xl-9">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
									<li class="breadcrumb-item active">Salary Payment Dashboard</li>
								</ul>
								
								<h1 class="page-header">
									Salary Payment By Month Dashboard <small>page header description goes here...</small>
								</h1>
								
								<hr class="mb-4">
								
								<!-- BEGIN #datatable -->
<div id="datatable" class="mb-5">
    <h4><a href="{{ route('admin.salaries.create') }}" class="btn btn-primary">New Salary Create</a></h4>
    <p>Total Salary Amount by Year and Month</p>
    <div class="card">
        <div class="card-body">
            <table id="datatableDefault" class="table text-nowrap w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>UserName</th>
                        <th>Role</th>
                        <th>Salary</th>
                        <th>Month</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $totalSum = 0; // Initialize a variable to store the total sum
                    @endphp
                    @foreach($totalAmountByMonth as $key => $salary)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $salary->user_name }}</td>
                        <td>{{ $salary->role_titles }}</td>
                        <td>{{ $salary->total_amount }}</td>
                        <td>{{ $salary->month }}</td>
                        <td>{{ $salary->year }}</td>
                    </tr>
                    @php
                    // Add the current salary's total_amount to the totalSum
                    $totalSum += $salary->total_amount;
                    @endphp
                    @endforeach
                    
                </tbody>
            </table>
												<table class="table text-nowrap w-100">
													<thead>
														<th>#</th>
														<th>-</th>
														<th>-</th>
														<th>-</th>
														<th>-</th>
													</thead>
													<tbody>
														<tr>
																							<td colspan="2"></td>
                        <td colspan="3"></td>
                        <td><h4 class="btn btn-primary">All Salary Amount Total: {{ $totalSum }}</h4></td>
                        <td colspan="2"></td>
                    </tr>
													</tbody>
												</table>
        </div>
    </div>
</div>

							</div>
							<!-- END col-9-->
							<!-- BEGIN col-3 -->
							<div class="col-xl-3">
								<!-- BEGIN #sidebar-bootstrap -->
								<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
									<nav class="nav">
										<a class="nav-link" href="#datatable" data-toggle="scroll-to">Datatable</a>
										{{-- <a class="nav-link" href="#bootstrapTable" data-toggle="scroll-to">Bootstrap table</a> --}}
									</nav>
								</nav>
								<!-- END #sidebar-bootstrap -->
							</div>
							<!-- END col-3 -->
						</div>
						<!-- END row -->
					</div>
					<!-- END col-10 -->
				</div>
				<!-- END row -->
 @include('sweetalert::alert')
			</div>
@endsection

@section('scripts')
<script src="{{ asset('admin_app/assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/highlightjs.demo.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/table-plugins.demo.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/sidebar-scrollspy.demo.js') }}"></script>
	<!-- ================== END page-js ================== -->
@endsection