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
									<h1 class="page-title">Badges</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Badges</li>
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
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<span class="badge bg-default me-1 mb-1 mt-1">Default</span>
												<span class="badge bg-primary  me-1 mb-1 mt-1">Primary</span>
												<span class="badge bg-success  me-1 mb-1 mt-1">Success</span>
												<span class="badge bg-danger  me-1 mb-1 mt-1">Danger</span>
												<span class="badge bg-info  me-1 mb-1 mt-1">Info</span>
												<span class="badge bg-warning  me-1 mb-1 mt-1">Warning</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Gradient Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<span class="badge bg-default me-1 mb-1 mt-1">Default</span>
												<span class="badge bg-primary-gradient  me-1 mb-1 mt-1">Primary</span>
												<span class="badge bg-success-gradient  me-1 mb-1 mt-1">Success</span>
												<span class="badge bg-danger-gradient  me-1 mb-1 mt-1">Danger</span>
												<span class="badge bg-info-gradient  me-1 mb-1 mt-1">Info</span>
												<span class="badge bg-warning-gradient  me-1 mb-1 mt-1">Warning</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Pill Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<span class="badge rounded-pill bg-default me-1 mb-1 mt-1">Default</span>
												<span class="badge rounded-pill bg-primary me-1 mb-1 mt-1">Primary</span>
												<span class="badge rounded-pill bg-success me-1 mb-1 mt-1">Success</span>
												<span class="badge rounded-pill bg-danger me-1 mb-1 mt-1">Danger</span>
												<span class="badge rounded-pill bg-info me-1 mb-1 mt-1">Info</span>
												<span class="badge rounded-pill bg-warning me-1 mb-1 mt-1">Warning</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Gradient Pill Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<span class="badge rounded-pill bg-default me-1 mb-1 mt-1">Default</span>
												<span class="badge rounded-pill bg-primary-gradient me-1 mb-1 mt-1">Primary</span>
												<span class="badge rounded-pill bg-success-gradient me-1 mb-1 mt-1">Success</span>
												<span class="badge rounded-pill bg-danger-gradient me-1 mb-1 mt-1">Danger</span>
												<span class="badge rounded-pill bg-info-gradient me-1 mb-1 mt-1">Info</span>
												<span class="badge rounded-pill bg-warning-gradient me-1 mb-1 mt-1">Warning</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Buttons with square Badges</h3>
										</div>
										<div class="card-body ">
											<div class="example">
												<button type="button" class="btn btn-primary mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-white">2</span>
												</button>
												<button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white">1</span>
												</button>
												<button type="button" class="btn btn-success  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white">5</span>
												</button>
												<button type="button" class="btn btn-info  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white">3</span>
												</button>
												<button type="button" class="btn btn-warning mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white">6</span>
												</button>
												<button type="button" class="btn btn-danger  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white">4</span>
												</button>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Border buttons with square Badges</h3>
										</div>
										<div class="card-body ">
											<div class="example">
												<button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-primary">2</span>
												</button>
												<button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-success">65</span>
												</button>
												<button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-secondary">1</span>
												</button>
												<button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-info  ">5333</span>
												</button>

											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Buttons with rounded Badges</h3>
										</div>
										<div class="card-body ">
											<div class="example">
												<button type="button" class="btn btn-info  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white rounded-pill">3</span>
												</button>
												<button type="button" class="btn btn-primary mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-white rounded-pill">22</span>
												</button>
												<button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white rounded-pill">145</span>
												</button>
												<button type="button" class="btn btn-success  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-white rounded-pill">3225</span>
												</button>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROw-4 CLOSED -->

							<!-- ROW-5 OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header">
											<h3 class="card-title">Border buttons with rounded Badges</h3>
										</div>
										<div class="card-body ">
											<div class="example">
												<button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-primary rounded-pill">2</span>
												</button>
												<button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-success rounded-pill">65</span>
												</button>
												<button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-secondary rounded-pill">43</span>
												</button>
												<button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-info rounded-pill">563</span>
												</button>

											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-5 CLOSED -->

							<!-- ROW-6 OPEN -->
							<div class="row">
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Simple Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<h1>Heading 01 <span class="badge bg-default">New</span></h1>
												<h2>Heading 02 <span class="badge bg-default">New</span></h2>
												<h3>Heading 03 <span class="badge bg-default">New</span></h3>
												<h4>Heading 04 <span class="badge bg-default">New</span></h4>
												<h5>Heading 05 <span class="badge bg-default">New</span></h5>
												<h6>Heading 06 <span class="badge bg-default">New</span></h6>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Colored Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<h1 class="text-primary">Heading 01 <span class="badge bg-primary">New</span></h1>
												<h2  class="text-red">Heading 02 <span class="badge bg-danger">New</span></h2>
												<h3  class="text-yellow">Heading 03 <span class="badge bg-warning">New</span></h3>
												<h4  class="text-green">Heading 04 <span class="badge bg-success">New</span></h4>
												<h5  class="text-info">Heading 05 <span class="badge bg-info">New</span></h5>
												<h6  class="text-secondary">Heading 06 <span class="badge bg-secondary">New</span></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-6 CLOSED -->

							<!-- ROW-7 OPEN -->
							<div class="row">
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Contextual variations</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<span class="badge bg-default mt-2">Default</span>
												<span class="badge bg-primary mt-2">Primary</span>
												<span class="badge bg-success mt-2">Success</span>
												<span class="badge bg-info mt-2">Info</span>
												<span class="badge bg-warning mt-2">Warning</span>
												<span class="badge bg-danger mt-2">Danger</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Pill Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<span class="badge rounded-pill bg-default mt-2">Default</span>
												<span class="badge rounded-pill bg-primary mt-2">Primary</span>
												<span class="badge rounded-pill bg-success mt-2">Success</span>
												<span class="badge rounded-pill bg-info mt-2">Info</span>
												<span class="badge rounded-pill bg-warning mt-2">Warning</span>
												<span class="badge rounded-pill bg-danger mt-2">Danger</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-7 CLOSED -->
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