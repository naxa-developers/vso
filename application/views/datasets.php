
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/datasets.css">
<style type="text/css">

#page-wrap {
	margin: 0 auto;
}

.list-group-item:first-child {
	border-top-left-radius: 0.25rem !important;
	border-top-right-radius: 0.25rem !important;
	border-bottom-left-radius: 0.25rem !important;
}


.datset-page{
	margin: 50px;
}

.datset-page .spacing button{
	margin: 10px auto;
	width: 98%;
}

p.about {
	font-size: 14px;
    color: #222;
   }

.dataset-head{
	color: #222;
	font-weight: 600;
}
</style>


<div class="datset-page">
	<div class="container">

		<div class="row">

			<!-- panel -->
			<div class="col-sm-3">
				<div class="list-group dataset">
					<a href="#" class="list-group-item list-group-item-action active ">
						Categories
					</a>
					<a href="#" class="list-group-item list-group-item-action"> <p class="check" style="margin-bottom: 0rem">
						<input type="checkbox" id="test1" />
						<label for="test1">Household</label>     <span class="badge badge-primary badge-pill pull-right">14</span>

					</p></a>
					<a href="#" class="list-group-item list-group-item-action"> <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test2"  />
						<label for="test2">Educational Institution</label>     <span class="badge badge-primary badge-pill pull-right">14</span>

					</p></a>
					<a href="#" class="list-group-item list-group-item-action"> <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test3"  />
						<label for="test3">Government Institution</label>     <span class="badge badge-primary badge-pill pull-right">14</span>

					</p></a>
					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test4" />
						<label for="test4">Hotel,Homestay</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test5" />
						<label for="test5">Banking Institution</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test6" />
						<label for="test6">Heritage Sites</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test7" />
						<label for="test7">Security Forces</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test8" />
						<label for="test8">Health Institution</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test9" />
						<label for="test9">Private Organization</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test10" />
						<label for="test10">Religious Places</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test12" />
						<label for="test12">Open spaces</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test13" />
						<label for="test13">Other Public Places</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test14" />
						<label for="test14">Risks Zones</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>

					<a href="#" class="list-group-item list-group-item-action ">   <p  style="margin-bottom: 0rem">
						<input type="checkbox" id="test15" />
						<label for="test15">Construction Activities</label>     <span class="badge badge-primary badge-pill pull-right">14</span>
					</p></a>
				</div>

				<div class="spacing text-center">
					<button class="btn btn-primary btn-sm center-block">Apply</button>
				</div>
			</div><!--end panel-->
			<div class="col-sm-9">

				<!--advance Search starts-->
				<div class="row">
					<div class="col-md-10">
						<div class="row no-gutters">
							<div class="col">
								<input class="form-control border-secondary border-right-0 rounded-0" type="search" id="myInput" onkeyup="myFunction()"  >
							</div>
							<div class="col-auto">
								<button class="btn btn-secondary border-left-0 rounded-0 rounded-right" type="button">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>

						<div class="found text-center" style="font-size: 12px;"><b>75 Dataset(s) Found.</b></div>
					</div>

				</div>
				<!--advance Search ends-->



<?php foreach ($data as $d) { ?>


				<div class="row">


					<div class="col-sm-8 myUL"> <h5 id="<?php echo $d['id']?>" class="dataset-head"><?php echo $d['category_name']?></h5>

						<p class="small" >
							<span class="fa fa-eye"></span> 71 views
							<span class="fa fa-save"></span> 0 download
							<span class="fa fa-calendar"></span> Last update
							2012-01-09 T11:59:0
						</p>
						<p class="about">
							<?php echo $d['summary'] ?>
						</p>
						<button class="btn btn-light btn-sm">KML</button>
						<a href="<?php echo base_url()?>get_csv?tbl=<?php echo $d['category_table']?>"><button class="btn btn-light btn-sm">CSV</button></a>
						<button class="btn btn-light btn-sm">Geojson</button>

							<hr>

					</div>

				</div>

		<?php	} ?>
							<div class="col-md-10">
								<ul class="pagination pull-right" style="padding-top: 20px; padding-bottom: 30px;">
									<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</div>
						</div>


					</div>

				</div>
			</div>
			<script type="text/javascript">

    	// search from main page

			var search ='<?php echo $search ?>';


			if(search != 0 ){
				searchFunction(search);


				function searchFunction(search) {
	 			 // Declare variables
	 			var   filter, div, h5, a, i;


	 		 	 filter = search.toUpperCase();
				 	console.log(filter);

	 			 div = document.getElementsByClassName("myUL");

	 			 h5 = document.getElementsByTagName('h5');
	 			 console.log(h5);
	 			 console.log(div);
	 			 console.log(filter);
	 			// console.log(input);

	 			 // Loop through all list items, and hide those who don't match the search query
	 			 for (i = 0; i < h5.length; i++) {
	 					 // a = h5[i].getElementsByTagName("a")[0];
	 						//console.log(h5[i].innerHTML.toUpperCase().indexOf(filter));
	 					 if (h5[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
	 						console.log('if');
	 							 $("#"+h5[i].id).parent().css('display','');
	 					 } else {
	 		 console.log('else');
	 									 $("#"+h5[i].id).parent().css('display','none');
	 					 }
	 			 }
	 		 }

		 }

		// search from main page end

			function myFunction() {
			  // Declare variables
			 var  input, filter, div, h5, a, i;
			  input = document.getElementById('myInput');

			  filter = input.value.toUpperCase();

			  div = document.getElementsByClassName("myUL");

			  h5 = document.getElementsByTagName('h5');
			  console.log(h5);
			  console.log(div);
			  console.log(filter);
			  console.log(input);

			  // Loop through all list items, and hide those who don't match the search query
			  for (i = 0; i < h5.length; i++) {
			      // a = h5[i].getElementsByTagName("a")[0];
			       //console.log(h5[i].innerHTML.toUpperCase().indexOf(filter));
			      if (h5[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
			       console.log('if');
			          $("#"+h5[i].id).parent().css('display','');
			      } else {
			console.log('else');
			              $("#"+h5[i].id).parent().css('display','none');
			      }
			  }
			}

			</script>
