
<div class="banner-item">
          <img src="<?php echo $site_info['cover_photo'] ?>" class="banner-img">
          <div class="container clearfix">
            <div class="banner-caption pull-left">
              <h2><strong><?php echo $site_info['cover_big'] ?></strong></h2>
              <p>
               <?php echo $site_info['cover_big'] ?>
              </p>
              <button class="btn btn-lg btn-outline-white margin-top-sm" id="started">Get Started</button>
            </div>
            <!--<div class="banner-infograph d-none d-md-block pull-right">
              <img src="assets/img/info5.png" alt="">
            </div>-->
          </div>

        </div>

        <div class="bg-dark" id="nextDiv">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-6">
                <div class="search-wrap text-center">
                  <h3 class="mb-3">Search For <strong>Datasets</strong></h3>
                  <form method="POST" action="<?php echo base_url()?>datasets">
                    <div class="input-group input-group-lg">
                  <input type="text" class="form-control" name="search" placeholder="Keywords" aria-label="Keywords" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" name="submit_search" type="submit">Search</button>
                  </div>
                </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dataset-wrap">
          <div class="container">


        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="hazard-tab" data-toggle="tab" href="#hazard" role="tab" aria-controls="hazard" aria-selected="true">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="exposure-tab" data-toggle="tab" href="#exposure" role="tab" aria-controls="exposure" aria-selected="false">Hazard & Vulnerability</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="baseline-tab" data-toggle="tab" href="#baseline" role="tab" aria-controls="baseline" aria-selected="false">Base Data</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="hazard" role="tabpanel" aria-labelledby="hazard-tab">
            <ul class="row">
                <?php foreach($exposure_data as $data){ ?>
              <li class="col-md-3 col-lg-2">
                <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table'] ?>" class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                  <img src="<?php echo $data['category_photo'] ?>">
                  <h6><?php echo  $data['category_name'] ?></h6>
                </a>
              </li>
          <?php } ?>
              </ul>
          </div>
          <div class="tab-pane fade" id="exposure" role="tabpanel" aria-labelledby="exposure-tab">
<ul class="row">
    <?php foreach($hazard_data as $data){ ?>
            <li class="col-md-3 col-lg-2">
              <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table'] ?>" class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                <img src="<?php echo $data['category_photo'] ?>">

                <h6><?php echo  $data['category_name'] ?></h6>
              </a>
            </li>
          <?php }?>
          </ul>
          </div>
          <div class="tab-pane fade" id="baseline" role="tabpanel" aria-labelledby="baseline-tab">
<ul class="row">
    <?php foreach($baseline_data as $data){ ?>
            <li class="col-md-3 col-lg-2">
              <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table'] ?>" class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                <img src="<?php echo $data['category_photo'] ?>">
                <h6><?php echo  $data['category_name'] ?></h6>
              </a>
            </li>

          <?php } ?>
          </ul>
          </div>
        </div>

      </div>
        </div>
<a href="category?tbl=<?php echo $feature['table'] ?>">
    <div class="bg-white feature-section">
      <div class="container">
        <div class="featured-post clearfix">
          <h5 class="post-ribbon">Featured Dataset</h5>
          <img src="<?php echo $feature['photo'] ?>" alt="">
          <h3><?php echo $feature['title'] ?></h3>
          <p>
          <?php echo $feature['summary'] ?>
          </p>
        </div>
      </div>
    </div>
</a>
    <script type="text/javascript">
$("#started").click(function() {
    $('html, body').animate({
        scrollTop: $("#nextDiv").offset().top
    }, 1000);
});
    </script>
