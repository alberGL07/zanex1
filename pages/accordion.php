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
									<h1 class="page-title">Accordion</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Accordion</li>
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
							<div class="row ">
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Default Accordion</h3>
										</div>
										<div class="card-body">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default active">
													<div class="panel-heading border" role="tab" id="headingOne1">
														<h4 class="panel-title">
															<a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">

																Collapsible Group Item #1
															</a>
														</h4>
													</div>
													<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
														</div>
													</div>
												</div>
												<div class="panel panel-default mt-2">
													<div class="panel-heading border" role="tab" id="headingTwo2">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">

																Collapsible Group Item #2
															</a>
														</h4>
													</div>
													<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
														</div>
													</div>
												</div>
												<div class="panel panel-default mt-2">
													<div class="panel-heading border" role="tab" id="heading3">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">

																Collapsible Group Item #3
															</a>
														</h4>
													</div>
													<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
														</div>
													</div>
												</div>
											</div><!-- PANEL-GROUP -->
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Bootstrap Accordion</h3>
										</div>
										<div class="card-body">
											<div class="accordion" id="accordionExample">
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingOne">
														<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
															Accordion Item #1
														</button>
													</h2>
													<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingTwo">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
															Accordion Item #2
														</button>
													</h2>
													<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingThree">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
															Accordion Item #3
														</button>
													</h2>
													<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Closed Accordion</h3>
										</div>
										<div class="card-body">
											<!-- ACCORDION BEGIN -->
											<ul class="demo-accordion accordionjs m-0" data-bs-active-index="false">
												<!-- SECTION 1 -->
												<li>
													<div><h3>Section 1</h3></div>
													<div>
														<!-- Your text here. For this demo, the content is generated automatically. -->
													</div>
												</li>
												<!-- SECTION 2 -->
												<li>
													<div><h3>Section 2</h3></div>
													<div>
														<!-- Your text here. For this demo, the content is generated automatically. -->
													</div>
												</li>
												<!-- SECTION 3 -->
												<li>
													<div><h3>Section 3</h3></div>
													<div>
														<!-- Your text here. For this demo, the content is generated automatically. -->
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Accordion Style 3</h3>
										</div>
										<div class="card-body">
											<ul class="demo-accordion accordionjs m-0">
												<li>
													<div><h3>Section 1</h3></div>
													<div>
														<!-- Your text here. For this demo, the content is generated automatically. -->
													</div>
												</li>
												<li>
													<div><h3>Section 2</h3></div>
													<div>
														<!-- Your text here. For this demo, the content is generated automatically. -->
													</div>
												</li>
												<li>
													<div><h3>Section 3</h3></div>
													<div>
														<!-- Your text here. For this demo, the content is generated automatically. -->
													</div>
												</li>
												<li>
													<div><h3>Section 4</h3></div>
													<div>
														<!-- Your text here. For this demo, the content is generated automatically. -->
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Accordion style</h3>
										</div>
										<div class="card-body">
											<div class="panel-group1" id="accordion1">
												<div class="panel panel-default mb-4">
													<div class="panel-heading1 ">
														<h4 class="panel-title1">
															<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFour" aria-expanded="false">Section 1</a>
														</h4>
													</div>
													<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body">
															<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading1">
														<h4 class="panel-title1">
															<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFive" aria-expanded="false">Section 2</a>
														</h4>
													</div>
													<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body">
															<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-2 CLOSED OPEN -->
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

		<!-- ACCORDION JS -->
		<script src="../assets/plugins/accordion/accordion.min.js"></script>
		<script src="../assets/plugins/accordion/accordion.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>
		

	</body>
</html>