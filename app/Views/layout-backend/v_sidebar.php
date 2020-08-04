<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="/admin/home" class="brand-link">
		<img src="<?= base_url(); ?>/assets-backend/dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">PAI West Sumatera Tour</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<!-- <div class="image">
				<img src="<?= base_url(); ?>/assets-backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div> -->
			<div class="info">
				<a href="#" class="d-block">Welcome, Administrator</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class font-awesome or any other icon font library -->
				<li class="nav-item ">
					<a href="/admin/home" class="nav-link <?php echo ($title == "Home") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-home"></i>
						<p>
							Home
						</p>
					</a>

				</li>

				<li class="nav-item has-treeview <?php echo ($title == "Rent") ? "menu-open" : ""; ?>">
					<a href="/admin/rent" class="nav-link <?php echo ($title == "Rent") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-car"></i>
						<p>
							Rental For Tours & Education
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/rent/store" class="nav-link <?php echo ($child == "tambahRent") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/rent" class="nav-link <?php echo ($child == "dataRent") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview <?php echo ($title == "Regular") ? "menu-open" : ""; ?>">
					<a href="/admin/regular" class="nav-link <?php echo ($title == "Regular") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-compass"></i>
						<p>
							Regular Tours
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/regular/store" class="nav-link <?php echo ($child == "tambahRegular") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/regular" class="nav-link <?php echo ($child == "dataRegular") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>


				<li class="nav-header">EXAMPLES</li>
				<li class="nav-item has-treeview <?php echo ($title == "Trip") ? "menu-open" : ""; ?>">
					<a href="/admin/trip" class="nav-link <?php echo ($title == "Trip") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-hiking"></i>
						<p>
							Trips
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/trip/store" class="nav-link <?php echo ($child == "tambahTrip") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/trip" class="nav-link <?php echo ($child == "dataTrip") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="pages/gallery.html" class="nav-link">
						<i class="nav-icon far fa-image"></i>
						<p>
							Gallery
						</p>
					</a>
					</>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-envelope"></i>
						<p>
							Mailbox
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/mailbox/mailbox.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Inbox</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/mailbox/compose.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Compose</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/mailbox/read-mail.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Read</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-book"></i>
						<p>
							Pages
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/examples/invoice.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Invoice</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/profile.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Profile</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/e_commerce.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>E-commerce</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/projects.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Projects</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/project_add.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Project Add</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/project_edit.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Project Edit</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/project_detail.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Project Detail</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/contacts.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Contacts</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-plus-square"></i>
						<p>
							Extras
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/examples/login.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Login</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/register.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Register</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/forgot-password.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Forgot Password</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/recover-password.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Recover Password</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/lockscreen.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Lockscreen</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/legacy-user-menu.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Legacy User Menu</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/language-menu.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Language Menu</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/404.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Error 404</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/500.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Error 500</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/pace.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Pace</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/blank.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Blank Page</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="starter.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Starter Page</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-header">MISCELLANEOUS</li>
				<li class="nav-item">
					<a href="https://adminlte.io/docs/3.0" class="nav-link">
						<i class="nav-icon fas fa-file"></i>
						<p>Documentation</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>