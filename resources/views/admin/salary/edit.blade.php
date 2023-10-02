@extends('layouts.admin_app')
@section('styles')
<link href="{{ asset('admin_app/assets/plugins/tag-it/css/jquery.tagit.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/summernote/dist/summernote-lite.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/spectrum-colorpicker2/dist/spectrum.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/select-picker/dist/picker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/jquery-typeahead/dist/jquery.typeahead.min.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="container">
				<!-- BEGIN row -->
				<div class="row justify-content-center">
					<!-- BEGIN col-10 -->
					<div class="col-xl-10">
						<!-- BEGIN row -->
						<div class="row">

							<div class="col-md-10">
    	<div id="formGrid" class="mb-5">
									<h4>Salary Payment Update <span> <a href="{{ route('admin.salaries.index') }}" class="btn btn-primary">Back To Salary Payment Dashboard</a></span></h4>
									<p></p>
									<div class="card">
										<div class="card-body">
											<form action="{{ route('admin.salaries.update', $salary['id']) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label class="form-label">Choose User <span class="text-danger">*</span></label>
            <select name="user_id" class="form-control" id="ex-basic">
                @foreach($users as $id => $name)
                    <option value="{{ $id }}" {{ (old('user_id', $salary->user_id) == $id) ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
        </div>

												<div class="mb-3 row">
													<label for="inputEmail3" class="col-sm-2 col-form-label">Salary Amount</label>
													<div class="col-sm-10">
														<input type="number" class="form-control" id="inputEmail3" name="amount" value="{{ $salary->amount }}">
													</div>
												</div>
            <div class="mb-3">
															<label class="form-label">Salary Payment Date <span class="text-danger">*</span></label>
															<div class="input-group">
																<input type="text" name="payment_date" class="form-control" id="datepicker-component" placeholder="with input group addon" value="{{ $salary->payment_date }}">
																<label class="input-group-text" for="datepicker-component"><i class="fa fa-calendar"></i></label>
															</div>
														</div>
												<div class="form-group row">
													<div class="col-sm-10 offset-sm-2">
														<button type="submit" class="btn btn-outline-theme">Create New Payment Salary</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
   </div>
            
      </div>
     </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('admin_app/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/tag-it/js/tag-it.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-tmpl/js/tmpl.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-load-image/js/load-image.all.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/summernote/dist/summernote-lite.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/spectrum-colorpicker2/dist/spectrum.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/select-picker/dist/picker.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/highlightjs.demo.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/form-plugins.demo.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/sidebar-scrollspy.demo.js') }}"></script>
	<!-- ================== END page-js ================== -->

@endsection