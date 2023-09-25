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
									<h1 class="page-title">Treeview</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Treeview</li>
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
									<div class="card mg-b-20">
										<div class="card-body">
											<div class="main-content-label mg-b-5">
												Basic Treeview
											</div>
											<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="row">
												<!-- col -->
												<div class="col-lg-4">
													<ul id="treeview1">
														<li><a href="javascript:void(0);">TECH</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">XRP</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="treeview2">
														<li><a href="javascript:void(0);">TECH</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">XRP</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="treeview3">
														<li><a href="javascript:void(0);">TECH</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">XRP</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-body">
											<div class="main-content-label mg-b-5">
												Tree View Styles
											</div>
											<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="row">
												<!-- col -->
												<div class="col-lg-4">
													<ul id="tree1">
														<li><a href="javascript:void(0);">Treeview1</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview2</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview3</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview4</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview5</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview6</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="tree2">
														<li><a href="javascript:void(0);">Treeview1</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview2</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview3</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview4</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview5</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview6</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="tree3">
														<li><a href="javascript:void(0);">Treeview1</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview2</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview3</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview4</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview5</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.
																					<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Treeview6</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->
						</div>
						<!-- CONTAINER END -->
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


		<!-- INTERNAL TREEVIEW JS -->
		<script src="../assets/plugins/treeview/treeview.js"></script>
		
		<?php include '../layouts/main-scripts.php'; ?>

		
	</body>
</html>