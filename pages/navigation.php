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
									<h1 class="page-title">Navigation</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Navigation</li>
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
								<div class="col-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Basic Nav</h3>
										</div>
										<div class="card-body">
											<ul class="nav1 br-7">
												<li class="nav-item1">
													<a class="nav-link active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Nav Vertical</h3>
										</div>
										<div class="card-body">
											<ul class="nav1 flex-column br-7">
												<li class="nav-item1">
													<a class="nav-link active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Color Navigation</h3>
										</div>
										<div class="card-body">
											<ul class="nav nav-pills">
												<li class="nav-item m-1">
													<a class="nav-link active px-3 py-1" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item dropdown m-2">
													<a class="nav-link dropdown-toggle px-3 py-1" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														<div class="dropdown-divider m-0"></div>
														<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
													</div>
												</li>
												<li class="nav-item m-1">
													<a class="nav-link px-3 py-1" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item m-1">
													<a class="nav-link disabled px-3 py-1" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Icon Navigation</h3>
										</div>
										<div class="card-body">
											<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab1" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab2" data-bs-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link py-2 px-4  border active show m-1" id="tab3" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
														<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab4" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab5" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Icon Nav Bar</h3>
										</div>
										<div class="card-body">
											<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
												<li class="nav-item">
													<a class="nav-link border w-7 h-7 text-center br-100 m-2" id="tab21" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border w-7 h-7 br-100 m-2" id="tab22" data-bs-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border active show w-7 h-7 br-100 m-2" id="tab23" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-user fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border w-7 h-7 br-100 m-2" id="tab24" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border  w-7 h-7 br-100 m-2" id="tab25" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image fs-16"></i> </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Navigation backgrounds</h3>
										</div>
										<div class="card-body">
											<ul class="nav1 bg-primary br-7">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-info mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-success mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-danger mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-secondary mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-yellow mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="javascript:void(0);">Disabled</a>
												</li>
											</ul>
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