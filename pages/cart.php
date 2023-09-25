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
									<h1 class="page-title">Cart</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
										<li class="breadcrumb-item active" aria-current="page">Cart</li>
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
								<div class="col-xl-8 col-lg-12">
									<div class="card cart">
										<div class="card-header">
											<h3 class="card-title">Shopping Cart</h3>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered table-vcenter text-nowrap mb-0">
													<thead>
														<tr class="border-top">
															<th class="w-5">Product</th>
															<th>Title</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<img src="../assets/images/pngs/1.png" alt="" class="cart-img">
															</td>
															<td>laborum et dolorum fuga</td>
															<td class="fw-bold">$568</td>
															<td >
																<div class="handle-counter">
																	<button type="button" class="counter-minus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-minus"></i>
																	</button>
																	<input type="text" value="2" class="qty">
																	<button type="button" class="counter-plus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-plus "></i>
																	</button>
																</div>
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td>
																<img src="../assets/images/pngs/4.png" alt="" class="cart-img">
															</td>
															<td>laborum et dolorum fuga</td>
															<td class="fw-bold">$1,027</td>
															<td >
																<div class="handle-counter">
																	<button type="button" class="counter-minus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-minus"></i>
																	</button>
																	<input type="text" value="9" class="qty">
																	<button type="button" class="counter-plus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-plus "></i>
																	</button>
																</div>
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td>
																<img src="../assets/images/pngs/2.png" alt="" class="cart-img">
															</td>
															<td>laborum et dolorum fuga</td>
															<td class="fw-bold">$1,027</td>
															<td >
																<div class="handle-counter">
																	<button type="button" class="counter-minus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-minus"></i>
																	</button>
																	<input type="text" value="6" class="qty">
																	<button type="button" class="counter-plus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-plus "></i>
																	</button>
																</div>
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td>
																<img src="../assets/images/pngs/5.png" alt="" class="cart-img">
															</td>
															<td>laborum et dolorum fuga</td>
															<td class="fw-bold">$1,027</td>
															<td >
																<div class="handle-counter">
																	<button type="button" class="counter-minus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-minus"></i>
																	</button>
																	<input type="text" value="9" class="qty">
																	<button type="button" class="counter-plus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-plus "></i>
																	</button>
																</div>
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td>
																<img src="../assets/images/pngs/6.png" alt="" class="cart-img">
															</td>
															<td>laborum et dolorum fuga</td>
															<td class="fw-bold">$1,027</td>
															<td >
																<div class="handle-counter">
																	<button type="button" class="counter-minus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-minus"></i>
																	</button>
																	<input type="text" value="7" class="qty">
																	<button type="button" class="counter-plus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-plus "></i>
																	</button>
																</div>
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td>
																<img src="../assets/images/pngs/7.png" alt="" class="cart-img">
															</td>
															<td>laborum et dolorum fuga</td>
															<td class="fw-bold">$1,027</td>
															<td >
																<div class="handle-counter">
																	<button type="button" class="counter-minus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-minus"></i>
																	</button>
																	<input type="text" value="3" class="qty">
																	<button type="button" class="counter-plus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-plus "></i>
																	</button>
																</div>
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td>
																<img src="../assets/images/pngs/8.png" alt="" class="cart-img">
															</td>
															<td>laborum et dolorum fuga</td>
															<td class="fw-bold">$1,589</td>
															<td >
																<div class="handle-counter">
																	<button type="button" class="counter-minus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-minus"></i>
																	</button>
																	<input type="text" value="5" class="qty">
																	<button type="button" class="counter-plus btn btn-default lh-2 shadow-none">
																		<i class="fe fe-plus "></i>
																	</button>
																</div>
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Have coupon?</h3>
										</div>
										<div class="card-body">
											<form>
												<div class="form-group">
													<div class="input-group"> <input type="text" class="form-control coupon" placeholder="Coupon code"> <span class="input-group-btn"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
												</div>
											</form>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Price Details</h3>
										</div>
										<div class="card-body">
											<table class="table border-top-0">
												<tr>
													<td class="border-top-0">Sub Total</td>
													<td class="text-end fw-bold border-top-0">$4,360</td>
												</tr>
												<tr>
													<td class="border-top-0">Discount</td>
													<td class="text-end fw-bold border-top-0">5%</td>
												</tr>
												<tr>
													<td class="border-top-0">Shipping</td>
													<td class="text-end fw-bold border-top-0">Free</td>
												</tr>
												<tr>
													<td class="fs-20 fw-bold border-top-0">Total</td>
													<td class="text-end fs-20 fw-bold border-top-0">$3,976</td>
												</tr>
											</table>
										</div>
										<div class="card-footer">
											<div class="btn-list">
												<a href="shop.php" class="btn btn-primary"><i class="fa fa-arrow-left me-1"></i>Continue Shopping</a>
												<a href="checkout.php" class="btn btn-success float-sm-end">Check out<i class="fa fa-arrow-right me-1"></i></a>
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

		
		<!-- CHARTJS JS -->
		<script src="../assets/plugins/chart/Chart.bundle.js"></script>
		<script src="../assets/plugins/chart/utils.js"></script>
		
		<!-- Handle Counter JS -->
		<script src="../assets/js/handlecounter.js"></script>
		
        <?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>