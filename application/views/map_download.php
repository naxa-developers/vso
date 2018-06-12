
<style>
.basemap img.mapp-image{
	width: 100%;
	height: 200px;
	object-fit: cover;
	background-repeat: no-repeat;
}
.basemap{
	margin: 20px auto;
}
#map_download{
	margin: 30px auto;
}
.text-block {
	position: absolute;
	top: 5px;
	right: 50px;
	background-color: rgba(0,0,0,0.5);
	color: white;
	padding-left: 10px;
	padding-right: 10px;
}

/* Style the Image Used to Trigger the Modal */
#myImg {
	border-radius: 5px;
	cursor: pointer;
	transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}
.input-group-addon {
    position: absolute;
    right: 10px;
    bottom: 10px;
    z-index: 2;
  }

.publish-srch {
    padding: 35px;
    border-bottom: 1px solid #eee;
}
.publish{
  padding: 35px;
}
.publish img{
  width: 100%;
  height: auto;
  object-fit: cover;
}
.publish h5{
  font-weight: bold;
  border-bottom: 1px solid #ccc;
}

.publish .publish-des{
  text-align: justify;
}
p.para {
    font-size: 14px;
    margin-top: -15px;
}
</style>

<div id="map_download">
	<div class="container">
		<!-- search bar -->
		<div class="publish-srch">
			<div class="row">
				<div class="col-md-4">
					<div class="input-group">
						<input class="form-control"
						placeholder="Search here...">
						<div class="input-group-addon" ><i class="fa fa-search"></i></div>
					</div>
				</div>

				<div class="col-md-4">

					<div class="form-group">
						<select class="custom-select">
							<option value="0" selected disabled>Document Type</option>
							<option value="3" >Research</option>
							<option value="1" >Plans and Policies</option>
							<option value="2" >Papers</option>
						</select>
					</div>
				</div>
				<div class="col-md-4"><div class="form-group">
					<select class="custom-select">
						<option value="0" selected disabled>Select Document</option>
						<option value="3" >Document 1</option>
						<option value="1" >Document 2</option>
						<option value="2" >Document 3</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3 basemap"><img src="assets/img/bm.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality" name="img1"><h6 class="base ">Street Map</h6> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
		<div class="col-sm-3 basemap"><img src="assets/img/bm1.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality" name="img2"><p class="base ">Satellite Map</p> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
		<div class="col-sm-3 basemap"><img src="assets/img/bm2.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality" name="img3"><p class="base ">Dark Map</p> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
		<div class="col-sm-3 basemap"><img src="assets/img/bm4.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality"><p class="base ">Outdoor Map</p> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
		<div class="col-sm-3 basemap"><img src="assets/img/bm.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality"><p class="base ">Street Map</p> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
		<div class="col-sm-3 basemap"><img src="assets/img/bm1.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality"><p class="base ">Satellite Map</p> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
		<div class="col-sm-3 basemap"><img src="assets/img/bm2.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality"><p class="base ">Dark Map</p> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
		<div class="col-sm-3 basemap"><img src="assets/img/bm4.jpg" class="mapp-image" id="myImg" alt="cangunarayan municipality"><p class="base ">Outdoor Map</p> <p class="para">Lorem ipsum dolor sit amet and wer  para  que consectetur adipiscing elit.</p>

		</div>
	</div>

</div>
</div>
