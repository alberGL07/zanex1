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
									<h1 class="page-title">ChartJs</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">ChartJS</li>
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
											<h3 class="card-title">Line Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartLine" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Bar Chart1</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartBar1" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Bar Chart2</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartBar2" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Area Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartArea1" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Donut  Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartPie" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Pie Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartDonut" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Radar  Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartRadar" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Polar Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartPolar" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSE -->
						</div>
						<!-- CONTAINER CLOSE -->
					</div>
				</div>
				<!-- APP-CONTENT CLOSE -->
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

		<!-- CHART-CIRCLE JS-->
		<script src="../assets/js/circle-progress.min.js"></script>

		<!-- INPUT MASK JS-->
		<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!-- CHARTJS JS -->
		<script src="../assets/plugins/chart/Chart.bundle.js"></script>
		<script src="../assets/js/chart.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>
		

	</body>
</html>