<!doctype html>
<html lang="en" dir="ltr">

	<head>
		<?php include '../layouts/custom-styles.php'; ?>


	</head>

	<body class="login-img">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page login-page error-bg">

		   <!-- PAGE-CONTENT OPEN -->
			<div class="page-content error-page error2">
				<div class="container text-center">
					<div class="error-template">
						<h1 class="display-1 mb-2">403<span class="fs-20">error</span></h1>
						<h5 class="error-details">
							Sorry, an error has occured, Requested page not found!
						</h5>
						<div class="text-center">
							<a class="btn btn-primary mt-5 mb-5" href="index.php"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
						</div>
                    </div>
				</div>
			</div>
			<!-- PAGE-CONTENT OPEN CLOSED -->
		</div>
		<!-- End PAGE -->
		
		<?php include '../layouts/custom-scripts.php'; ?>
		

	</body>
</html>