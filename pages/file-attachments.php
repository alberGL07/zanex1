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
									<h1 class="page-title">File Attachments</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">File Attachments</li>
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
							<div class="row row-sm">
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Color Square File_Attachment</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-primary text-white"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
													<button type="button" class="btn btn-close btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary text-white"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
													<button type="button" class="btn btn-close btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-success text-white"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
													<button type="button" class="btn btn-close btn-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-warning text-white"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</button>
													<button type="button" class="btn btn-close btn-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-danger text-white"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
													<button type="button" class="btn btn-close btn-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-info text-white"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
													<button type="button" class="btn btn-close btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Color Rounded File_Attachment</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-primary text-white"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
													<button type="button" class="btn btn-pill btn-close btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-secondary text-white"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
													<button type="button" class="btn btn-pill btn-close btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-success text-white"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
													<button type="button" class="btn btn-pill btn-close btn-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-warning text-white"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</button>
													<button type="button" class="btn btn-pill btn-close btn-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-danger text-white"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
													<button type="button" class="btn btn-pill btn-close btn-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-info text-white"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
													<button type="button" class="btn btn-pill btn-close btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row row-sm">
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Outline Square File_Attachment</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-primary"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
													<button type="button" class="btn btn-close btn-outline-primary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
													<button type="button" class="btn btn-close btn-outline-secondary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-success"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
													<button type="button" class="btn btn-close btn-outline-success" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-warning"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</button>
													<button type="button" class="btn btn-close btn-outline-warning" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-danger"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
													<button type="button" class="btn btn-close btn-outline-danger" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-info"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
													<button type="button" class="btn btn-close btn-outline-info" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Outline Rounded File_Attachment</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-outline-primary"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
													<button type="button" class="btn btn-pill btn-close btn-outline-primary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-outline-secondary"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
													<button type="button" class="btn btn-pill btn-close btn-outline-secondary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-outline-success"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
													<button type="button" class="btn btn-pill btn-close btn-outline-success" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-outline-warning"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</button>
													<button type="button" class="btn btn-pill btn-close btn-outline-warning" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-outline-danger"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
													<button type="button" class="btn btn-pill btn-close btn-outline-danger" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-outline-info"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
													<button type="button" class="btn btn-pill btn-close btn-outline-info" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row row-sm">
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Transparent Square File_Attachment</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-primary-light"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
													<button type="button" class="btn btn-close btn-primary-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary-light"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
													<button type="button" class="btn btn-close btn-secondary-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-success-light"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
													<button type="button" class="btn btn-close btn-success-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-warning-light"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</button>
													<button type="button" class="btn btn-close btn-warning-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-danger-light"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
													<button type="button" class="btn btn-close btn-danger-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-info-light"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
													<button type="button" class="btn btn-close btn-info-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Transparent Rounded File_Attachment</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-primary-light btn-pill"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </button>
													<button type="button" class="btn btn-close btn-primary-light btn-pill" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary-light btn-pill"><i class="mdi mdi-file-word me-2"></i> Word_file.doc</button>
													<button type="button" class="btn btn-close btn-secondary-light btn-pill" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-success-light btn-pill"><i class="mdi mdi-file-excel me-2"></i> Excel_file.xls</button>
													<button type="button" class="btn btn-close btn-success-light btn-pill" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-warning-light btn-pill"><i class="mdi mdi-file-pdf me-2"></i> pdf_file.pdf</button>
													<button type="button" class="btn btn-close btn-warning-light btn-pill" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-danger-light btn-pill"><i class="mdi mdi-file-video me-2"></i> Video_file.mp4</button>
													<button type="button" class="btn btn-close btn-danger-light btn-pill" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-info-light btn-pill"><i class="mdi mdi-file-music me-2"></i> Audio_file.mp3</button>
													<button type="button" class="btn btn-close btn-info-light btn-pill" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row row-sm">
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Square File_Attachment with link</h3>
										</div>
										<div class="card-body p-4 p-sm-5">
											<p>Square File_Attachment with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-primary text-white"><i class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-close btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-success"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </a>
													<a  href="javascript:void(0);" class="btn btn-close btn-outline-success" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-secondary-light"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </a>
													<a  href="javascript:void(0);" class="btn btn-close btn-secondary-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded File_Attachment with link</h3>
										</div>
										<div class="card-body p-4 p-sm-5">
											<p>Rounded File_Attachment with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-pill btn-danger text-white"><i class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
													<a class="btn btn-pill btn-close btn-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-pill btn-outline-warning"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </a>
													<a class="btn btn-pill btn-close btn-outline-warning" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-pill btn-success-light"><i class="mdi mdi-file-image me-2"></i> Image_file.jpg </a>
													<a class="btn btn-pill btn-close btn-success-light" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-4 CLOSED -->

							<!-- ROW-5 OPEN -->
							<div class="row row-sm">
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Square File Attachment Sizes</h3>
										</div>
										<div class="card-body p-4 p-sm-5">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-sm btn-primary text-white"><i class="mdi mdi-file-image mx-2"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-close btn-sm btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary"><i class="mdi mdi-file-excel me-2"></i>Document.exl</button>
													<button type="button" class="btn btn-close btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-lg btn-pink"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-close btn-lg btn-pink" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded File Attachment Sizes</h3>
										</div>
										<div class="card-body p-4 p-sm-5">
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-sm btn-primary text-white"><i class="mdi mdi-file-image me-2"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-pill btn-close btn-sm btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-secondary"><i class="mdi mdi-file-excel me-2"></i>Document.exl</button>
													<button type="button" class="btn btn-pill btn-close btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill btn-lg btn-pink"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-pill btn-close btn-lg btn-pink" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-5 CLOSED -->

							<!-- ROW-6 OPEN -->
							<div class="row row-sm">
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Square File Attachment Sizes with link</h3>
										</div>
										<div class="card-body p-4 p-sm-5">
											<p>Square File_Attachment Sizes with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-sm btn-primary text-white"><i class="mdi mdi-file-image me-2"></i>Image01..._jpg</a>
													<a class="btn btn-close btn-sm btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-secondary text-white"><i class="mdi mdi-file-excel me-2"></i>Document.exl</a>
													<a class="btn btn-close btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-lg btn-pink"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</a>
													<a class="btn btn-close btn-lg btn-pink" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded File Attachment Sizes with link</h3>
										</div>
										<div class="card-body p-4 p-sm-5">
											<p>Riunded File_Attachment Sizes with <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
											<div class="tags">
												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-pill btn-sm btn-primary text-white"><i class="mdi mdi-file-image me-2"></i>Image01..._jpg</a>
													<a class="btn btn-pill btn-close btn-sm btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-pill btn-secondary text-white"><i class="mdi mdi-file-excel me-2"></i>Document.exl</a>
													<a class="btn btn-pill btn-close btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group file-attach m-2" role="group" aria-label="Basic example">
													<a class="btn btn-pill btn-lg btn-pink"><i class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</a>
													<a class="btn btn-pill btn-close btn-lg btn-pink" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-6 CLOSED -->

							<!-- ROW-7 OPEN -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Image File_Attachment</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="">
													<div class="row">
														<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
															<div class="file-image p-2">
																<div class="product-image">
																	<a href="filemanager-details.php">
																		<img src="../assets/images/pngs/4.png" alt="" class="w-100">
																	</a>
																	<ul class="icons">
																		<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																		<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
																		<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
																	</ul>
																	<a href=""><span class="file-name">Image01.jpg</span></a>
																</div>
															</div>
														</div>
														<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
															<div class="file-image p-2">
																<div class="product-image">
																	<a href="filemanager-details.php">
																		<img src="../assets/images/pngs/3.png" alt="" class="w-100">
																	</a>
																	<ul class="icons">
																		<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																		<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
																		<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
																	</ul>
																	<a href=""><span class="file-name">Image02.jpg</span></a>
																</div>
															</div>
														</div>
														<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
															<div class="file-image p-2">
																<div class="product-image">
																	<a href="filemanager-details.php">
																		<img src="../assets/images/pngs/9.png" alt="" class="w-100">
																	</a>
																	<ul class="icons">
																		<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																		<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
																		<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
																	</ul>
																	<a href=""><span class="file-name">Image03.jpg</span></a>
																</div>
															</div>
														</div>
														<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
															<div class="file-image p-2">
																<div class="product-image">
																	<a href="filemanager-details.php">
																		<img src="../assets/images/pngs/6.png" alt="" class="w-100">
																	</a>
																	<ul class="icons">
																		<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																		<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
																		<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
																	</ul>
																	<a href=""><span class="file-name">Image04</span></a>
																</div>
															</div>
														</div>
														<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
															<div class="file-image p-2">
																<div class="product-image">
																	<a href="filemanager-details.php">
																		<img src="../assets/images/pngs/1.png" alt="" class="w-100">
																	</a>
																	<ul class="icons">
																		<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																		<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
																		<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
																	</ul>
																	<a href=""><span class="file-name">Image05.jpg</span></a>
																</div>
															</div>
														</div>
														<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
															<div class="file-image p-2">
																<div class="product-image">
																	<a href="filemanager-details.php">
																		<img src="../assets/images/pngs/10.png" alt="" class="w-100">
																	</a>
																	<ul class="icons">
																		<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
																		<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
																		<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
																	</ul>
																	<a href=""><span class="file-name">Image06.jpg</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-7 CLOSED -->

							<!-- ROW-8 OPEN -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Image File_Attachment Small Size</h3>
										</div>
										<div class="card-body pb-3">
											<div class="text-wrap">
												<div class="file-image-1">
													<div class="product-image">
														<a href="filemanager-details.php">
															<img src="../assets/images/pngs/file-image.png" class="br-5" alt="">
														</a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Image01.jpg</span>
													</div>
												</div>
												<div class="file-image-1">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/doc.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Word.doc</span>
													</div>
												</div>
												<div class="file-image-1">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/file2.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Excel.xls</span>
													</div>
												</div>
												<div class="file-image-1">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/file.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Document.pdf</span>
													</div>
												</div>
												<div class="file-image-1">
													<div class="product-image">
														<a href="filemanager-details.php">
															<img src="../assets/images/media/files/imgformat.png" class="br-5" alt="">
														</a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Image02.jpg</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-8 CLOSED -->

							<!-- ROW-9 OPEN -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Image File_Attachment Medium Size</h3>
										</div>
										<div class="card-body pb-3">
											<div class="text-wrap">
												<div class="file-image-1 file-image-md">
													<div class="product-image">
														<a href="filemanager-details.php">
															<img src="../assets/images/pngs/file-image.png" class="br-5" alt="">
														</a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Image01.jpg</span>
													</div>
												</div>
												<div class="file-image-1 file-image-md">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/doc.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Word.doc</span>
													</div>
												</div>
												<div class="file-image-1 file-image-md">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/file2.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Excel.xls</span>
													</div>
												</div>
												<div class="file-image-1 file-image-md">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/file.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Document.pdf</span>
													</div>
												</div>
												<div class="file-image-1 file-image-md">
													<div class="product-image">
														<a href="filemanager-details.php">
															<img src="../assets/images/media/files/imgformat.png" class="br-5" alt="">
														</a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Image02.jpg</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-9 CLOSED -->

							<!-- ROW-10 OPEN -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Image File_Attachment Large Size</h3>
										</div>
										<div class="card-body pb-3">
											<div class="text-wrap">
												<div class="file-image-1 file-image-lg">
													<div class="product-image">
														<a href="filemanager-details.php">
															<img src="../assets/images/pngs/file-image.png" class="br-5" alt="">
														</a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Image01.jpg</span>
													</div>
												</div>
												<div class="file-image-1 file-image-lg">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/doc.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Word.doc</span>
													</div>
												</div>
												<div class="file-image-1 file-image-lg">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/file2.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Excel.xls</span>
													</div>
												</div>
												<div class="file-image-1 file-image-lg">
													<div class="product-image">
														<a href="filemanager-details.php"><img src="../assets/images/media/files/file.png" alt=""></a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Document.pdf</span>
													</div>
												</div>
												<div class="file-image-1 file-image-lg">
													<div class="product-image">
														<a href="filemanager-details.php">
															<img src="../assets/images/media/files/imgformat.png" class="br-5" alt="">
														</a>
														<ul class="icons">
															<li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-trash"></i></a></li>
															<li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
															<li><a href="filemanager-details.php" class="btn btn-primary"><i class="fe fe-eye"></i></a></li>
														</ul>
														<span class="file-name-1">Image02.jpg</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-10 CLOSED -->
						</div>
						<!-- CONTAINER CLOSED -->
					</div>
				</div>
				<!-- APP-CONTENT OPEN -->
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