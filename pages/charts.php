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
									<h1 class="page-title">C3 Bar Charts</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">C3 Bar Charts</li>
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
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">combination of bar & line chart</h3>
										</div>
										<div class="card-body">
											<div id="chart-combination" class="chartsh"></div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Single Bar chart </h3>
										</div>
										<div class="card-body">
											<div id="chart-monthly" class="chartsh"></div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Bar Chart</h3>
										</div>
										<div class="card-body">
											<div id="chart-bar-stacked" class="chartsh"></div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Multiple Bar chart</h3>
										</div>
										<div class="card-body">
											<div id="chart-bar" class="chartsh"></div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Horizontal Bar chart</h3>
										</div>
										<div class="card-body">
											<div id="chart-bar-rotated" class="chartsh"></div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Area-spline filled chart</h3>
										</div>
										<div class="card-body">
											<div id="chart-tasks" class="chartsh"></div>
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


		<!-- SPARKLINE JS-->
		<script src="../assets/js/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE JS -->
		<script src="../assets/js/circle-progress.min.js"></script>

		<!-- C3 CHART JS -->
		<script src="../assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="../assets/plugins/charts-c3/c3-chart.js"></script>

		<!-- INPUT MASK JS-->
		<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!-- INDEX JS -->
		<script src="../assets/js/charts.js"></script>
		<script src="../assets/js/index.js"></script>

		<!-- SIDEBAR JS -->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>