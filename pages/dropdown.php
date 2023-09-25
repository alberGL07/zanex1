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
									<h1 class="page-title">Dropdowns</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Dropdown</li>
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
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Single button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Rounded button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-default btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Split button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-default">Action</button>
														<button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-primary">Action</button>
														<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-success">Action</button>
														<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class=" fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-info">Action</button>
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-warning">Action</button>
														<button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-danger">Action</button>
														<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class=" fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Rounded Split button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-default">Action</button>
														<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-primary">Action</button>
														<button type="button" class="btn btn-pill btn-primary dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-success">Action</button>
														<button type="button" class="btn btn-pill btn-success dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-info">Action</button>
														<button type="button" class="btn btn-pill btn-info dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-warning">Action</button>
														<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class=" fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-danger">Action</button>
														<button type="button" class="btn btn-pill btn-danger dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Single Square outline button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Rounded button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Split button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-primary">Action</button>
														<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-success">Action</button>
														<button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-info">Action</button>
														<button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-warning">Action</button>
														<button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-outline-danger">Action</button>
														<button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Rounded Split button dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
														<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class=" fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-outline-success">Action</button>
														<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-outline-info">Action</button>
														<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
														<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
														<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Dropup variation</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="dropup btn-group mt-2 mb-2">
													<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropup1
														<span class="caret"></span></button>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0);">HTML</a></li>
														<li><a href="javascript:void(0);">CSS</a></li>
														<li><a href="javascript:void(0);">JavaScript</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">About Us</a></li>
													</ul>
												</div>
												<!-- Split dropup button -->
												<div class="dropup btn-group mt-2 mb-2">
													<button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropup2
														<span class="caret"></span></button>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0);">HTML</a></li>
														<li><a href="javascript:void(0);">CSS</a></li>
														<li><a href="javascript:void(0);">JavaScript</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">About Us</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">social Icon</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-facebook btn-pill" data-bs-toggle="">
															<i class="fa fa-facebook"></i> <span class="caret"></span>
														</button>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-twitter btn-pill" data-bs-toggle="">
															<i class="fa fa-twitter"></i> <span class="caret"></span>
														</button>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-google btn-pill" data-bs-toggle="">
															<i class="fa fa-google"></i> <span class="caret"></span>
														</button>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-youtube btn-pill" data-bs-toggle="">
															<i class="fa fa-youtube "></i><span class="caret"></span>
														</button>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-vimeo btn-pill " data-bs-toggle="">
															<i class="fa fa-vimeo"></i><span class="caret"></span>
														</button>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-github btn-pill" data-bs-toggle="">
															<i class="fa fa-github"></i> <span class="caret"></span>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Icon Drop Downs dropdowns</h3>
										</div>
										<div class="card-body">
											<div class="example panel panel-default">
												<div class="panel-body p-0">
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-dropdown-icon btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-dropdown-icon btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															<i class="fa fa-ellipsis-h"></i> <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-dropdown-icon btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															<i class="fa fa-ellipsis-v "></i><span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
													<div class="btn-group mt-2 mb-2">
														<button type="button" class="btn btn-dropdown-icon1 btn-pill dropdown-toggle" data-bs-toggle="dropdown">
															<i class="fa fa-chain"></i> <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li class="dropdown-plus-title">
																Dropdown
																<b class="fa fa-angle-up" aria-hidden="true"></b>
															</li>
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0);">Separated link</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- COL END -->
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