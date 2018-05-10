!--main content start-->
<!-- <script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script> -->
<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                  Different Color Custom Checkbox & Radio
                </header>
                <div class="panel-body">

                  <div class="form-group">
                      <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Selects</label>
                      <div class="col-lg-6">
                          <select class="form-control m-bot15">
                            <?php foreach($tbl_name as $tbl){ ?>
                              <option value="<?php echo $tbl['category_table'] ?>"><?php echo $tbl['category_name'] ?></option>

                            <?php } ?>
                          </select>


                      </div>
                  </div>


                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal bucket-form" method="get">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Checkboxes</label>

                                    <div class="col-sm-9 icheck ">

                                        <div class="minimal  col-md-4">
                                            <div class="checkbox ">
                                                <input type="checkbox" name="a134[]" value="abc" id = "ch1" class="chbox"> I have a bike<br>
                                                  <input type="checkbox" name="a134[]" value="a21" class="ch1"   hidden><br>

                                            </div>
                                        </div>
                                        <br/>
                                        <input type="submit" name="submit" value="submit">



                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <br>
                    <br>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- kjljlkjklj -->








    <!-- page end-->
  </section>
</section>
<!--main content end-->



<!-- <!DOCTYPE html>
<html>

<body>

<form action=" " method="POST" >
  <input type="checkbox" name="a134[]" value="abc" id = "ch1" class="chbox"> I have a bike<br>
  <input type="checkbox" name="a134[]" value="a21" class="ch1"   hidden><br>

  <input type="checkbox" name="a2[]" value="abcd" id = "ch2" class="chbox ch2"> I have a bike<br>
  <input type="checkbox" name="a2[]" value="a2" class="ch2" hidden><br>
  <input type="submit" name="submit" value="submit">
</form> -->


<script>

$(document).ready(function(){



$('.chbox').on('click',function(){

//  console.log($(this).is(':checked'));
if($(this).is(':checked')){
  //console.log('checked');

var Class = $(this).attr('id');
console.log(Class);
$('.'+Class).attr('checked',true);


}else{
console.log('not-checked');
$('.'+Class).attr('checked',false);
}




});





});


</script>


</body>
</html>
