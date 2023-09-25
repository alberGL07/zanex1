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
                                    <h1 class="page-title">Counters</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Counters</li>
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
                            <div class="row row-cards">
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Numbers counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="counter-icon bg-primary-gradient box-shadow-primary brround mx-auto">
                                                <i class="fe fe-users text-white mb-5 "></i>
                                            </div>
                                            <h5>Employess</h5>
                                            <h2 class="counter">2569</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Numbers counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="counter-icon bg-danger-gradient box-shadow-danger brround mx-auto">
                                                <i class="fe fe-dollar-sign text-white mb-5 "></i>
                                            </div>
                                            <h5>Profit</h5>
                                            <h2 class="counter"> 2,56989.32</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Numbers counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="counter-icon bg-secondary-gradient  box-shadow-secondary brround mx-auto">
                                                <i class="fe fe-alert-octagon text-white mb-5 "></i>
                                            </div>
                                            <h5>Errors</h5>
                                            <h2 class="counter">0.8998</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time Counting From 0
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="example bg-primary br-7">
                                                <span id="timer-countup" class="h3 text-white"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time Counting From 60 to 20
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="example bg-secondary br-7">
                                                <span id="timer-countinbetween" class="h3 text-white"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time 1 minute counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="example bg-info br-7">
                                                <span id="timer-countercallback" class="h3 text-white"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Time Counting days Limit
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col-lg-6 mx-auto">
                                                    <div class=" example bg-success br-7">
                                                        <span id="timer-outputpattern" class="h3 text-white"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Day Counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col-md-8 mx-auto">
                                                    <div class="count-down row">
                                                        <div class="col-xl-3 col-md-6 countdown mb-6 mb-xl-0">
                                                            <span class="days text-primary ">35</span>
                                                            <span class="text-dark">Days</span>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6 countdown mb-6 mb-xl-0">
                                                            <span class="hours text-primary">17</span>
                                                            <span class="text-dark">Hrs</span>
                                                        </div>

                                                        <div class="col-xl-3 col-md-6 countdown mb-6 mb-xl-0">
                                                            <span class="minutes text-primary">50</span>
                                                            <span class="text-dark">Mins</span>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6 countdown ">
                                                            <span class="seconds text-primary">39</span>
                                                            <span class="text-dark">Secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
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

        <!-- TIME COUNTER JS-->
        <script src="../assets/plugins/counters/jquery.missofis-countdown.js"></script>
        <script src="../assets/plugins/counters/counter.js"></script>

        <!-- COUNT-DOWN JS-->
        <script src="../assets/plugins/counters/count-down.js"></script>
        <script src="../assets/plugins/countdown/moment.min.js"></script>
        <script src="../assets/plugins/countdown/moment-timezone.min.js"></script>
        <script src="../assets/plugins/countdown/moment-timezone-with-data.min.js"></script>
        <script src="../assets/plugins/countdown/countdowntime.js"></script>

        <!-- COUNTERS JS-->
        <script src="../assets/plugins/counters/counterup.min.js"></script>
        <script src="../assets/plugins/counters/waypoints.min.js"></script>
        <script src="../assets/plugins/counters/counters-1.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>


    </body>

</html>