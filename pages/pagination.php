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
									<h1 class="page-title">Pagination</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Pagination</li>
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

							<!-- ROW-1 OPEN -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Basic pagination</h3>
										</div>
										<div class="card-body">
											<div class="pagination-wrapper">
												<nav aria-label="Page navigation">
													<ul class="pagination mb-0">
														<li class="page-item active">
															<a class="page-link" href="javascript:void(0);">1</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="javascript:void(0);">2</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="javascript:void(0);">3</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="javascript:void(0);">4</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="javascript:void(0);">5</a>
														</li>
														<li class="page-item">
															<a aria-label="Next" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
														</li>
													</ul>
												</nav>
											</div>
											<!-- pagination-wrapper -->
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Basic pagination</h3>
										</div>
										<div class="card-body">
											<ul class="pagination ">
												<li class="page-item page-prev disabled">
													<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
												</li>
												<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
												<li class="page-item page-next">
													<a class="page-link" href="javascript:void(0);">Next</a>
												</li>
											</ul>
											<!-- pagination-wrapper -->
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Model Pagination</h3>
										</div>
										<div class="card-body ">
											<ul class="pagination mg-b-0 page-0 ">
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Next" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
												</li>

												<li class="page-item">
													<a class="page-link" href="javascript:void(0);">2</a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="javascript:void(0);">3</a>
												</li>
												<li class="page-item">
													<a class="page-link hidden-xs-down" href="javascript:void(0);">4</a>
												</li>

												<li class="page-item">
													<a aria-label="Next" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</div>
										<!-- pagination-wrapper -->
									</div>
									<!-- section-wrapper -->
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Model Pagination2</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation">
												<ul class="pagination pagination-success mb-0">
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a>
													</li>
													<li class="page-item active">
														<a class="page-link" href="javascript:void(0);">4</a>
													</li>
													<li class="page-item disabled"><span class="page-link">...</span></li>
													<li class="page-item">
														<a class="page-link" href="javascript:void(0);">10</a>
													</li>
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a>
													</li>
												</ul>
											</nav>
											<!-- pagination-wrapper -->
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Model Pagination2</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation example">
												<ul class="pagination">
													<li class="page-item">
														<a class="page-link" href="javascript:void(0);" aria-label="Previous">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item">
														<a class="page-link" href="javascript:void(0);" aria-label="Next">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Pagination left alignment</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation example">
												<ul class="pagination ">
													<li class="page-item disabled">
														<a class="page-link" href="javascript:void(0);" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item">
														<a class="page-link" href="javascript:void(0);">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Pagination center alignment</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-center">
													<li class="page-item disabled">
														<a class="page-link" href="javascript:void(0);" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item">
														<a class="page-link" href="javascript:void(0);">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Pagination Right Alignment</h3>
										</div>
										<div class="card-body ">
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-end">
													<li class="page-item disabled">
														<a class="page-link" href="javascript:void(0);" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item">
														<a class="page-link" href="javascript:void(0);">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->
						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
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