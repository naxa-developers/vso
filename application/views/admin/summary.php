<!--main content start-->
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
              <div class="col-md-6">
                <form class="form-horizontal bucket-form" action=" " method="POST">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Select Summary: &nbsp&nbsp&nbsp&nbsp&nbsp </label>


                    <?php foreach($summary as $data){  ?>

                      <div class="col-sm-3 icheck ">

                        <div class="minimal single-row">
                          <div class="radio ">
                            <input tabindex="3" type="radio" value="<?php echo $data['eng_lang'] ?>"  name="summary">
                            <label><?php echo $data['nepali_lang'] ?></label>
                          </div>
                        </div>
                      </div>

                    <?php } ?>







                  </div>
                  <br/>
                  <button type="submit" name="submit" class="btn btn-info">Upload</button>
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
