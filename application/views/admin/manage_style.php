<!--main content start-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/colorpicker.css" />
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap-colorpicker.js"></script>
<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Form Elements
          </header>
          <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="">










              <div class="form-group">
                <label class="control-label col-md-3">Opacity</label>
                <div class="col-md-9">
                  <div id="spinner3">
                    <div class="input-group" style="width:150px;">
                      <input type="text" name="opacity" class="spinner-input form-control" maxlength="3" >
                      <div class="spinner-buttons input-group-btn">
                        <button type="button" class="btn btn-default spinner-up">
                          <i class="fa fa-angle-up"></i>
                        </button>
                        <button type="button" class="btn btn-default spinner-down">
                          <i class="fa fa-angle-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <span class="help-block">
                    with max value: 10
                  </span>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3">Fill Opacity</label>
                <div class="col-md-9">
                  <div id="spinner3">
                    <div class="input-group" style="width:150px;">
                      <input type="text" name="fillOpacity" class="spinner-input form-control" maxlength="3" >
                      <div class="spinner-buttons input-group-btn">
                        <button type="button" class="btn btn-default spinner-up">
                          <i class="fa fa-angle-up"></i>
                        </button>
                        <button type="button" class="btn btn-default spinner-down">
                          <i class="fa fa-angle-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <span class="help-block">
                    with max value: 10
                  </span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Weight</label>
                <div class="col-md-9">
                  <div id="spinner3">
                    <div class="input-group" style="width:150px;">
                      <input type="text" name="weight" class="spinner-input form-control" maxlength="3" >
                      <div class="spinner-buttons input-group-btn">
                        <button type="button" class="btn btn-default spinner-up">
                          <i class="fa fa-angle-up"></i>
                        </button>
                        <button type="button" class="btn btn-default spinner-down">
                          <i class="fa fa-angle-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <span class="help-block">
                    with max value: 10
                  </span>
                </div>
              </div>




              <div class="form-group">
                  <label class="control-label col-md-3">Color</label>
                  <div class="col-md-4 col-xs-11">
                      <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-append colorpicker-default color">
                        <input type="color" name="color" value="#ff0000">


                      </div>
                  </div>
              </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Fill Color</label>
                                <div class="col-md-4 col-xs-11">
                                    <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-append colorpicker-default color">
                                      <input type="color" name="fillColor" value="#ff0000">


                                    </div>
                                </div>
                            </div>

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

<script>
//$(".spinner-input").val(5);
</script>
