<style type="text/css">
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
div#exampleModal {
    overflow: hidden;
}
.map-marker{
width: 60px;
    height: 80px;
    margin: auto;
    display: block;
    margin-left: 12px;
  
}
</style>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                     <b>Choose Map Icon Style</b>
                  
                      
                  </header>
                  <div class="panel-body">
 
<div class="form-group ">
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

                      <div class="row">
          <div class="col-md-3">
            <form>
              <label>
                <input id="fb3" type="radio" name="fb" value="med" />
                <img class="map-marker" src="<?php echo base_url();?>assets/img/mark.png"  alt="Logo"  >
                
              </label>
            </div>

            <div class="col-md-3">
             <label>
              <input id="fb3" type="radio" name="fb" value="med" />
              <img class="map-marker" src="<?php echo base_url();?>assets/img/mark.png" alt="Logo" >
            
            </label>
          </div>

          <div class="col-md-3">
           <label>
            <input id="fb3" type="radio" name="fb" value="med" />
            <img class="map-marker" src="<?php echo base_url();?>assets/img/mark.png" alt="Logo" >
            
          </label>
        </div>

        <div class="col-md-3">
         <label>
          <input id="fb3" type="radio" name="fb" value="med" />
          <img class="map-marker" src="<?php echo base_url();?>assets/img/mark.png" alt="Logo">
          
        </label>
      </div>
      

                                    


                      </div>



                    </div>
                  </div>

                </div>



              </div>
            </div>

              <div class="col-md-6">
               <a href="#"> <button type="submit" name="submit" class="btn btn-success" style="background-color: #1fb5ad;border-color: #1fb5ad;">Update</button></a>

              </div>



  </div>
                   
                  </div>
              </section>

            </section>
        </div>
    </div>

        </div>
    <!-- page end-->
    </section>
</section>
<!--main content end-->
