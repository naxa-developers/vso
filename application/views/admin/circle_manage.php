<!--main content start-->
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css" /> -->
<!--

<link href="<?php echo base_url()?>assets/admin/css/ion.rangeSlider.css" rel="stylesheet" />
<link href="<?php echo base_url()?>assets/admin/css/ion.rangeSlider.skinFlat.css" rel="stylesheet"/>

<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap-colorpicker.js"></script>


<script src="<?php echo base_url()?>assets/admin/js/ion.rangeSlider.min.js" type="text/javascript"></script> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <b>Manage Marker Style</b>
             <span class="tools pull-right">
                        <a href=""><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-map-marker"></i> View In Map</button></a>
                        </span>
          </header>
          <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="">


              <!-- start -->
              <!-- <input id="range_5" type="text" name="range_5" value="" /> -->


              <!-- end -->







              <div class="form-group">
                <label class="control-label col-md-3">Opacity</label>
                <div class="col-md-9">
                  <div class="input-group" style="width: 150px">
        <span class="input-group-btn "><button type="button" class="btn btn-default value-control opac" data-target="font-size"  data-action="minus"><span class="glyphicon glyphicon-minus"></span></button></span>
        <input type="text" name="opacity" value="<?php echo $style_array['opacity'] ?>" min="0" max="1" class="form-control" id="font-size" >
        <span class="input-group-btn "><button type="button" class="btn btn-default value-control opac" data-action="plus" data-target="font-size"><span class="glyphicon glyphicon-plus"></span></button></span>
    </div>
                  <span class="help-block">
                    with max value: 1
                  </span>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3">Fill Opacity</label>
                <div class="col-md-9">
                         <div class="input-group" style="width: 150px">
        <span class="input-group-btn"><button type="button" class="btn btn-default value-control fillopac" data-action="minus" data-target="fillopac"><span class="glyphicon glyphicon-minus"></span></button></span>
        <input type="text" name="fillOpacity" value="<?php echo $style_array['fillOpacity'] ?>" class="form-control" id="fillopac">
        <span class="input-group-btn"><button type="button"  class="btn btn-default value-control fillopac" data-action="plus" data-target="fillopac"><span class="glyphicon glyphicon-plus"></span></button></span>
    </div>
                  <span class="help-block">
                    with max value: 1
                  </span>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3">Weight</label>
                <div class="col-md-9">
                  <div id="spinner3">
                                     <div class="input-group" style="width: 150px">
        <span class="input-group-btn"><button type="button" class="btn btn-default value-control weight" data-action="minus" data-target="weight"><span class="glyphicon glyphicon-minus"></span></button></span>
        <input type="text" name="weight" min="1" max="10" value="<?php echo $style_array['weight'] ?>" class="form-control" id="weight">
        <span class="input-group-btn"><button type="button" class="btn btn-default value-control weight" data-action="plus" data-target="weight"><span class="glyphicon glyphicon-plus"></span></button></span>
    </div>
                  <span class="help-block">
                    with max value: 10
                  </span>
                </div>
              </div>
              </div>



              <div class="form-group">
                <label class="control-label col-md-3">Radius</label>
                <div class="col-md-9">
                  <div id="spinner3">
                                     <div class="input-group" style="width: 150px">
              <span class="input-group-btn"><button type="button" class="btn btn-default value-control radius" data-action="minus" data-target="Radius"><span class="glyphicon glyphicon-minus"></span></button></span>
              <input type="text" name="radius" min="1" max="10" value="<?php echo $style_array['weight'] ?>" class="form-control" id="radius">
              <span class="input-group-btn"><button type="button" class="btn btn-default value-control radius" data-action="plus" data-target="radius"><span class="glyphicon glyphicon-plus"></span></button></span>
              </div>
                  <span class="help-block">
                    with max value: 10
                  </span>
                </div>
              </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3">Color</label>
                <div class="col-md-4 col-xs-11">
                  <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-append colorpicker-default color">
                    <input type="color" name="color" value="<?php echo $style_array['color'] ?>">


                  </div>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3">Fill Color</label>
                <div class="col-md-4 col-xs-11">
                  <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-append colorpicker-default color">
                    <input type="color" name="fillColor" value="<?php echo $style_array['fillColor'] ?>">


                  </div>
                </div>
              </div>






              <div class="col-md-6">
                <button type="submit" name="submit" class="btn btn-success" style="background-color: #1fb5ad;border-color: #1fb5ad;">Update</button>

              </div>



            </div>


          </div>
        </form>
      </div>
    </section>




  </div>
</div>








<!-- page end-->
</section>
<!--main content end-->




<script>

$(document).ready(function(){


  $(".opac").on('click',function(){
    var action = $(this).attr('data-action')
    var target = $(this).attr('data-target')
    var value  = parseFloat($('[id="'+target+'"]').val());

   // console.log('action');
   // console.log(action);
   // //console.log(target);
   // console.log(value);

    if ( action == "plus" ) {

      value=value+0.1;

      var val=Math.round(value*100)/100;

      console.log(val);



    }else{

        value=value-0.1;
         var val=Math.round(value*100)/100;


     }
    // $('[id="'+target+'"]').val(value);
    $("#font-size").val(val);
});





  $(".fillopac").on('click',function(){
    var action = $(this).attr('data-action')
    var target = $(this).attr('data-target')
    var value  = parseFloat($('[id="'+target+'"]').val());

   // console.log('action');
   // console.log(action);
   // //console.log(target);
   // console.log(value);

    if ( action == "plus" ) {

      value=value+0.1;
       var val=Math.round(value*100)/100;


       console.log(value);
    }else{

        value=value-0.1;
         var val=Math.round(value*100)/100;

     }
    // $('[id="'+target+'"]').val(value);
    $("#fillopac").val(val);
});

    $(".weight").on('click',function(){
    var action = $(this).attr('data-action')
    var target = $(this).attr('data-target')
    var value  = parseFloat($('[id="'+target+'"]').val());

   // console.log('action');
   // console.log(action);
   // //console.log(target);
   // console.log(value);

    if ( action == "plus" ) {

      value=value+1;
       var val=Math.round(value*100)/100;


       console.log(value);
    }else{

        value=value-1;
         var val=Math.round(value*100)/100;

     }
    // $('[id="'+target+'"]').val(value);
    $("#weight").val(val);
});

$(".radius").on('click',function(){
var action = $(this).attr('data-action')
var target = $(this).attr('data-target')
var value  = parseFloat($('[id="'+target+'"]').val());

// console.log('action');
// console.log(action);
// //console.log(target);
// console.log(value);

if ( action == "plus" ) {

  value=value+1;
   var val=Math.round(value*100)/100;


   console.log(value);
}else{

    value=value-1;
     var val=Math.round(value*100)/100;

 }
// $('[id="'+target+'"]').val(value);
$("#radius").val(val);
});



});

// $(document).on('click','.value-control1',function(){
//     var action1 = $(this).attr('data-action')
//     var target1 = $(this).attr('data-target')
//     var value1  = parseFloat($('[id="'+target1+'"]').val());
//     if ( action1 == "plus" ) {
//       value=value+0.1;
//     }
//     if ( action1 == "minus" ) {
//        value=value-0.1;
//     }
//     $('[id="'+target1+'"]').val(value)
// })

// $(document).on('click','.value-control',function(){
//     var action = $(this).attr('data-action')
//     var target = $(this).attr('data-target')
//     var value  = parseFloat($('[id="'+target+'"]').val());
//     if ( action == "plus" ) {
//       value++;
//     }
//     if ( action == "minus" ) {
//       value--;
//     }
//     $('[id="'+target+'"]').val(value)
// })
</script>
