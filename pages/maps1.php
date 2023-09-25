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
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card mg-b-20" id="map">
										<div class="card-header">
											<div class="card-title">Basic</div>
										</div>
										<div class="card-body">
											<div class="ht-300" id="leaflet1" style="height:300px"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card mg-b-20" id="map2">
										<div class="card-header">
											<div class="card-title">With Popup</div>
										</div>
										<div class="card-body">
											<div class="ht-300" id="leaflet2" style="height:300px"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card" id="map1">
										<div class="card-header">
											<div class="card-title">Map With Circle</div>
										</div>
										<div class="card-body">
											<div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px"></div>
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


		<!-- INTERNAL LEAFLET JS -->
		<script src="../assets/plugins/leaflet/leaflet.js"></script>
		<script src="../assets/js/map-leafleft.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>