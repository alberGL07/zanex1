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
									<h1 class="page-title">Mail-Inbox</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">Mail-Inbox</li>
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
								<div class="col-md-12 col-lg-4 col-xl-3">
									<div class="card">
										<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
											<div class="mt-4 mb-4 mx-4 text-center">
												<a href="emailservices.php" class="btn btn-primary btn-lg d-grid">Compose</a>
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
								<div class="col-md-12 col-lg-8 col-xl-9">
									<div class="card">
										<div class="card-body p-6">
											<div class="inbox-body">
												<div class="mail-option">
													<div class="chk-all">
														<div class="btn-group">
															<a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini all" aria-expanded="false">
																All
																<i class="fa fa-angle-down "></i>
															</a>
															<ul class="dropdown-menu">
																<li><a href="javascript:void(0);"> None</a></li>
																<li><a href="javascript:void(0);"> Read</a></li>
																<li><a href="javascript:void(0);"> Unread</a></li>
															</ul>
														</div>
													</div>
													<div class="btn-group">
														<a  href="javascript:void(0);" class="btn mini tooltips">
															<i class=" fa fa-refresh"></i>
														</a>
													</div>
													<div class="btn-group hidden-phone">
														<a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini blue" aria-expanded="false">
															More
															<i class="fa fa-angle-down "></i>
														</a>
														<ul class="dropdown-menu">
															<li><a href="javascript:void(0);"><i class="fa fa-pencil me-2"></i> Mark as Read</a></li>
															<li><a href="javascript:void(0);"><i class="fa fa-ban me-2"></i> Spam</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);"><i class="fa fa-trash-o me-2"></i> Delete</a></li>
														</ul>
													</div>
													<ul class="unstyled inbox-pagination">
														<li><span>1-50 of 234</span></li>

														<li>
															<a class="np-btn" href="javascript:void(0);"><i class="fa fa-angle-right pagination-right"></i></a>
														</li>
													</ul>
												</div>
												<div class="table-responsive">
													<table class="table table-inbox table-hover text-nowrap mb-0">
														<tbody>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Tim Reid, S P N</td>
																<td class="view-message">Boost Your Website Traffic</td>
																<td class="view-message text-end fw-semibold">April 01</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Freelancer.com </td>
																<td class="view-message">Stop wasting your visitors </td>
																<td class="view-message text-end fw-semibold">May 23</td>
															</tr>
															<tr class="unread">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message  dont-show">PHPClass</td>
																<td class="view-message ">Added a new class: Login Class Fast Site</td>
																<td class="view-message  text-end">9:27 AM</td>
															</tr>

															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Facebook</td>
																<td class="view-message view-message">Somebody requested a new password </td>
																<td class="view-message text-end fw-semibold">June 13</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Skype</td>
																<td class="view-message view-message">Password successfully changed</td>
																<td class="view-message text-end fw-semibold">March 24</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Google+</td>
																<td class="view-message">alireza, do you know</td>
																<td class="view-message text-end fw-semibold">March 09</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">WOW Slider </td>
																<td class="view-message">New WOW Slider v7.8 - 67% off</td>
																<td class="view-message text-end fw-semibold">March 14</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">LinkedIn Pulse</td>
																<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
																<td class="view-message text-end fw-semibold">Feb 19</td>
															</tr>
															<tr class="unread">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Google Webmaster </td>
																<td class="view-message">Improve the search presence of WebSite</td>
																<td class="view-message text-end fw-semibold">March 15</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">JW Player</td>
																<td class="view-message">Last Chance: Upgrade to Pro for </td>
																<td class="view-message text-end fw-semibold">March 15</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Drupal Community</td>
																<td class="view-message view-message">Welcome to the Drupal Community</td>
																<td class="view-message text-end fw-semibold">March 04</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="dont-show fw-semibold">Zoosk </td>
																<td class="view-message">7 new singles we think you'll like</td>
																<td class="view-message text-end fw-semibold">May 14</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message dont-show fw-semibold">LinkedIn </td>
																<td class="view-message">Alireza: Nokia Networks, System Group and </td>
																<td class="view-message text-end fw-semibold">February 25</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="dont-show fw-semibold">Facebook</td>
																<td class="view-message view-message">Your account was recently logged into</td>
																<td class="view-message text-end fw-semibold">March 14</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Twitter</td>
																<td class="view-message">Your Twitter password has been changed</td>
																<td class="view-message text-end fw-semibold">April 07</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">InternetSeer</td>
																<td class="view-message">Performance Report</td>
																<td class="view-message text-end fw-semibold">July 14</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message dont-show fw-semibold">Bertina </td>
																<td class="view-message">IMPORTANT: Don't lose your domains!</td>
																<td class="view-message text-end fw-semibold">June 16</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message dont-show fw-semibold">Laura Gaffin, S P N </td>
																<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
																<td class="view-message text-end fw-semibold">August 10</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Facebook</td>
																<td class="view-message view-message">Alireza Zare Login faild</td>
																<td class="view-message text-end fw-semibold">feb 14</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">AddMe.com</td>
																<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
																<td class="view-message text-end fw-semibold">August 10</td>
															</tr>
															<tr class="">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Terri Rexer, S P N</td>
																<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
																<td class="view-message text-end fw-semibold">April 14</td>
															</tr>

														</tbody>
													</table>

												</div>
											</div>
										</div>
									</div>
									<ul class="pagination mb-4">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="javascript:void(0);">Next</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->
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