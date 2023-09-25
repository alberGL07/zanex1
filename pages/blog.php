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
                                    <h1 class="page-title">Blog</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                            <div class="row row-cards ">
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/19.jpg" alt="Card image cap"></a>
                                        <div class="card-header">
                                            <a href="blog-details.php"><h5 class="card-title">Blog title </h5></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="blog-details.php" class="float-end">Read more <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/12.jpg" alt="Card image cap"></a>
                                        <div class="card-header">
                                            <a href="blog-details.php"><h5 class="card-title">Blog title</h5></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="blog-details.php" class="float-end text-info">Read more <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-4">
                                    <div class="card ">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/17.jpg" alt="Card image cap"></a>
                                        <div class="card-header">
                                            <a href="blog-details.php"><h5 class="card-title">Blog title</h5></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="blog-details.php" class="float-end text-success">Read more <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7 " src="../assets/images/media/20.jpg" alt="Card image cap"></a>
                                        <div class="card-header">
                                            <a href="blog-details.php"><h5 class="card-title">Blog title</h5></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="blog-details.php" class="btn btn-primary btn-md">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-4">
                                    <div class="card ">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7 " src="../assets/images/media/23.jpg" alt="Card image cap"></a>
                                        <div class="card-header">
                                            <a href="blog-details.php"><h5 class="card-title">Blog title</h5></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="blog-details.php" class="btn btn-warning btn-md">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-4">
                                    <div class="card ">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7 " src="../assets/images/media/22.jpg" alt="Card image cap"></a>
                                        <div class="card-header">
                                            <a href="blog-details.php"><h5 class="card-title">Blog title</h5></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="blog-details.php" class="btn btn-info btn-md">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/13.jpg" alt="And this isn&#39;t my nose. This is a false one."></a>
                                        <div class="card-body d-flex flex-column">
                                            <h4><a href="blog-details.php">voluptatem quia voluptas.</a></h4>
                                            <div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar brround avatar-md me-3 cover-image" data-bs-image-src="../assets/images/users/18.jpg"></div>
                                                <div>
                                                    <a href="profile.php" class="text-default">John Paige</a>
                                                    <small class="d-block text-muted">1 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <a href="blog-details.php"><img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/14.jpg" alt="Well, I didn&#39;t vote for you."></a>
                                        <div class="card-body d-flex flex-column">
                                            <h4><a href="blog-details.php">voluptatem quia voluptas.</a></h4>
                                            <div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar brround avatar-md me-3 cover-image" data-bs-image-src="../assets/images/users/16.jpg"></div>
                                                <div>
                                                    <a href="profile.php" class="text-default">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body d-flex flex-column">
                                            <h4><a href="blog-details.php">voluptatem quia voluptas</a></h4>
                                            <div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar  brround avatar-md me-3 cover-image" data-bs-image-src="../assets/images/users/6.jpg"></div>
                                                <div>
                                                    <a href="profile.php" class="text-default">Carol Paige</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="blog-details.php"><img class="card-img-top br-tr-0 br-tl-0 br-5" src="../assets/images/media/15.jpg" alt="How do you know she is a witch?"></a>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body d-flex flex-column">
                                            <h4><a href="blog-details.php">voluptatem quia voluptas..</a></h4>
                                            <div class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut ..</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar brround avatar-md me-3 cover-image" data-bs-image-src="../assets/images/users/7.jpg"></div>
                                                <div>
                                                    <a href="profile.php" class="text-default">Fiona Hodges</a>
                                                    <small class="d-block text-muted">5 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="blog-details.php"><img class="card-img-top br-tr-0 br-tl-0 br-5" src="../assets/images/media/16.jpg" alt="Shut up!"></a>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-lg-6">
                                    <div class="card card-aside">
                                        <a href="blog-details.php" class="card-aside-column br-tr-0 br-br-0 br-5 cover-image" data-bs-image-src="../assets/images/media/19.jpg"></a>
                                        <div class="card-body flex-column">
                                            <h4><a href="blog-details.php">Generator on the Internet..</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar  brround avatar-md me-3 cover-image" data-bs-image-src="../assets/images/users/18.jpg"></div>
                                                <div>
                                                    <a href="profile.php" class="text-default">Anna Ogden</a>
                                                    <small class="d-block text-muted">1 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-lg-6">
                                    <div class="card card-aside">
                                        <div class="card-body flex-column">
                                            <h4><a href="blog-details.php">Nihil molestiae consequatur.</a></h4>
                                            <div class="text-muted">Many desktop publishing packages and web page editors now use default model text, and a search for will uncover...</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar  brround avatar-md me-3 cover-image" data-bs-image-src="../assets/images/users/16.jpg"></div>
                                                <div>
                                                    <a href="profile.php" class="text-default">Irene	Scott</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="blog-details.php" class="card-aside-column br-bl-0 br-tl-0 br-5 cover-image" data-bs-image-src="../assets/images/media/18.jpg"></a>
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


        <!-- CHART-CIRCLE JS -->
        <script src="../assets/js/circle-progress.min.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>


    </body>

</html>