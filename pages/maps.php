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
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">World Map</h3>
										</div>
										<div class="card-body">
											<div id="world-map-markers" class="worldh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
							</div>
							<!-- END ROW -->

							<!-- ROW  -->
							<div class="row">
								<div class="col-lg-6">
									<div class="card m-b-20">
										<div class="card-header">
											<h3 class="card-title">Asia Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap2" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card m-b-20">
										<div class="card-header">
											<h3 class="card-title">Australia Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap3" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Canada Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap4" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
								<div class="col-lg-6">
									<div class="card m-b-20">
										<div class="card-header">
											<h3 class="card-title">Germany Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap5" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card m-b-20">
										<div class="card-header">
											<h3 class="card-title">Europe Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap6" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">India Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap7" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
								<div class="col-lg-6">
									<div class="card m-b-20">
										<div class="card-header">
											<h3 class="card-title">UK Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap8" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">USA Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap9" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
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


		<!-- INTERNAL Vector js -->
		<script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../assets/plugins/jvectormap/gdp-data.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
		<script src="../assets/js/jvectormap.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>