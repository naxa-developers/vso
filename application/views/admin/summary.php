<!--main content start-->
	<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->




    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Different Color Custom Checkbox & Radio
          </header>
          <div class="panel-body">

            <br>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal bucket-form" action=" " method="POST">
                  <div class="form-group">
                    <label class="col-sm-3 ">Select Summary: </label>

                          <div class="row col-md-9">
                    <?php foreach($summary as $data){  ?>

                      <div class="col-sm-4 icheck ">

                        <div class="minimal single-row">
                          <div class="radio ">
                          <?php   if($data['eng_lang']==$selected['summary_list']){ ?>
                            <input tabindex="3" type="radio" value="<?php echo $data['eng_lang'] ?>"  name="summary" checked>
                        <?php  }else{ ?>
                            <input tabindex="3" type="radio" value="<?php echo $data['eng_lang'] ?>"  name="summary">
                        <?php  } ?>
                            <label><?php echo $data['nepali_lang'] ?></label>
                          </div>
                        </div>
                      </div>


                    <?php } ?>


                      </div>

                      <!--summary brief -->

                      <div class="row">
                             <div class="col-lg-12">
                                 <section class="panel">
                                     <header class="panel-heading">
                                      Summary
                                     </header>
                                     <div class="panel-body">
                                         <div class="form">

                                                 <div class="form-group">
                                                     <label class="col-sm-2 control-label col-sm-2">Summary</label>
                                                     <div class="col-sm-10">
                                                         <textarea class="form-control ckeditor" name="summary_data" rows="6"><?php echo $selected['summary'] ?></textarea>
                                                     </div>
                                                 </div>

                                         </div>
                                     </div>
                                 </section>
                             </div>
                         </div>
                      <!-- summary brief end -->





                  </div>
                  <br/>
                  <button type="submit" name="submit" class="btn btn-info">Update</button>
                </form>
              </div>

            </div>



          </section>
        </div>
      </div>










      <!-- page end-->
    </section>
  </section>
  <!--main content end-->
