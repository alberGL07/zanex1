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
									<h1 class="page-title">Email Compose</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">Email Compose</li>
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
							<div class="row">
								<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
									<div class="card">
										<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
											<div class="mt-4 mb-4 mx-4 text-center">
												<a href="email.php" class="btn btn-primary btn-lg d-grid">Inbox</a>
											</div>
											<a href="javascript:void(0);" class="list-group-item d-flex align-items-center active mx-4">
												<span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ms-auto badge bg-success">14</span>
											</a>
											<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
												<span class="icons"><i class="ri-mail-open-line"></i></span> Drafts
											</a>
											<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
												<span class="icons"><i class="ri-star-line"></i></span> Starred <span class="ms-auto badge bg-danger">03</span>
											</a>
											<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
												<span class="icons"><i class="ri-mail-send-line"></i></span> Sent Mail
											</a>
											<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
												<span class="icons"><i class="ri-price-tag-3-line"></i></span> Tags
											</a>
											<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
												<span class="icons"><i class="ri-delete-bin-line"></i></span> Trash
											</a>
										</div>
										<div class="card-body border-top">
											<div class="list-group list-group-transparent mb-0 mail-inbox mx-4">
												<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
													<span class="w-3 h-3 brround bg-primary me-2"></span> Friends
												</a>
												<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
													<span class="w-3 h-3 brround bg-secondary me-2"></span> Family
												</a>
												<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
													<span class="w-3 h-3 brround bg-success me-2"></span> Social
												</a>
												<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
													<span class="w-3 h-3 brround bg-info me-2"></span> Office
												</a>
												<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
													<span class="w-3 h-3 brround bg-warning me-2"></span> Work
												</a>
												<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
													<span class="w-3 h-3 brround bg-danger me-2"></span> Settings
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Compose new message</h3>
										</div>
										<div class="card-body">
											<form >
												<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3 col-xl-2 form-label">To</label>
														<div class="col-sm-9 col-xl-10">
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3 col-xl-2 form-label">Subject</label>
														<div class="col-sm-9 col-xl-10">
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row ">
														<label class="col-sm-3 col-xl-2 form-label">Message</label>
														<div class="col-sm-9 col-xl-10">
															<textarea rows="10" class="form-control"></textarea>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="card-footer d-sm-flex">
											<div class="">
												<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg fs-15 my-1 me-1" data-bs-toggle="tooltip" title="" data-bs-original-title="Attach"><span class="ri-attachment-2 "></span></a>
												<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg fs-15 my-1 me-1" data-bs-toggle="tooltip" title="" data-bs-original-title="Link"><span class="ri-link"></span></a>
												<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg fs-15 my-1 me-1" data-bs-toggle="tooltip" title="" data-bs-original-title="Photos"><span class="ri-image-line"></span></a>
												<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg fs-15 my-1 me-1" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete"><span class="ri-delete-bin-line"></span></a>
											</div>
											<div class="btn-list ms-auto my-1">
												<button  class="btn btn-danger btn-space">Cancel</button>
												<button  class="btn btn-primary btn-space">Send message</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW CLOSED -->
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