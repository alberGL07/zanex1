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
									<h1 class="page-title">File Manager Details</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">File Manager Details</li>
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
                                <div class="col-xl-8 col-lg-12 col-md-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0)"><img src="../assets/images/media/files/img3.jpg" alt="img" class="br-5 w-100"></a>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom-0">
                                            Related Files
                                        </div>
                                        <div class="card-body pt-0 h-100">
                                            <div class="owl-carousel owl-carousel-icons2">
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="filemanager-details.php"><img src="../assets/images/media/files/03.jpg" alt="img" height="124" class="w-100"></a>
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
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
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
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="filemanager-details.php"><img src="../assets/images/media/files/07.jpg" alt="img" height="124" class="w-100"></a>
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
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
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
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="filemanager-details.php"><img src="../assets/images/media/files/06.jpg" alt="img" height="124" class="w-100"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div class="">
                                                                    <h5 class="mb-0 fw-semibold text-break">nature.jpg</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">66 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
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
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="filemanager-details.php"><img src="../assets/images/media/files/02.jpg" alt="img" height="124" class="w-100"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-0 fw-semibold text-break">image1.jpg</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">76 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <h5 class="mb-3">File details</h5>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0 table-bordered text-nowrap border-bottom">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>File Name</th>
                                                                        <td>image.jpg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Uploaded</th>
                                                                        <td>10-10-2021</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Size</th>
                                                                        <td>25 MB</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Dimensions</th>
                                                                        <td>1000 x 350</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Resolution Unit</th>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>File Type</th>
                                                                        <td>jpg</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="mt-5 text-center">
                                                            <button type="button" class="btn btn-icon  btn-info-light me-2 bradius"><i class="fe fe-edit"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-danger-light me-2 bradius"><i class="fe fe-trash"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-success-light me-2 bradius"><i class="fe fe-download fs-14"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-warning-light bradius"><i class="fe fe-share-2 fs-14"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-body pb-0">
                                            <h5 class="mb-3">Recent Files</h5>

                                            <ul id="lightgallery" class="list-unstyled row">
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/files/01.jpg" data-src="../assets/images/media/files/01.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5" src="../assets/images/media/files/01.jpg" alt="Thumb-1">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/files/02.jpg" data-src="../assets/images/media/files/02.jpg" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5" src="../assets/images/media/files/02.jpg" alt="Thumb-2">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/files/03.jpg" data-src="../assets/images/media/files/03.jpg" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5" src="../assets/images/media/files/03.jpg" alt="Thumb-1">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/files/04.jpg" data-src="../assets/images/media/files/04.jpg" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5" src="../assets/images/media/files/04.jpg" alt="Thumb-2">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/files/05.jpg" data-src="../assets/images/media/files/05.jpg" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5" src="../assets/images/media/files/05.jpg" alt="Thumb-1">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/files/06.jpg" data-src="../assets/images/media/files/06.jpg" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5" src="../assets/images/media/files/06.jpg" alt="Thumb-2">
                                                    </a>
                                                </li>
                                            </ul>
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


		<!-- OWL CAROUSEL JS-->
		<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>
		<script src="../assets/js/owl-carousel.js"></script>

        <!-- GALLERY JS -->
        <script src="../assets/plugins/gallery/picturefill.js"></script>
        <script src="../assets/plugins/gallery/lightgallery.js"></script>
        <script src="../assets/plugins/gallery/lightgallery-1.js"></script>
        <script src="../assets/plugins/gallery/lg-pager.js"></script>
        <script src="../assets/plugins/gallery/lg-autoplay.js"></script>
        <script src="../assets/plugins/gallery/lg-fullscreen.js"></script>
        <script src="../assets/plugins/gallery/lg-zoom.js"></script>
        <script src="../assets/plugins/gallery/lg-hash.js"></script>
        <script src="../assets/plugins/gallery/lg-share.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>