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
									<h1 class="page-title">Avatar-Radius</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Avatar-Radius</li>
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
							<div class="row ">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Simple avatar</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="avatar-list">
														<span class="avatar bradius cover-image" data-bs-image-src="../assets/images/users/1.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/2.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/1.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/2.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/3.jpg"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Avatar size</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="avatar-list">
														<span class="avatar avatar-sm bradius cover-image" data-bs-image-src= "../assets/images/users/4.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/3.jpg"></span>
														<span class="avatar avatar-md bradius cover-image" data-bs-image-src= "../assets/images/users/5.jpg"></span>
														<span class="avatar avatar-lg bradius cover-image" data-bs-image-src= "../assets/images/users/6.jpg"></span>
														<span class="avatar avatar-xl bradius cover-image" data-bs-image-src= "../assets/images/users/4.jpg"></span>
														<span class="avatar avatar-xxl bradius cover-image" data-bs-image-src= "../assets/images/users/7.jpg"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row ">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Avatar status</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="avatar-list">
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/8.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/5.jpg">
															<span class="avatar-status bg-secondary"></span>
														</span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/9.jpg">
															<span class="avatar-status bg-red"></span>
														</span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/6.jpg">
															<span class="avatar-status bg-green"></span>
														</span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/7.jpg">
															<span class="avatar-status bg-yellow"></span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Avatars list</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap ">
												<div class="example">
													<div class="avatar-list avatar-list-stacked">
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/8.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/8.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/9.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/8.jpg"></span>
														<span class="avatar bradius cover-image" data-bs-image-src= "../assets/images/users/11.jpg"></span>
														<span class="avatar bradius bg-primary">+8</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div><!-- COL END -->
							<!-- ROW-2 CLOSED -->
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