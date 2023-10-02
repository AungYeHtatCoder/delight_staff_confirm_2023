<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
	<meta charset="utf-8">
	<title>Delight | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('admin_app/assets/css/vendor.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/css/app.min.css') }}" rel="stylesheet">
	<!-- ================== END core-css ================== -->
	
</head>
<body class='pace-top'>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN login -->
		<div class="login">
			<!-- BEGIN login-content -->
			<div class="login-content">
				<form method="POST" action="{{ route('login') }}">
                        @csrf
					<h1 class="text-center">Sign In</h1>
					<div class="text-inverse text-opacity-50 text-center mb-4">
						For your protection, please verify your identity.
					</div>
					<div class="mb-3">
						<label class="form-label">Email Address <span class="text-danger">*</span></label>
						<input type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="" name="email">
					</div>
					<div class="mb-3">
						<div class="d-flex">
							<label class="form-label">Password <span class="text-danger">*</span></label>
							{{-- <a href="#" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a> --}}
						</div>
						<input type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="" name="password">
					</div>
					<div class="mb-3">
						{{-- <div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="customCheck1">
							<label class="form-check-label" for="customCheck1">Remember me</label>
						</div> --}}
					</div>
					<button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
					{{-- <div class="text-center text-inverse text-opacity-50">
						Don't have an account yet? <a href="page_register.html">Sign up</a>.
					</div> --}}
				</form>
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login -->
		
		<!-- BEGIN theme-panel -->
		<div class="app-theme-panel">
			<div class="app-theme-panel-container">
				<a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
				<div class="app-theme-panel-content">
					<div class="small fw-bold text-inverse mb-1">Display Mode</div>
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body p-2">
							<div class="row gx-2">
								<div class="col-6">
									<a href="javascript:;" data-toggle="theme-mode-selector" data-theme-mode="dark" class="app-theme-mode-link active">
										<div class="img"><img src="{{ asset('admin_app/assets/img/mode/dark.jpg')}}" class="object-fit-cover" height="76" width="76" alt="Dark Mode"></div>
										<div class="text">Dark</div>
									</a>
								</div>
								<div class="col-6">
									<a href="javascript:;" data-toggle="theme-mode-selector" data-theme-mode="light" class="app-theme-mode-link">
										<div class="img"><img src="{{ asset('admin_app/assets/img/mode/light.jpg')}}" class="object-fit-cover" height="76" width="76" alt="Light Mode"></div>
										<div class="text">Light</div>
									</a>
								</div>
							</div>
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					
					<div class="small fw-bold text-inverse mb-1">Theme Color</div>
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body p-2">
							<!-- BEGIN theme-list -->
							<div class="app-theme-list">
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
								<div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info"  data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary"  data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
							</div>
							<!-- END theme-list -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					
					<div class="small fw-bold text-inverse mb-1">Theme Cover</div>
					<div class="card">
						<!-- BEGIN card-body -->
						<div class="card-body p-2">
							<!-- BEGIN theme-cover -->
							<div class="app-theme-cover">
								<div class="app-theme-cover-item active">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-1.jpg);" data-theme-cover-class="" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-2.jpg);" data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 2">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-3.jpg);" data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 3">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-4.jpg);" data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 4">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-5.jpg);" data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 5">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-6.jpg);" data-theme-cover-class="bg-cover-6" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 6">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-7.jpg);" data-theme-cover-class="bg-cover-7" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 7">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-8.jpg);" data-theme-cover-class="bg-cover-8" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 8">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-9.jpg);" data-theme-cover-class="bg-cover-9" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 9">&nbsp;</a>
								</div>
							</div>
							<!-- END theme-cover -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
				</div>
			</div>
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('admin_app/assets/js/vendor.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/app.min.js') }}"></script>
	<!-- ================== END core-js ================== -->
	
	
</body>
</html>