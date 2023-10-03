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
		<div class="container">
   <div class="row">
    <div class="col-md-8">
     <div class="card">
      <div class="card-header">
       <h4>Lottery List</h4>
      </div>
      <div class="card-body">
       <table class="table table-striped">
        <thead>
            <tr>
                <th>Lottery Times</th>
                <th>Customer Name</th>
                <th>Customer Ph</th>
                <th>Ticket Numbers</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lotteries as $lottery)
                @foreach ($lottery->customers as $customer)
                    <tr>
                        <td>{{ $lottery->times }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <ul>
                                @foreach (json_decode($customer->pivot->ticket_no) as $ticketNo)
                                    <li>{!! DNS2D::getBarcodeHTML("$ticketNo", 'QRCODE', 5, 5)!!}
                                    P - {{ $ticketNo }}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
      </div>
     </div>
    </div>
    <div class="col-md-4">

     <div class="card">
      <div class="card-header">
       <h4>Lottery Test</h4>
      </div>
      <div class="card-body">
       <form method="POST" action="{{ route('lotteries.store') }}">
    @csrf
    <div class="mb-3">
						<label class="form-label">Customer Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="Customer Name" name="customer_name">
					</div>

     <div class="mb-3">
						<label class="form-label">Customer Phone <span class="text-danger">*</span></label>
						<input type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="ဖုန်းနံပါတ်ထဲ့ရန်" name="phone">
					</div>
     <div class="mb-3">
						<label class="form-label">Lottery Time <span class="text-danger">*</span></label>
						<input type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="အကြိမ်ရေထဲ့ရန်" name="times">
					</div>
    <div id="ticket-container">
        <!-- This div will hold dynamically added input fields -->
    </div>
    <button type="button" id="add-ticket">Add Ticket</button>
    <button type="submit">Place Bets</button>
</form>
      </div>
     </div>
    </div>
   </div>
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
	
	<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ticketContainer = document.getElementById('ticket-container');
        const addTicketButton = document.getElementById('add-ticket');

        let ticketCount = 0;

        addTicketButton.addEventListener('click', function () {
            ticketCount++;

            const ticketTemplate = `
                <div class="ticket">
                    <label for="ticket_on">Ticket No:</label>
                    <input type="number" name="ticket_no[]" id="ticket_no" class="form-control" required>
                    <button type="button" class="btn btn-primary btn-sm remove-ticket">Remove Ticket</button>
                </div>
            `;

            const ticketElement = document.createElement('div');
            ticketElement.innerHTML = ticketTemplate;

            ticketContainer.appendChild(ticketElement);

            // Handle removing tickets
            const removeButtons = ticketContainer.querySelectorAll('.remove-ticket');
            removeButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    ticketContainer.removeChild(ticketElement);
                });
            });
        });
    });
</script>

</body>
</html>
