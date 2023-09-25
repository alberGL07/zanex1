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
									<h1 class="page-title">Table</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
										<li class="breadcrumb-item active" aria-current="page">Table</li>
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
									<div class="card custom-card">
										<div class="card-body">
											<div>
												<h3 class="card-title mb-1">Simple Table</h3>
												<p class="text-muted card-sub-title">Using the most basic table markup</p>
											</div>
											<div class="table-responsive">
												<table class="table  border text-nowrap text-md-nowrap mg-b-0">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr >
															<td>1</td>
															<td>Joan Powell</td>
															<td>Associate Developer</td>
															<td>$450,870</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gavin Gibson</td>
															<td>Account manager</td>
															<td>$230,540</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Julian Kerr</td>
															<td>Senior Javascript Developer</td>
															<td>$55,300</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Cedric Kelly</td>
															<td>Accountant</td>
															<td>$234,100</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Samantha May</td>
															<td>Junior Technical Author</td>
															<td>$43,198</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-body">
											<div>
												<h3 class="card-title mb-1">Striped Rows</h3>
												<p class="text-muted card-sub-title">Add zebra-striping to any table row.</p>
											</div>
											<div class="table-responsive">
												<table class="table border text-nowrap text-md-nowrap table-striped mg-b-0">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Joan Powell</td>
															<td>Associate Developer</td>
															<td>$450,870</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gavin Gibson</td>
															<td>Account manager</td>
															<td>$230,540</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Julian Kerr</td>
															<td>Senior Javascript Developer</td>
															<td>$55,300</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Cedric Kelly</td>
															<td>Accountant</td>
															<td>$234,100</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Samantha May</td>
															<td>Junior Technical Author</td>
															<td>$43,198</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-body">
											<div>
												<h3 class="card-title mb-1">Bordered Table</h3>
												<p class="text-muted card-sub-title">Add borders on all sides of the table and cells.</p>
											</div>
											<div class="table-responsive">
												<table class="table border text-nowrap text-md-nowrap table-bordered mg-b-0">
													<thead style="text-align: center;">
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Joan Powell</td>
															<td>Associate Developer</td>
															<td>$450,870</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gavin Gibson</td>
															<td>Account manager</td>
															<td>$230,540</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Julian Kerr</td>
															<td>Senior Javascript Developer</td>
															<td>$55,300</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Cedric Kelly</td>
															<td>Accountant</td>
															<td>$234,100</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Samantha May</td>
															<td>Junior Technical Author</td>
															<td>$43,198</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->

							<!-- ROW -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-body">
											<div>
												<h3 class="card-title mb-1">Hoverable Rows Table</h3>
												<p class="text-muted card-sub-title">To enable a hover state on table rows.</p>
											</div>
											<div class="table-responsive">
												<table class="table border text-nowrap text-md-nowrap table-hover mg-b-0">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Joan Powell</td>
															<td>Associate Developer</td>
															<td>$450,870</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gavin Gibson</td>
															<td>Account manager</td>
															<td>$230,540</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Julian Kerr</td>
															<td>Senior Javascript Developer</td>
															<td>$55,300</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Cedric Kelly</td>
															<td>Accountant</td>
															<td>$234,100</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Samantha May</td>
															<td>Junior Technical Author</td>
															<td>$43,198</td>
														</tr>
													</tbody>
												</table>
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

		<!-- SELECT2 JS -->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>