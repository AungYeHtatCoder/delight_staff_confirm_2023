		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-header">Navigation</div>
					<div class="menu-item active">
						<a href="index.html" class="menu-link">
							<span class="menu-icon"><i class="bi bi-cpu"></i></span>
							<span class="menu-text">Dashboard</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
							<span class="menu-text">Analytics</span>
						</a>
					</div>
					{{-- <div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-envelope"></i>
							</span>
							<span class="menu-text">Email</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="email_inbox.html" class="menu-link">
									<span class="menu-text">Inbox</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_compose.html" class="menu-link">
									<span class="menu-text">Compose</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_detail.html" class="menu-link">
									<span class="menu-text">Detail</span>
								</a>
							</div>
						</div>
					</div> --}}
					<div class="menu-header">Components</div>
					{{-- <div class="menu-item">
						<a href="widgets.html" class="menu-link">
							<span class="menu-icon"><i class="bi bi-columns-gap"></i></span>
							<span class="menu-text">Widgets</span>
						</a>
					</div> --}}
					<div class="menu-item has-sub">
						@can('user_management_access')
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="bi bi-bag-check"></i>
								<span class="w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px"></span>
							</div>
							
							<div class="menu-text d-flex align-items-center">UserManagement</div> 
						
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
							@endcan
						@can('user_management_access')
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="{{ route('admin.permissions.index') }}" target="_blank" class="menu-link">
									<div class="menu-text">Permission</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="{{ route('admin.roles.index') }}" target="_blank" class="menu-link">
									<div class="menu-text">Role</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="{{ route('admin.users.index') }}" target="_blank" class="menu-link">
									<div class="menu-text">Users</div>
								</a>
							</div>
							{{-- <div class="menu-item">
								<a href="pos_table_booking.html" target="_blank" class="menu-link">
									<div class="menu-text">Table Booking</div>
								</a>
							</div> --}}
							{{-- <div class="menu-item">
								<a href="pos_menu_stock.html" target="_blank" class="menu-link">
									<div class="menu-text">Menu Stock</div>
								</a>
							</div> --}}
						</div>
						@endcan
					</div>
					@can('user_management_access')
					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="bi bi-controller"></i></span>
							<span class="menu-text">SalaryManagement</span> 
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="{{ route('admin.salaries.index')}}" class="menu-link">
									<span class="menu-text">SalaryCreate</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="{{ route('admin.salary.index') }}" class="menu-link">
									<span class="menu-text">TotalSalary</span>
								</a>
							</div>
							
						</div>
					</div>
					@endcan
					
					<div class="menu-divider"></div>
					<div class="menu-header">Users</div>
					@if(Auth::user()->id === 1)
					<div class="menu-item">
						<a href="{{ route('admin.profiles.index') }}" class="menu-link">
							<span class="menu-icon"><i class="bi bi-people"></i></span>
							<span class="menu-text">Admin Profile</span>
						</a>
					</div>
					@else 
					<div class="menu-item">
						<a href="{{ route('admin.profiles.index') }}" class="menu-link">
							<span class="menu-icon"><i class="bi bi-people"></i></span>
							<span class="menu-text">User Profile</span>
						</a>
					</div>
					@endif
					<div class="menu-item">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="bi bi-calendar4"></i></span>
							<span class="menu-text">Calendar</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="bi bi-gear"></i></span>
							<span class="menu-text">Settings</span>
						</a>
					</div>
				
				</div>
				<!-- END menu -->
				
			</div>
			<!-- END scrollbar -->
		</div>