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
									<h1 class="page-title">File Manager List</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">File Manager List</li>
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

							<!-- ROW OPEN -->
							<div class="row row-sm">
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/pdf.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">file.pdf</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">32 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php"><img src="../assets/images/media/files/07.jpg" alt="img" class="w-100 file-manager-list" ></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">image1.jpg</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">76 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/excel.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">excel.xls</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">34 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php"><img src="../assets/images/media/files/02.jpg" alt="img" class="w-100 file-manager-list"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">image2.jpg</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">66 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/ppt1.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">demo.ppt</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">67 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/video.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">video.mp4</h5>
												</div>
												<div class="ms-auto my-auto mt-3">
													<span class="text-muted mb-0">320 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php"><img src="../assets/images/media/files/04.jpg" alt="img" class="w-100 file-manager-list"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">image2.jpg</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">66 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/word.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">word.doc</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">320 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php"><img src="../assets/images/media/files/01.jpg" alt="img" class="w-100 file-manager-list"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">mountain.jpg</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">320 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/pdf.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">file.pdf</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">32 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php"><img src="../assets/images/media/files/06.jpg" alt="img" class="w-100 file-manager-list"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="d-flex">
													<h5 class="mb-0 fw-semibold text-break">image3.jpg</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">76 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/excel.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">excel.xls</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">34 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/ppt1.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">profile.ppt</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">67 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php"><img src="../assets/images/media/files/05.jpg" alt="img" class="w-100 file-manager-list"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">image4.jpg</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">66 KB</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
									<div class="card overflow-hidden">
										<a href="filemanager-details.php" class="mx-auto my-3"><img src="../assets/images/media/files/zip1.png" alt="img"></a>
										<div class="card-footer">
											<div class="d-flex">
												<div class="">
													<h5 class="mb-0 fw-semibold text-break">exe.zip</h5>
												</div>
												<div class="ms-auto my-auto">
													<span class="text-muted mb-0">320 KB</span>
												</div>
											</div>
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


        <?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>