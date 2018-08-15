<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<style type="text/css">
.input-group-addon {
    position: absolute;
    right: 10px;
    bottom: 13px;
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

/* search */
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
/*  padding: 12px 20px 12px 40px; /* Add some padding */
*/  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

</style>



<div class="container" >
	<!-- search bar -->
	<div class="publish-srch">
    <div class="row">



    <div class="col-md-6 col-md-offset-3">
          <div class="input-group">
            <input class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search here...">

          </div>


        </div>

        <div class="col-md-4">
           <select class="custom-select multiselect-icon" id="pub_cat">

                   <option value=0>ALL</option>
                   <option value="muni_pub">Municipal Publications</option>
                   <option value="law_act">Laws and Acts</option>
                   <option value="plan_politics">Plans and Policies</option>
                   <option value="others">Others</option>
           </select>
         </div>



</div>

<!-- data Column -->
<div class="row" id="filter_pub">


    <?php foreach($data as $d ){ ?>
    <div class="col-md-6 myUL" >
     <div class="col-md-12 publish">
      <div class="row">
       <div class="col-md-4"><img src="<?php echo $d['photo']?>" id="publish"> </div>
       <div class="col-md-8"><h5 id="<?php echo $d['id'] ?>"><?php echo $d['title']?></h5>
        <p class="publish-des"><?php echo $d['summary']?></p>
      <a href="<?php echo base_url()?>download?file=<?php echo $d['file']?> && title=<?php echo $d['title']?> "><button type="button" class="btn btn-sm pull-right btn-primary"><i class="fa fa-download"></i> Download</button></a>
      </div>
    </div>
  </div>
  </div>
  <?php } ?>


</div>


<!-- data Column -->


</div>
</div>


<script type="text/javascript">

function myFunction() {

  // Declare variables
  var input, filter, div, h5, a, i;
  input = document.getElementById('myInput');

  filter = input.value.toUpperCase();

  div = document.getElementsByClassName("myUL");

  h5 = document.getElementsByTagName('h5');
  //console.log(h5);

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < h5.length; i++) {
      // a = h5[i].getElementsByTagName("a")[0];
       //console.log(h5[i].innerHTML.toUpperCase().indexOf(filter));
      if (h5[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
      // console.log('if');
          $("#"+h5[i].id).parent().parent().parent().parent().css('display','');
      } else {
//console.log('else');
              $("#"+h5[i].id).parent().parent().parent().parent().css('display','none');
      }
  }
}

$('#pub_cat').change(function(){

var category = $(this).val();
$.ajax({
  type: "GET",
  //  data: name,
  url:  "NewsletterController/get_category_pub?cat="+category,
  beforeSend: function() {
      $('#filter_pub').empty();
      $('#filter_pub').html('<h2>Loading</h2>');
  },
  complete: function() {
    // $('#filter_pub').empty();
    // $('#filter_pub').append('<h2>Loading</h2>');
  },
  success: function (result) {

    $('#filter_pub').html('');


  var data = JSON.parse(result);
  console.log(data.length);
//console.log (data[0].summary);
  var i;


  for(i=0; i<data.length; i++){
      var div_pub = "";
    console.log(data.length);

  div_pub +='<div class="col-md-6 myUL" >';
    div_pub +='<div class="col-md-12 publish">';
    div_pub +='<div class="row">';
     div_pub +='<div class="col-md-4"><img src="'+data[i].photo+'" id="publish"> </div>';
    div_pub +='<div class="col-md-8"><h5 id="'+data[i].id+'">'+data[i].title+'</h5>';
     div_pub +='<p class="publish-des">'+data[i].summary+'</p>';
  div_pub +='<a href="<?php echo base_url()?>download?file='+data[i].file+' && title='+data[i].title+'"><button type="button" class="btn btn-sm pull-right btn-primary"><i class="fa fa-download"></i> Download</button></a>';
    div_pub +='</div>';
  div_pub +='</div>';
div_pub +='</div>';
div_pub +='</div>';

$('#filter_pub').append(div_pub);
console.log(div_pub);
}


  }

})
});

</script>
