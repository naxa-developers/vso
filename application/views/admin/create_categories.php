<style>
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}

</style>


<!--main content start-->
<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <b> Add Category</b>
          </header>
          <div class="panel-body">
            <div class="position-center">
              <form role="form" method="POST" action="" enctype="multipart/form-data">

                <!-- <?php

                if($error){ ?>
                <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Message!!!!</strong> <?php echo $error ; ?>
              </div>
              <?php
            }
            ?> -->

            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Category Name" required>
            </div>



            <div class="form-group ">
              <label class="control-label col-md-3">Category Image</label>
              <div class="col-md-9">
                <br>
                <div class="col-md-6">
                  Upload Image
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                      <span class="btn btn-white btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="cat_pic" class="default" />
                      </span>


                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  Select Icon
                  <div class="panel panel-default icon-select" style="border: 1px solid #ddd;max-height: 150px; width: 425px;overflow-x: auto;" >
                    <div class="panel-body" style="overflow: hidden;">


                      <div class="form-group">

                        <?php foreach ($icon as $icons) {

                          ?>
                          <label>
                            <input type="radio" name="icon" value="<?php echo $icons['icon_path'] ?>" />
                            <img src="<?php echo $icons['icon_path']?>" height="90">
                          </label>

                        <?php } ?>


                      </div>



                    </div>
                  </div>

                </div>



              </div>
            </div>
            <div class='row col-md-12' >
              <div class="form-group col-md-6">
                <label for="exampleInputFile">Category Type</label>
                <select name="category_type">

                  <option value="Hazard_Data">Resources</option>
                  <option value="Exposure_Data">Hazard & Vulnerability</option>
                  <option value="Baseline_Data">Base Data</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputFile">File Type</label>
                <select name="upload_type">

                  <option value="csv">CSV File</option>
                  <option value="shapefile">Shapefile</option>
                </select>
              </div>
            </div>



            <button type="submit" name="submit_cat" class="btn btn-info">Submit</button>
          </form>
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

<script type="text/javascript">
$(document).ready(function(e){
  $(".addicon").click(function(){
    $(this).toggleClass("check");
  });
});
</script>
