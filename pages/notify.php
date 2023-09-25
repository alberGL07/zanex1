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
									<h1 class="page-title">Notification</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Notification</li>
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
											<h3 class="card-title">Alerts Notifications</h3>
										</div>
										<div class="card-body text-center">
											<div class="btn-list">
												<button onclick="not1()" class="btn btn-success">Default</button>
												<button onclick="not2()" class="btn btn-secondary">Center</button>
												<button onclick="not3()" class="btn btn-warning">Left</button>
												<button onclick="not4()" class="btn btn-info">Center Info</button>
												<button onclick="not5()" class="btn btn-danger">Center Error</button>
												<button onclick="not6()" class="btn btn-warning">Center Warning</button>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Side Alerts Notifications</h3>
										</div>
										<div class="card-body text-center">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-success notice">Success</a>
												<a href="javascript:void(0);" class="btn btn-warning warning">Warning</a>
												<a href="javascript:void(0);" class="btn btn-danger error">Danger</a>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Alerts Popovers</h3>
										</div>
										<div class="card-body text-center	">
											<button type="button" class="btn btn-success alert-popover me-2 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popsuccess" data-bs-placement="bottom" title="alert sucess" data-bs-content="Well done! You successfully read this important alert message..">
												Show success
											</button>
											<button type="button" class="btn btn-info me-2 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popinfo" data-bs-placement="top" title="alert info" data-bs-content="Heads up! This alert needs your attention, but it's not super important...">
												Show info
											</button>
											<button type="button" class="btn btn-warning me-2 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popwarning" data-bs-placement="bottom" title="alert warning" data-bs-content="Warning! Best check yo self, you're not looking too good..">
												Show warning
											</button>
											<button type="button" class="btn btn-secondary me-2 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popsecondary" data-bs-placement="top" title="alert secondary" data-bs-content="Error! Please Check u r emial id..">
												Show secondary
											</button>
											<button type="button" class="btn btn-danger me-2 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popdanger" data-bs-placement="bottom" title="alert danger" data-bs-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
											</button>
											<button type="button" class="btn btn-primary me-2 mb-2" data-bs-container="body"  data-bs-toggle="popover" data-bs-popover-color="pop-primary" data-bs-placement="top" title="alert primary" data-bs-content="Cool! This alert will close in 3 seconds. The data-bs-delay attribute is in milliseconds.">
												Show primary
											</button>
										</div>
									</div>
								</div><!-- COL-END -->
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

		
		<!-- INTERNAL Notifications js -->
		<script src="../assets/plugins/notify/js/rainbow.js"></script>
		<script src="../assets/plugins/notify/js/sample.js"></script>
		<script src="../assets/plugins/notify/js/jquery.growl.js"></script>
		<script src="../assets/plugins/notify/js/notifIt.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>