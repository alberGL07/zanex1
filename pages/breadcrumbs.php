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
									<h1 class="page-title">Breadcrumbs</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
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
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Simple Breadcrumbs</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i> Home</a></li>
													<li class="breadcrumb-item1"><a href="javascript:void(0);">About</a></li>
												</ol>
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i> Home</a></li>
													<li class="breadcrumb-item1 active">Library</li>
												</ol>
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
													<li class="breadcrumb-item1"><a href="javascript:void(0);">Library</a></li>
													<li class="breadcrumb-item1 active">Data</li>
												</ol>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Breadcrumbs-Right align</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="breadcrumb-1">
													<ol class="breadcrumb1">
														<li class="breadcrumb-item1"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
														<li class="breadcrumb-item1"><a href="javascript:void(0);">About</a></li>
													</ol>
												</div>
												<div class="breadcrumb-2">
													<ol class="breadcrumb1">
														<li class="breadcrumb-item1"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
														<li class="breadcrumb-item1 active">Library</li>
													</ol>
												</div>
												<div class="breadcrumb-6">
													<ol class="breadcrumb1 mb-0">
														<li class="breadcrumb-item1"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
														<li class="breadcrumb-item1"><a href="javascript:void(0);">Library</a></li>
														<li class="breadcrumb-item1 active">Data</li>
													</ol>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Simple Breadcrumbs Type 2</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<ol class="breadcrumb2">
													<li class="breadcrumb-item2"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
													<li class="breadcrumb-item2"><a href="javascript:void(0);">About</a></li>
												</ol>
												<ol class="breadcrumb1">
													<li class="breadcrumb-item2"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
													<li class="breadcrumb-item2 active">Library</li>
												</ol>
												<ol class="breadcrumb1">
													<li class="breadcrumb-item2"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
													<li class="breadcrumb-item2"><a href="javascript:void(0);">Library</a></li>
													<li class="breadcrumb-item2 active">Data</li>
												</ol>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Type 2 Breadcrumbs-Right align</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="breadcrumb-2">
													<ol class="breadcrumb2">
														<li class="breadcrumb-item2"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
														<li class="breadcrumb-item2"><a href="javascript:void(0);">About</a></li>
													</ol>
												</div>
												<div class="breadcrumb-2">
													<ol class="breadcrumb1">
														<li class="breadcrumb-item2"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
														<li class="breadcrumb-item2 active">Library</li>
													</ol>
												</div>
												<div class="breadcrumb-6">
													<ol class="breadcrumb1 mb-0">
														<li class="breadcrumb-item2"><a href="javascript:void(0);"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home</a></li>
														<li class="breadcrumb-item2"><a href="javascript:void(0);">Library</a></li>
														<li class="breadcrumb-item2 active">Data</li>
													</ol>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->
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

		<!-- CHART-CIRCLE JS-->
		<script src="../assets/js/circle-progress.min.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>