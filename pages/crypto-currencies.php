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
									<h1 class="page-title">Crypto-currencies</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
										<li class="breadcrumb-item active" aria-current="page">Crypto-currencies</li>
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
										<div class="table-responsive">
											<table class="table table-bordered  card-table mb-0">
												<tr class="border-bottom border-top">
													<th>Name</th>
													<th >Icon</th>
													<th>Price</th>
													<th class="text-center">% 24h</th>
													<th>Market Cap</th>
													<th>Circulating Supply</th>
													<th>Volume 24H</th>
													<th>CMGR/Month</th>
													<th>Inflation</th>
												</tr>
												<tr class="border-bottom">
													<td>Bitcoin</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/bitcoin.svg" alt="Bitcoin" class="w-4 h-4"></td>
													<td>$10513.00</td>
													<td class="text-red text-center">-7%</td>
													<td >$179,470,305,923</td>
													<td>16,819,612 BTC</td>
													<td class="ight">$9,578,830,000</td>
													<td>8.11% / 57</td>
													<td class="text-center">0.36%</td>
												</tr>
												<tr class="border-bottom">
													<td>Ethereum</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/ethereum.svg" alt="Ethereum" class="w-4 h-4"></td>
													<td>$966.61</td>
													<td class="text-red text-center">-6%</td>
													<td >$95,270,125,036</td>
													<td>97,145,024 ETH</td>
													<td >$3,466,060,000</td>
													<td>22.62% / 29</td>
													<td class="text-center">0.64%</td>
												</tr>
												<tr class="border-bottom">
													<td>Ripple</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/ripple.svg" alt="Ripple" class="w-4 h-4"></td>
													<td>$1.2029</td>
													<td class="text-red text-center">-11%</td>
													<td >$47,649,145,657</td>
													<td>38,739,144,704 XRP</td>
													<td >$2,081,450,000</td>
													<td>10.85% / 53</td>
													<td class="text-center">0.06%</td>
												</tr>
												<tr class="border-bottom">
													<td>Bitcoin Cash</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/bitcoincash.svg" alt="Bitcoin" class="w-4 h-4"></td>
													<td>$1547.00</td>
													<td class="text-red text-center">-11%</td>
													<td >$26,720,210,956</td>
													<td>16,925,988 BCH</td>
													<td >$598,337,000</td>
													<td>21.30% / 6</td>
													<td class="text-center" >0.32%</td>
												</tr>
												<tr class="border-bottom">
													<td>Cardano</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/cardano.svg" alt="Cardano" class="w-4 h-4"></td>
													<td>$0.550768</td>
													<td class="text-red text-center">-9%</td>
													<td >$14,279,800,786</td>
													<td>25,927,069,696 ADA</td>
													<td >$466,381,000</td>
													<td>205.35% / 3</td>
													<td class="text-center" >0.00%</td>
												</tr>
												<tr class="border-bottom">
													<td>Litecoin</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/litecoin.svg" alt="Litecoin" class="w-4 h-4"></td>
													<td>$173.86</td>
													<td class="text-red text-center">-7%</td>
													<td >$9,670,920,267</td>
													<td>54,873,584 LTC</td>
													<td >$430,524,000</td>
													<td>6.87% / 57</td>
													<td class="text-center">0.80%</td>
												</tr>
												<tr class="border-bottom">
													<td>EOS</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/eos.svg" alt="EOS" class="w-4 h-4"></td>
													<td>$13.394</td>
													<td class="text-green text-center">5%</td>
													<td >$8,420,143,033</td>
													<td>621,412,800 EOS</td>
													<td >$2,864,780,000</td>
													<td>53.25% / 6</td>
													<td class="text-center">11.56%</td>
												</tr>
												<tr class="border-bottom">
													<td>NEM</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/nem.svg" alt="NEM" class="w-4 h-4"></td>
													<td>$0.935049</td>
													<td class="text-red text-center">-11%</td>
													<td >$8,415,440,999</td>
													<td>8,999,999,488 XEM</td>
													<td >$66,061,000</td>
													<td>26.99% / 33</td>
													<td class="text-center" >0.24%</td>
												</tr>
												<tr class="border-bottom">
													<td>Stellar</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/stellar.svg" alt="Bitcoin" class="w-4 h-4"></td>
													<td>$0.467813</td>
													<td class="text-green text-center">2%</td>
													<td >$8,358,735,080</td>
													<td>17,867,683,840 XLM</td>
													<td >$370,297,000</td>
													<td>13.12% / 41</td>
													<td class="text-center">0.19%</td>
												</tr>
												<tr class="border-bottom">
													<td>NEO</td>
													<td  class="text-center"><img src="../assets/images/crypto-currencies/neo.svg" alt="Bitcoin" class="w-4 h-4"></td>
													<td>$118.61</td>
													<td class="text-red text-center">-9%</td>
													<td >$7,693,400,000</td>
													<td>65,000,000 NEO</td>
													<td >$318,308,000</td>
													<td>62.68% / 15</td>
													<td class="text-center" >0.00%</td>
												</tr>
												<tr class="border-bottom">
													<td>IOTA</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/iota.svg" alt="Bitcoin" class="w-4 h-4"></td>
													<td>$2.34</td>
													<td class="text-red text-center">-14%</td>
													<td >$6,504,100,862</td>
													<td>2,779,530,240 MIOTA</td>
													<td >$103,132,000</td>
													<td>23.27% / 7</td>
													<td class="text-center">-0.02%</td>
												</tr>
												<tr class="border-bottom">
													<td>Dash</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/dash.svg" alt="Dash" class="w-4 h-4"></td>
													<td>$747.222</td>
													<td class="text-red text-center">-8%</td>
													<td >$5,881,413,815</td>
													<td>7,833,738 DASH</td>
													<td >$96,147,900</td>
													<td>19.19% / 47</td>
													<td class="text-center">0.81%</td>
												</tr>
												<tr class="border-bottom">
													<td>Monero</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/monero.svg" alt="" class="w-4 h-4"></td>
													<td>$305.16</td>
													<td class="text-red text-center">-11%</td>
													<td >$4,778,157,533</td>
													<td>15,633,286 XMR</td>
													<td >$100,788,000</td>
													<td>11.88% / 44</td>
													<td class="text-center">0.78%</td>
												</tr>
												<tr class="border-bottom">
													<td>TRON</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/tron.svg" alt="" class="w-4 h-4"></td>
													<td>$0.067691</td>
													<td class="text-red text-center">-5%</td>
													<td >$4,450,560,896</td>
													<td>65,748,193,280 TRX</td>
													<td >$581,651,000</td>
													<td>142.69% / 4</td>
													<td class="text-center" >0.00%</td>
												</tr>
												<tr class="border-bottom">
													<td>Bitcoin Gold</td>
													<td class="text-center"><img src="../assets/images/crypto-currencies/bitcoinglod.svg" alt="" class="w-4 h-4"></td>
													<td>$181.39</td>
													<td class="text-red text-center">-7%</td>
													<td >$3,084,108,676</td>
													<td>16,779,700 BTG</td>
													<td >$199,652,000</td>
													<td>-25.44% / 3</td>
													<td class="text-center" >0.34%</td>
												</tr>
											</table>
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

		<!-- SPARKLINE JS-->
		<script src="../assets/js/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="../assets/js/circle-progress.min.js"></script>

		<!-- C3 CHART JS -->
		<script src="../assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="../assets/plugins/charts-c3/c3-chart.js"></script>

		<!-- INPUT MASK JS-->
		<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>
		

	</body>
</html>