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
                                    <h1 class="page-title">Blog Post</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
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
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Add New Post</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Post Title :</label>
                                                <div class="">
                                                    <input type="text" class="form-control" value="Typing.....">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Categories :</label>
                                                <div class="">
                                                    <select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                                        <option value="br">Technology</option>
                                                        <option value="cz">Travel</option>
                                                        <option value="de">Food</option>
                                                        <option value="pl">Fashion</option>
                                                </select>
                                                </div>
                                            </div>

                                            <!-- Row -->
                                            <div class="row">
                                                <label class="col-md-3 form-label mb-4">Post Description :</label>
                                                <div class="mb-4">
                                                    <textarea class="content" name="example"></textarea>
                                                </div>
                                            </div>
                                            <!--End Row-->

                                            <div class="form-group mb-0">
                                                <label class="col-md-3 form-label mb-4">File Upload :</label>
                                                <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="javascript:void(0)" class="btn btn-primary">Post</a>
                                            <a href="javascript:void(0)" class="btn btn-default float-end">Discard</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Recent Posts</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="">
                                                <div class="d-flex overflow-visible">
                                                    <a href="blog-details.php" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/19.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                                    <div class="ps-3 flex-column">
                                                        <span class="badge bg-danger me-1 mb-1 mt-1">Lifestyle</span>
                                                        <h4><a href="blog-details.php">Generator on the Internet..</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <a href="blog-details.php" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/22.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                                    <div class="ps-3 flex-column">
                                                        <span class="badge bg-primary me-1 mb-1 mt-1">Business</span>
                                                        <h4><a href="blog-details.php">Voluptatem quia voluptas...</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <a href="blog-details.php" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/12.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                                    <div class="ps-3 flex-column">
                                                        <span class="badge bg-secondary me-1 mb-1 mt-1">Travel</span>
                                                        <h4><a href="blog-details.php">Generator on the Internet..</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <a href="blog-details.php" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/25.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                                    <div class="ps-3 flex-column">
                                                        <span class="badge bg-success me-1 mb-1 mt-1">Meeting</span>
                                                        <h4><a href="blog-details.php">Voluptatem quia voluptas...</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Professional Blog Writers</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="">
                                                <div class="d-flex overflow-visible">
                                                    <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/12.jpg" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="profile.php" class="fw-semibold text-dark">John Paige</a>
                                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/2.jpg" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="profile.php" class="fw-semibold text-dark">Peter Hill</a>
                                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/9.jpg" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="profile.php" class="fw-semibold text-dark">Irene Harris</a>
                                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/4.jpg" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="profile.php" class="fw-semibold text-dark">Harry Fisher</a>
                                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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


        <!-- CHART-CIRCLE JS -->
        <script src="../assets/js/circle-progress.min.js"></script>

        <!-- INTERNAL WYSIWYG EDITOR JS -->
        <script src="../assets/plugins/wysiwyag/jquery.richtext.js"></script>
        <script src="../assets/plugins/wysiwyag/wysiwyag.js"></script>

        <!-- INTERNAL FILE-UPLOADS JS -->
        <script src="../assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
        <script src="../assets/plugins/fancyuploder/jquery.fileupload.js"></script>
        <script src="../assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
        <script src="../assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
        <script src="../assets/plugins/fancyuploder/fancy-uploader.js"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="../assets/plugins/select2/select2.full.min.js"></script>
        <script src="../assets/js/select2.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>


    </body>

</html>