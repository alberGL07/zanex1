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
									<h1 class="page-title">Chart</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Chart</li>
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

							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">c3 charts</h3>
										</div>
										<div class="card-body">
											<div >
												<div class="example example-bg">
													<div class="example-column example-column-2">
														<div class="card">
															<div class="card-header">
																<h3 class="card-title">Chart name</h3>
															</div>
															<div class="card-body">
																<div id="chart-combination" class="chartsh"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="highlight mb-0">
	<pre><code class="language-html" data-bs-lang="html">
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
			<span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Chart name<span class="nt">&lt;/h3&gt;</span>
		<span class="nt">&lt;/div&gt;</span>
		<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
			<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"chart-combination"</span> <span class="na">class=</span><span class="s">"chartsh"</span><span class="nt">&gt;&lt;/div&gt;</span>
		<span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;script&gt;</span>
		<span class="nx">require</span><span class="p">([</span><span class="s1">'c3'</span><span class="p">,</span> <span class="s1">'jquery'</span><span class="p">],</span> <span class="kd">function</span><span class="p">(</span><span class="nx">c3</span><span class="p">,</span> <span class="nx">$</span><span class="p">)</span> <span class="p">{</span>
			<span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">ready</span><span class="p">(</span><span class="kd">function</span><span class="p">(){</span>
				<span class="kd">var</span> <span class="nx">chart</span> <span class="o">=</span> <span class="nx">c3</span><span class="p">.</span><span class="nx">generate</span><span class="p">({</span>
				<span class="na">bindto</span><span class="p">:</span> <span class="s1">'#chart-combination'</span><span class="p">,</span> <span class="c1">// id of chart wrapper</span>
				<span class="na">data</span><span class="p">:</span> <span class="p">{</span>
					<span class="na">columns</span><span class="p">:</span> <span class="p">[</span>
					<span class="c1">// each columns data</span>
						<span class="p">[</span><span class="s1">'data1'</span><span class="p">,</span> <span class="mf">100</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">150</span><span class="p">,</span><span class="mf">240</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">220</span><span class="p">],</span>
						<span class="p">[</span><span class="s1">'data2'</span><span class="p">,</span> <span class="mf">250</span><span class="p">,</span> <span class="mf">200</span><span class="p">,</span> <span class="mf">220</span><span class="p">,</span> <span class="mf">400</span><span class="p">,</span> <span class="mf">250</span> <span class="p">,</span> <span class="mf">350</span><span class="p">]'</span>
						<span class="p">[</span><span class="s1">'data3'</span><span class="p">,</span> <span class="mf">100</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">150</span><span class="p">,</span><span class="mf">240</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">220</span><span class="p">]</span>

					<span class="p">],</span>
					<span class="na">type</span><span class="p">:</span> <span class="s1">'bar'</span><span class="p">,</span> <span class="c1">// default type of chart</span>

					<span class="na">colors</span><span class="p">:</span> <span class="p">{</span>
						<span class="s1">'data1'</span><span class="p">:</span> <span class="nx">Zanex</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"orange"</span><span class="p">],</span>
						<span class="s1">'data2'</span><span class="p">:</span> <span class="nx">Zanex</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"pink"</span><span class="p">]</span>
						<span class="s1">'data3'</span><span class="p">:</span> <span class="nx">Zanex</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"teal"</span><span class="p">]</span>
					<span class="p">},</span>
					<span class="na">names</span><span class="p">:</span> <span class="p">{</span>
					<span class="c1">// name of each serie</span>
						<span class="s1">'data1'</span><span class="p">:</span> <span class="s1">'Marketing'</span><span class="p">,</span>
						<span class="s1">'data2'</span><span class="p">:</span> <span class="s1">'Development'</span>
						<span class="s1">'data3'</span><span class="p">:</span> <span class="s1">'Sales'</span>
					<span class="p">}</span>
				<span class="p">},</span>
				<span class="na">axis</span><span class="p">:</span> <span class="p">{</span>
					<span class="na">x</span><span class="p">:</span> <span class="p">{</span>
					<span class="na">type</span><span class="p">:</span> <span class="s1">'category'</span><span class="p">,</span>
					<span class="c1">// name of each category</span>
					<span class="na">categories</span><span class="p">:</span> <span class="p">[</span><span class="s1">'2007-2008'</span><span class="p">,</span> <span class="s1">'2009-2010'</span><span class="p">,</span> <span class="s1">'2011-2012'</span><span class="p">,</span> <span class="s1">'2013-2014'</span><span class="p">,</span> <span class="s1">'2015-2016'</span><span class="p">,</span> <span class="s1">'2017-2018'</span><span class="p">]</span>
					<span class="p">},</span>
				<span class="p">},</span>
				<span class="na">bar</span><span class="p">:</span> <span class="p">{</span>
					<span class="na">width</span><span class="p">:</span> <span class="kc">50</span>
				<span class="p">},</span>
				<span class="na">legend</span><span class="p">:</span> <span class="p">{</span>
					<span class="na">show</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span> <span class="c1">//hide legend</span>
				<span class="p">},</span>
				<span class="na">padding</span><span class="p">:</span> <span class="p">{</span>
					<span class="na">bottom</span><span class="p">:</span> <span class="mi">0</span><span class="p">,</span>
					<span class="na">top</span><span class="p">:</span> <span class="mi">0</span>
				<span class="p">},</span>
			<span class="p">});</span>
		<span class="p">});</span>
	<span class="p">});</span>
	<span class="nt">&lt;/script&gt;</span></code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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

		<!-- CHARTS JS -->
		<script src="../assets/js/charts.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>


	</body>
</html>