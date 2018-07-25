
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
.myUL:hover .edit {
	display: block;
}

.edit {
	/*padding-top: 128px; */
    /* padding-right: 36px; */
    position: absolute;
    right: 36px;
    top: 120px;
    display: none;
    color: red;
    background-color: #fff;
    
}

.edit a {
	color: #000;
}
i.fa.fa-download.dwn {
    background-color: #1f5cb2;
    color: #fff;
    padding: 7px;
}
/**/
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}



/* Add Animation */
.modal-content {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
.downlink{
	background-color: #1f5cb2;
	color: #fff;
	margin-left: 50px;
	padding: 10px;
}
.downlink:hover{
	color:#e8e8e8;
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
		<img src="<?php echo $v['photo']  ?>" class="mapp-image" id="myImg" alt="cangunarayan municipality" name="img1">
		<!-- The Modal -->

			<div class="edit"><a href="#"><i class="fa fa-download dwn"></i></a></div>
			<h6 class="base" id="<?php echo $v['id']  ?>"><?php echo $v['title']  ?></h6>
			 <p class="para"><?php echo $v['summary']  ?></p>

<div id="myModal" class="modal" style="overflow:hidden">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div class="downlk"><a href=""><i class="fa fa-download fa-2x downlink"></i></a>
  </div>
  
</div>

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
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName('mapp-image');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
$('.mapp-image').on('click',function(){ 
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>