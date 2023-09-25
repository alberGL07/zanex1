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
                                    <h1 class="page-title">Form Editor</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header border-bottom-0">
                                            <h3 class="card-title">Form Editor style1</h3>
                                        </div>
                                        <div class="card-body">
                                            <textarea class="content" name="example"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header border-bottom-0">
                                            <div class="card-title">
                                                Form Editor
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ql-wrapper ql-wrapper-demo bg-light br-5">
                                                <div id="quillEditor">
                                                    <p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
                                                    <p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header border-bottom-0">
                                            <div class="card-title">
                                                Form Editor in Modal
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center p-4 bg-light border br-5">
                                                <a class="btn btn-primary" data-bs-target="#modalQuill" data-bs-toggle="modal" href="javascript:void(0);">View Live Demo</a>
                                            </div><!-- pd-y-30 -->
                                            <div class="modal">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header pd-20">
                                                            <h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body pd-0">
                                                            <div class="ql-wrapper ql-wrapper-modal ht-250">
                                                                <div class="flex-1" id="quillEditorModal">
                                                                    <p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
                                                                    <p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer pd-20">
                                                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header border-bottom-0">
                                            <div class="card-title">
                                                From Inline-Edit Editor
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="wd-xl-100p ht-350">
                                                <div class="ql-scrolling-demo bg-light p-4 border br-5" id="scrolling-container">
                                                    <div id="quillInline">
                                                        <h2>Try to select me and edit</h2>
                                                        <p><br></p>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
                                                    </div>
                                                </div>
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

		<!-- MODAL-->
		<div class="modal fade"  id="modalQuill">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header pd-20">
						<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body pd-0">
						<div class="ql-wrapper ql-wrapper-modal ht-250">
							<div class="flex-1" id="quillEditorModal2">
								<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
								<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
							</div>
						</div>
					</div>
					<div class="modal-footer pd-20">
						<button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" aria-label="Close" >Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL -->

		<?php include '../layouts/scripts.php'; ?>

		
		<!-- WYSIWYG EDITOR JS -->
		<script src="../assets/plugins/wysiwyag/jquery.richtext.js"></script>
		<script src="../assets/plugins/wysiwyag/wysiwyag.js"></script>

		<!-- FORMEDITOR JS -->
		<script src="../assets/plugins/quill/quill.min.js"></script>
		<script src="../assets/js/form-editor2.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>