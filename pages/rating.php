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
									<h1 class="page-title">Rating</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
										<li class="breadcrumb-item active" aria-current="page">Rating</li>
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
							<div class="row row-cards">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Star Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block" id="rating-1" data-stars="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Heart Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block" id="rating-2" data-stars="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Multi Star Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block" id="rating-3" data-stars="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Multi Heart Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block" id="rating-6" data-stars="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Multi circle Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block" id="rating-4" data-stars="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Thumbs-up Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block" id="rating-5" data-stars="2">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row row-cards">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Basic Star Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block my-rating">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Rounded star Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars  block my-rating-4" data-rating="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
													gradients Rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block my-rating-5" data-rating="5">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Execute callback when rating
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block my-rating-6"   data-rating="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												read only mode
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block my-rating-7"  data-rating="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Use fullstars
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block my-rating-8" data-rating="2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												On hover event
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block my-rating-9" data-rating="2">
											</div>
											<span class="live-rating"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												rating level colors
											</div>
										</div>
										<div class="card-body">
											<div class="rating-stars block my-rating-10" data-rating="2">
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

		<!-- STAR RATING JS -->
		<script src="../assets/plugins/rating/jquery-rate-picker.js"></script>
		<script src="../assets/plugins/rating/rating-picker.js"></script>

		<!-- STAR RATING-1 JS -->
		<script src="../assets/plugins/ratings-2/jquery.star-rating.js"></script>
		<script src="../assets/plugins/ratings-2/star-rating.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>