



<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>


<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>






		<!--sub-menu-->
		<div class="icon-bar icon">
			<a class="active" href="mapt.php"><i class="fa fa-map"></i> Maps</a>
			<a href="#"><i class="fa fa-database"></i> Data</a>
			<a href="#"><i class="fa fa-bar-chart"></i> Charts</a>
			<a href="#"><i class="fa fa-clock-o"></i> Analyse</a>
			<a href="#"><i class="fa fa-upload"></i> Upload</a>
			<div class="right" style="float: right">
				<a href="#"><i class="fa fa-search"></i></a>
				<a href="#"><i class="fa fa-arrows"></i></a>
				<a href="#"><i class="fa fa-search-plus"></i></a>
				<a href="#"><i class="fa fa-search-minus"></i></a>
				<a href="#"><i class="fa fa-print"></i></a>
				<a href="#"><i class="fa fa-refresh"></i></a>
				<a href="#"><i class="fa fa-globe"></i></a>
				<a href="#"><i class="fa fa-trash"></i></a>
			</div>
		</div>

		<!--ends sub-menu-->
		<div id="over_map">
		<!-- <button class="layer-toggle" style="position:absolute;"><i class="fa fa-chevron-left" style="color: white";></i></button>
 -->
		<div class="panel panel-success">


			<div class="panel-body">
				<div>

					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#layers" aria-controls="home" role="tab" data-toggle="tab">Layers</a></li>
						<li role="presentation"><a href="#basemap" aria-controls="profile" role="tab" data-toggle="tab">Base Map</a></li>
					</ul>


					<!-- Tab panes -->
					<div class="tab-content">

</script>
						<div role="tabpanel" class="tab-pane active" id="layers">
							<div id="layers">

								<div id="content">



									<ul id="sitemap">



										<li><a><input type="checkbox" name="1" checked > Administrative Layers </a>
											<ul>
												<li><a ><input type="checkbox" name="1" value= "mun_changu" class="CheckBox" checked> Municipal Boundary</a></li>
												<li><a><input type="checkbox" name="1" value= "wards_changu" class="CheckBox" checked> Ward Boundary</a></li>
												<li><a><input type="checkbox" name="1"> Old VDCs</a></li>
												<li><a ><input type="checkbox" name="1"> Old ward Layers</a></li>

											</ul>
										</li>
										<li><a><input type="checkbox" name="1" value= "waterways_changu"  class="CheckBox" checked > River</a>
											<ul>
												<li><a><input type="checkbox" name="1"> Settlement Clusters</a></li>
												<li><a><input type="checkbox" name="1"> Households</a></li>


											</ul>
										</li>

										<li><a><input type="checkbox" name="1" value="road_changu" class="CheckBox" checked> Road</a>
											<ul>
												<li><a><input type="checkbox" name="1"> Sublayer 1</a></li>
												<li><a><input type="checkbox" name="1"> Sublayer 2</a></li>
												<li><a><input type="checkbox" name="1"> Sublayer 3</a></li>

											</ul>
										</li>

										<li><a><input type="checkbox" name="1" value="bus_park" class="CheckBox" checked> Open Spaces / Safe locations</a>
											<ul>
												<li><a><input type="checkbox" name="1"> Grounds</a></li>
												<li><a><input type="checkbox" name="1"> Parks</a></li>
												<li><a><input type="checkbox" name="1"> Open Spaces</a></li>

											</ul>
										</li>

										<li><a><input type="checkbox" name="1">Institution</a>
											<ul>
												<li><a><input type="checkbox" name="1">Private Organization</a>
													<ul>
														<li><a><input type="checkbox" name="1"> Category 1</a></li>
														<li><a><input type="checkbox" name="1"> Category 2</a></li>
														<li><a><input type="checkbox" name="1"> Hotels & Lodges</a></li>
														<li><a><input type="checkbox" name="1"> Financial Institutions</a></li>

													</ul>	</li>

													<li><a><input type="checkbox" name="1"> Government Organizations</a>
														<ul>
															<li><a><input type="checkbox" name="1"> Ward offices</a></li>
															<li><a><input type="checkbox" name="1"> Govt. Offices</a></li>
															<li><a><input type="checkbox" name="1"> Post offices etc.</a></li>


														</ul>
													</li>


												</ul>
											</li>

											<li><a><input type="checkbox" name="1">Urban Utilities</a>
												<ul>
													<li><a><input type="checkbox" name="1"> Roads</a></li>
													<li><a><input type="checkbox" name="1"> Rivers</a></li>
													<li><a><input type="checkbox" name="1"> Bus Park</a></li>
													<li><a><input type="checkbox" name="1"> Public Toilets</a></li>
													<li><a><input type="checkbox" name="1"> Public Taps</a></li>
													<li><a><input type="checkbox" name="1"> Falcha</a></li>
													<li><a><input type="checkbox" name="1"> Bus Chautari</a></li>

												</ul>
											</li>

											<li><a><input type="checkbox" name="1">Educational Institutions</a>
												<ul>
													<li><a><input type="checkbox" name="1"> Schools</a></li>
													<li><a><input type="checkbox" name="1"> Colleges</a></li>
													<li><a><input type="checkbox" name="1"> Training Centers</a></li>

												</ul>
											</li>

											<li><a><input type="checkbox" name="1"> Health Centers</a>
												<ul>
													<li><a><input type="checkbox" name="1"> Health Posts</a></li>
													<li><a><input type="checkbox" name="1"> Hospitals</a></li>
													<li><a><input type="checkbox" name="1"> Pharmacies</a></li>
													<li><a><input type="checkbox" name="1"> Health Centers</a></li>

												</ul>
											</li>

											<li><a><input type="checkbox" name="1">Development Projects </a>
												<ul>
													<li><a><input type="checkbox" name="1"> Construction Sites</a></li>
													<li><a><input type="checkbox" name="1"> Ongoing Projects</a></li>

												</ul>
											</li>

											<li><a><input type="checkbox" name="1"> Heritage Sites</a>
												<ul>
													<li><a><input type="checkbox" name="1"> Temples</a></li>
													<li><a><input type="checkbox" name="1"> Gompas</a></li>
													<li><a><input type="checkbox" name="1"> Monasteries</a></li>
													<li><a><input type="checkbox" name="1"> Pati/Pauwa</a></li>
													<li><a><input type="checkbox" name="1"> H. Sites</a></li>

												</ul>
											</li>
											<li><a><input type="checkbox" name="1">Security Forces</a>
												<ul>
													<li><a><input type="checkbox" name="1"> Police Station</a></li>
													<li><a><input type="checkbox" name="1"> Army Camps</a></li>

												</ul>
											</li>



										</ul>



									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="basemap">
								<div class="base">
									<a> <img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>
									<a><img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>
									<a><img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>
									<a><img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>

								</div>


							</div>
						</div>

					</div>


				</div>
			</div>
<!--
<div id="over_map">
		<button class="layer-toggle" style="position:absolute;"><i class="fa fa-chevron-left" style="color: white";></i></button>
 -->


		</div>



	<script>
		/*-- LayerJS--*/
		$(document).ready(function(){
			$(".layer-toggle").click(function(){
				$(".panel.panel-success").toggle(1000);
				$(".layer-toggle [i]").toggleClass("fa-chevron-right");

			});

		});
	</script>
