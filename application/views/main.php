
<!-- Masthead -->
<header class="masthead text-white text-center">
  <div class="overlay"></div>



  <div class="container">
    <div class="row" style="margin-top: -25px;">
      <div class="col-md-10 col-lg-9 col-xl-6 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="search" class="form-control form-control-lg" placeholder="What data are you looking for? ">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary"><i class="fa fa-search"> </i></button>
            </div>

          </div>
          <h5 class="text-center" style="color: black !important;">  </h5>
                    <div class="interior">
              <a class="btnas" href="#open-modal">Advanced Search</a>
            </div>
          </div>
          <div id="open-modal" class="modal-window">
            <div class="box1">
              <a href="#modal-close" title="Close" class="modal-close"><i class="fa fa-times"></i></a>
              <h5>Advanced Search</h5>
              <div class="row">
                <div class="col-6"><div class="form-group">

                  <input type="text" class="form-control" id="tt1" placeholder="Title1">
                </div></div>
                <div class="col-6"><div class="form-group">

                  <input type="text" class="form-control" id="tt2" placeholder="Title2">
                </div></div>
              </div>
              <div class="row">
                <div class="col-6"> <div class="form-group">

                  <select class="form-control" id="sel1" >
                    <option>Select Value </option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div></div>
                <div class="col-6"> <div class="form-group">

                  <select class="form-control" id="sel1">
                    <option>Select Value</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>

              </div>

            </div>
            <button type="button" class="btn btn-success text-center">Apply</button></div>
          </div>



      </form>
    </div>
  <div class="container">
  <div class="row">
    <div class="col-sm" >
     <a href="#" class="map-list"> Insfrastucture Map <i class="fa fa-chevron-right" style="margin-left: 15px"></i></a>
    </div>
    <div class="col-sm" >
     <a href="#" class="map-list"> Household Map <i class="fa fa-chevron-right" style="margin-left: 15px"></i></a>
    </div>
    <div class="col-sm">
    <a href="#" class="map-list"> Risk & Hazards <i class="fa fa-chevron-right" style="margin-left: 15px"s></i> </a>
    </div>
  </div>
</div>
</div>
</header>

<div class="container">
  <div class="row">

<div class="grid-container col-md-10">
  <div class="item1"> <h5> Browse Datasets By Category</h5>
    <hr width="40%">
    <br>
    <div class="row">

      <?php //var_dump($data_cat);

      foreach($data_cat as $v){ ?>
      <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <img src="<?php echo $v->cat_photo; ?>" class="img-responsive center-block">
          </div>
          <h6 class="text-center"><?php echo $v->cat_name; ?></h6>

        </div>

      </div>
    <?php }?>


</div>

</div>
</div>

<div class="item2 col-md-2"><h5>Overview</h5>
  <hr width="40%">

<div class="counter text-left">
<h6><span class="count">1000</span> Flood</h6>
<h6><span class="count">853</span> Landslide</h6>
<h6><span class="count">154</span> Fire</h6>
<h6><span class="count">10</span> Crime</h6>

</div>
</div>

</div>
</div>




    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h4 class="mb-5">Project Partners</h4>

        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url();?>assets/img/ng.png" alt="">
              <h5>Consortium of DCA</h5>
              <p class="font-weight-light mb-0">"Dan Church Aid"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0" >
              <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url();?>assets/img/adra.png" alt="">
              <h5>ADRA Nepal</h5>
              <p class="font-weight-light mb-0">"Adventist Development and Relief Agency "</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url();?>assets/img/vso.gif" alt="">
              <h5>VSO</h5>
              <p class="font-weight-light mb-0">"Volunteering in Nepal"</p>
            </div>
          </div>

        </div>
      </div>
    </section>
