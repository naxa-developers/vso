<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
    <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Edit Ghatana
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="">


              <?php


             for($i=0;$i<sizeof($fields);$i++){






             if($fields[$i]=='id'){

                ?>




            <?php  }else{

            ?>





              <div class="form-group">
                  <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>
                  <div class="col-sm-6">
                      <input type="text" value="<?php echo $e_data[$fields[$i]]  ?>"  name="<?php echo $fields[$i];?>" class="form-control round-input">
                  </div>
              </div>


 <?php }} ?>








                <div class="col-md-6">
              <button type="submit" name="submit" class="btn btn-info">Submit</button>

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
</section>
<!--main content end-->
