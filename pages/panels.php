<!doctype html>
<html lang="en" dir="ltr">
	
	<head>
		<?php include '../layouts/styles.php'; ?>


	</head>

	<body class="app sidebar-mini ltr light-mode">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- APP-HEADER -->
				<?php include '../layouts/app-header.php'; ?>

				<!-- /APP-HEADER -->

				<!--APP-SIDEBAR-->
				<?php include '../layouts/app-sidebar.php'; ?>

				<!--/APP-SIDEBAR-->

				<!-- APP-CONTENT OPEN -->
				<div class="main-content app-content mt-0">
					<div class="side-app">

						<!-- CONTAINER -->
						<div class="main-container container-fluid">

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Panels</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Panels</li>
									</ol>
								</div>
								<div class="ms-auto pageheader-btn">
									<a href="javascript:void(0);" class="btn btn-primary btn-icon text-white me-2">
										<span>
											<i class="fe fe-plus"></i>
										</span> Add Account
									</a>
									<a href="javascript:void(0);" class="btn btn-success btn-icon text-white">
										<span>
											<i class="fe fe-log-in"></i>
										</span> Export
									</a>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Simple Panels</h3>
										</div>
										<div class="card-body">
											<div class="expanel expanel-default mt-4">
												<div class="expanel-body">
													Basic panel example
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Panel with heading</h3>
										</div>
										<div class="card-body">
											<div class="row mt-4">
												<div class="col-lg-6">
													<div class="expanel expanel-default">
														<div class="expanel-heading">Panel heading without title</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="expanel expanel-default">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Panel with footer</h3>
										</div>
										<div class="card-body">
											<div class="expanel expanel-default mt-4">
												<div class="expanel-body">
													Panel content
												</div>
												<div class="expanel-footer">Panel footer</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Panel with color header</h3>
										</div>
										<div class="card-body">
											<div class="row mt-4">
												<div class="col-lg-6">
													<div class="expanel expanel-primary">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel contents
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="expanel expanel-secondary">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="expanel expanel-success">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="expanel expanel-danger">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->
						</div>
						<!-- CONTAINER CLOSED -->
					</div>
				</div>
				<!-- APP-CONTENT CLOSED -->
			</div>

			<!--SIDEBAR-RIGHT-->
			<?php include '../layouts/sidebar-right.php'; ?>

			<!--/SIDEBAR-RIGHT-->

			<!-- FOOTER -->
			<?php include '../layouts/footer.php'; ?>

			<!-- FOOTER END -->
			
		</div>

		<?php include '../layouts/scripts.php'; ?>


		<?php include '../layouts/main-scripts.php'; ?>
		

	</body>
</html>