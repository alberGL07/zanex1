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
									<h1 class="page-title">Tooltip and Popover</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tooltip and Popover</li>
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
								<div class="col-lg-12">
									<!-- div -->
									<div class="card" id="Tooltip">
										<div class="card-header border-bottom-0">
											<div class="card-title">
												Default Tooltip
											</div>
										</div>
										<div class="card-body">
											<div class="form-label mb-2">
												Static Example
											</div>
											<div class="tooltip-static-demo mb-4 border br-3">
												<div class="row ">
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip bs-tooltip-top" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the top
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<div class="tooltip bs-tooltip-bottom" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the bottom
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<div class="tooltip bs-tooltip-start" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the left
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<div class="tooltip bs-tooltip-end" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the right
															</div>
														</div>
													</div>
												</div>
											</div><!-- tooltip-static-demo -->
											<div class="form-label mb-2">
												Example
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row  text-center">
													<div class="col-sm-6 col-lg-3 mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Tooltip on Bottom" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="left" data-bs-toggle="tooltip" title="Tooltip on left" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="right" data-bs-toggle="tooltip" title="Tooltip on right" >Hover me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->
									<!-- div -->
									<div class="card" id="Tooltip1">
										<div class="card-header border-bottom-0">
											<div class="card-title">
												Color Tooltip
											</div>
										</div>
										<div class="card-body">
											<div class="form-label  mb-2">
												Static Example
											</div>
											<div class="tooltip-static-demo mb-4 border br-3">
												<div class="row ">
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the top
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<div class="tooltip tooltip-secondary bs-tooltip-bottom" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the bottom
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<div class="tooltip tooltip-danger bs-tooltip-start" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the left
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<div class="tooltip tooltip-info bs-tooltip-end" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the right
															</div>
														</div>
													</div>
												</div>
											</div><!-- tooltip-static-demo -->
											<div class="form-label mb-2">
												Example
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row  text-center">
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Tooltip on top" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-secondary" data-bs-placement="bottom" data-bs-toggle="tooltip-secondary" title="Tooltip on bottom" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-danger" data-bs-placement="left" data-bs-toggle="tooltip-danger" title="Tooltip on left" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-info" data-bs-placement="right" data-bs-toggle="tooltip-info" title="Tooltip on right" >Hover me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom-0">
											<div class="card-title">
												Default Popover
											</div>
										</div>
										<div class="card-body">
											<div class="form-label  mb-2">
												Static Example
											</div>
											<div class="popover-static-demo mb-4 border br-3 pb-6">
												<div class="row row-sm">
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-top">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-bottom">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-start">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Left</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-end">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Right</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-label mb-2">
												Example
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row row-sm text-center">
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover top" >Click me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-success" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="left" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover left" >Click me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-danger" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover right" >Click me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-warning" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover bottom" >Click me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom-0">
											<div class="card-title">
												Colored Head Popover
											</div>
										</div>
										<div class="card-body">
											<div class="form-label  mb-2">
												Static Example
											</div>
											<div class="popover-static-demo mb-4 border br-3 pb-6">
												<div class="row row-sm">
													<div class="col-md-6">
														<div class="popover popover-head-primary bs-popover-top">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-5 mt-md-0">
														<div class="popover popover-head-secondary bs-popover-top">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-label mb-2">
												Example
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row row-sm text-center">
													<div class="col-md-6 mt-2 mb-2 text-center">
														<button class="btn btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-primary" title="Popover top" >Click me</button>
													</div>
													<div class="col-md-6 mt-2 mb-2text-center">
														<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="head-secondary" title="Popover bottom" >Click me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom-0">
											<div class="card-title">
												Full Colored Popover
											</div>
										</div>
										<div class="card-body">
											<div class="form-label  mb-2">
												Static Example
											</div>
											<div class="popover-static-demo mb-4 border br-3 pb-6">
												<div class="row row-sm">
													<div class="col-md-6 mt-4">
														<div class="popover popover-primary bs-popover-top">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover popover-secondary bs-popover-bottom">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-label mb-2">
												Example
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row row-sm text-center">
													<div class="col-md-6  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="primary" title="Popover top" >Click me</button>
													</div>
													<div class="col-md-6  mt-2 mb-2">
														<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="secondary" title="Popover bottom" >Click me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

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


		<!-- TOOLTIP AND POPOVER JS -->
        <script src="../assets/js/tooltip&popover.js"></script>
		
		<?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>