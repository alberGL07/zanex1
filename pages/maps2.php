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
									<h1 class="page-title">Maps</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Maps</li>
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
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header">
											<h4  class="card-title">Map with links between the plotted cities</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer4">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">Static MapelMaps</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title"> Map with a legend for areas</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer1">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
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

		
		<!-- INTERNAL Mapel Plugin -->
		<script src="../assets/plugins/mapel/raphael.min.js"></script>
		<script src="../assets/plugins/mapel/jquery.mapael.js"></script>
		<script src="../assets/plugins/mapel/maps/france_departments.js"></script>
		<script src="../assets/plugins/mapel/maps/world_countries.js"></script>
		<script src="../assets/plugins/mapel/maps/usa_states.js"></script>
		<script src="../assets/js/mapelmaps.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>
		

	</body>
</html>