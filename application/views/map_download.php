
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
	    height: 150px;
    width: 250px
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
    margin-top: -5px;
}
h6.base {
    font-weight: bold;
}
</style>

<div id="map_download">
	<div class="container">
		<!-- search bar -->
		<div class="publish-srch">
			<div class="row">
				<div class="col-md-4">
					<div class="input-group">
						<input class="form-control" placeholder="Search here..." id="myInput" onkeyup="myFunction()">
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

<?php  foreach ($data as $v){ ?>

		<div class="col-sm-3 basemap myUL">
		<a href="<?php echo $v['photo']?>"  target="_blank"><img src="<?php echo $v['photo']  ?>" class="mapp-image" id="myImg" alt="cangunarayan municipality" name="img1"></a>
			<h6 class="base" id="<?php echo $v['id']  ?>"><?php echo $v['title']  ?></h6>
			 <p class="para"><?php echo $v['summary']  ?></p>

		</div>

	<?php } ?>

	</div>

	

</div>
</div>

<script type="text/javascript">

function myFunction() {
	// Declare variables
 var  input, filter, div, h5, a, i;
	input = document.getElementById('myInput');

	filter = input.value.toUpperCase();



	h6 = document.getElementsByTagName('h6');


	// Loop through all list items, and hide those who don't match the search query
	for (i = 0; i < h6.length; i++) {
			// a = h5[i].getElementsByTagName("a")[0];
			 //console.log(h5[i].innerHTML.toUpperCase().indexOf(filter));
			if (h6[i].innerHTML.toUpperCase().indexOf(filter) > -1) {

					$("#"+h6[i].id).parent().css('display','');
			} else {

							$("#"+h6[i].id).parent().css('display','none');
			}
	}
}

</script>
