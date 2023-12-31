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
									<h1 class="page-title">Progress</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Progress</li>
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
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Basic Progress</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary w-10"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary w-20"></div>
												</div>
												<div class="progress progress-md mb-3 ">
													<div class="progress-bar bg-primary w-40"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary  w-60" ></div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar bg-primary  w-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Contextual Progress</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-pink w-10"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-success w-20"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-yellow w-40"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary w-60"></div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar bg-secondary w-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Basic Progress with label</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-default w-10">10%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-secondary w-20"> 20%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-success w-40"> 40%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-warning  w-60"> 60%</div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar bg-info w-80"> 80%</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Contextual Progress with label</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-pink w-10"> 7%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-success w-20">20%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-yellow w-40" >40%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary w-60">60%</div>
												</div>
												<div class="progress progress-md ">
													<div class="progress-bar bg-secondary w-80"> 80%</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 OPEN -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Progress Sizes</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-xs mb-3">
													<div class="progress-bar bg-primary w-30"></div>
												</div>
												<div class="progress progress-sm mb-3">
													<div class="progress-bar bg-primary w-60"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary w-70"></div>
												</div>
												<div class="progress progress-lg">
													<div class="progress-bar bg-primary w-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Mixed color Progress with Sizes</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-xs mb-3">
													<div class="progress-bar bg-secondary w-5"></div>
													<div class="progress-bar bg-warning w-5"></div>
													<div class="progress-bar bg-info w-5"></div>
												</div>
												<div class="progress progress-sm mb-3">
													<div class="progress-bar bg-pink w-10"></div>
													<div class="progress-bar bg-yellow w-15"></div>
													<div class="progress-bar bg-teal w-15"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-pink w-15"></div>
													<div class="progress-bar bg-primary w-20"></div>
													<div class="progress-bar bg-cyan w-30"></div>
												</div>

												<div class="progress progress-lg">
													<div class="progress-bar bg-success w-30"></div>
													<div class="progress-bar bg-pink w-20"></div>
													<div class="progress-bar bg-secondary w-40"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Striped Progress</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary-1 w-10"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary-1 w-20"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success-1 w-40">50%</div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-info-1 w-60">40%</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Animated Progress</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-indeterminate bg-primary-1" ></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-indeterminate bg-secondary-1"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-indeterminate bg-success-1"></div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-indeterminate bg-info-1"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-3 CLOSED -->
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