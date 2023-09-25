<!doctype html>
<html lang="en">

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
                                    <h1 class="page-title">Full Calendar</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Full Calender</li>
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
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Calender With different Color Events</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 col-xl-3">
                                                    <div id="external-events">
                                                        <h4>Draggable Events</h4>
                                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary">
                                                            <div class="fc-event-main"> My Event 1</div>
                                                        </div>
                                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teal" data-class="bg-teal">
                                                            <div class="fc-event-main">My Event 2</div>
                                                        </div>
                                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning" data-class="bg-warning">
                                                            <div class="fc-event-main">My Event 3</div>
                                                        </div>
                                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info" data-class=" bg-info">
                                                            <div class="fc-event-main">My Event 4</div>
                                                        </div>
                                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger" data-class="bg-danger">
                                                            <div class="fc-event-main">My Event 5</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-9 mt-5 mt-xl-0">
                                                    <div id='calendar2'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Calendar</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id='calendar'></div>
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


        <!-- FULL CALENDAR JS -->
        <script src='../assets/plugins/fullcalendar/moment.min.js'></script>
        <script src='../assets/plugins/fullcalendar/fullcalendar.min.js'></script>
        <script src="../assets/js/fullcalendar.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>
        

    </body>

</html>