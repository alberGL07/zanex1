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
                                    <h1 class="page-title">Headers</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Headers</li>
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
                                            <h3 class="card-title">Default Header</h3>
                                        </div>
                                        <div class="header header-1 p-4">
                                            <div class="container">
                                                <div class="d-flex align-items-center">
                                                    <a class="animated-arrow horizontal-navtoggle-1-1"><span></span></a>
                                                    <a class="header-brand" href="index.php">
                                                        <img src="../assets/images/brand/logo-3.png" class="header-brand-img logo-3" alt="Zanex logo">
                                                        <img src="../assets/images/brand/logo.png" class="header-brand-img logo" alt="Zanex logo">
                                                    </a>
                                                    <!-- LOGO -->
                                                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                                        <a href="javascript:void(0);" data-bs-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a>
                                                        <div class="default-header">
                                                            <form class="form-inline">
                                                                <div class="search-element">
                                                                    <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                                                    <button class="btn btn-primary-color" type="submit"><i class="ion ion-search"></i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- SEARCH -->
                                                        <div class="dropdown d-md-flex">
                                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                                <i class="fe fe-maximize-2" id="fullscreen-button1"></i>
                                                            </a>
                                                        </div>
                                                        <!-- FULL-SCREEN -->
                                                        <div class="dropdown d-md-flex notifications">
                                                            <a class="nav-link icon" data-bs-toggle="">
                                                                <i class="fe fe-bell"></i>
                                                                <span class="nav-unread badge bg-success rounded-pill">2</span>
                                                            </a>
                                                        </div>
                                                        <!-- NOTIFICATIONS -->
                                                        <div class="dropdown d-md-flex message">
                                                            <a class="nav-link icon text-center" data-bs-toggle="">
                                                                <i class="fe fe-message-square"></i>
                                                                <span class=" nav-unread badge bg-danger  rounded-pill">6</span>
                                                            </a>
                                                        </div>
                                                        <!-- MESSAGE-BOX -->
                                                        <div class="dropdown text-center selector profile-1">
                                                            <a href="javascript:void(0);" data-bs-toggle="" class="nav-link leading-none d-flex">
                                                                <span><img src="../assets/images/users/8.jpg" alt="profile-user" class="avatar avatar-sm brround cover-image mb-1 ms-0"></span>
                                                                <span class=" ms-3 d-none d-xl-block ">
                                                                        <span class="text-dark">Elizabeth Dyer</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <!-- PROFILE -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- HEADER END -->
                                    </div>
                                </div>
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Header Style-01</h3>
                                        </div>
                                        <div class="header header-2 p-4">
                                            <div class="container">
                                                <nav class=" navbar header-nav navbar-expand-lg main-navbar p-0">
                                                    <a class="animated-arrow horizontal-navtoggle-1-1"><span></span></a>
                                                    <a class="header-brand" href="index.php">
                                                        <img src="../assets/images/brand/logo-3.png" class="header-brand-img logo-3" alt="Zanex logo">
                                                        <img src="../assets/images/brand/logo.png" class="header-brand-img logo" alt="Zanex logo">
                                                    </a>
                                                    <ul class="navbar-nav navbar-right me-auto">
                                                        <li class="dropdown dropdown-list-toggle envelope"><a href="javascript:void(0);" data-bs-toggle="" class="nav-link notification-toggle nav-link-lg"><span class="badge bg-danger nav-link-badge">5</span><i class="fe fe-message-square"></i></a>
                                                        </li>
                                                        <li class="dropdown dropdown-list-toggle d-none d-sm-block"><a href="javascript:void(0);" data-bs-toggle="" class="nav-link  nav-link-lg "><span class="badge bg-secondary nav-link-badge">6</span><i class="fe fe-bell"></i></a>
                                                        </li>
                                                        <li class="dropdown dropdown-list-toggle d-none d-lg-block">
                                                            <a href="javascript:void(0);" class="nav-link nav-link-lg full-screen-link">
                                                                <i class="fe fe-maximize-2 " id="fullscreen-button2"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="header2">
                                                        <form class="form-inline">
                                                            <div class="search-element">
                                                                <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                                                <button class="btn btn-primary-color" type="submit"><i class="ion ion-search"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="dropdown ms-2 ">
                                                        <a href="javascript:void(0);" data-bs-toggle="" class="nav-link header-style-2 dropdown-toggle nav-link-lg d-flex">
                                                            <span><img src="../assets/images/users/8.jpg" alt="profile-user" class="avatar avatar-sm brround cover-image w-32 me-2"></span>
                                                        </a>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Header style 2</h3>
                                        </div>
                                        <div class="header header-1 header-style p-4">
                                            <div class="container">
                                                <div class="d-flex align-items-center">
                                                    <a class="animated-arrow horizontal-navtoggle-1-1"><span></span></a>
                                                    <a class="header-brand" href="index.php">
                                                        <img src="../assets/images/brand/logo-3.png" class="header-brand-img logo-3" alt="Zanex logo">
                                                        <img src="../assets/images/brand/logo.png" class="header-brand-img logo" alt="Zanex logo">
                                                    </a>
                                                    <!-- LOGO -->
                                                    <div class="header3">
                                                        <form class="form-inline">
                                                            <div class="search-element">
                                                                <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                                                <button class="btn btn-primary-color" type="submit"><i class="ion ion-search"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- SEARCH -->
                                                    <div class="d-flex order-lg-2 ms-auto header-right-icons ">
                                                        <a href="javascript:void(0);" data-bs-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a>
                                                        <div class="dropdown d-md-flex">
                                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                                <i class="fe fe-maximize-2" id="fullscreen-button3"></i>
                                                            </a>
                                                        </div>
                                                        <!-- FULL-SCREEN -->
                                                        <div class="dropdown d-md-flex notifications">
                                                            <a class="nav-link icon" data-bs-toggle="">
                                                                <i class="fe fe-bell"></i>
                                                                <span class="nav-unread badge bg-success rounded-pill">3</span>
                                                            </a>
                                                        </div>
                                                        <!-- NOTIFICATIONS -->
                                                        <div class="dropdown d-md-flex message">
                                                            <a class="nav-link icon text-center" data-bs-toggle="">
                                                                <i class="fe fe-message-square"></i>
                                                                <span class=" nav-unread badge bg-danger  rounded-pill">6</span>
                                                            </a>
                                                        </div>
                                                        <!-- MESSAGE-BOX -->
                                                        <div class="dropdown text-center selector profile-1">
                                                            <a href="javascript:void(0);" data-bs-toggle="" class="nav-link leading-none d-flex">
                                                                <span><img src="../assets/images/users/8.jpg" alt="profile-user" class="avatar avatar-sm brround cover-image mb-1 ms-0"></span>
                                                                <span class=" ms-3 d-none d-xl-block ">
                                                                        <span class="text-dark">Elizabeth Dyer</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <!-- PROFILE -->
                                                    </div>
                                                    <a href="javascript:void(0);" class="header-toggler d-lg-none ms-lg-0" data-bs-toggle="collapse" data-target="#headerMenuCollapse">
                                                        <span class="header-toggler-icon"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- HEADER END -->
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


        <?php include '../layouts/main-scripts.php'; ?>


    </body>

</html>