<script>
   $(document).ready(function(){
      bannerHeight();
          window.onresize = function(event) {
               bannerHeight();
           }

            function bannerHeight() {
                vph = $(window).height();
                headerHeight = $("#website-header").height();
                vph = vph - headerHeight;
                $("#banner").height(vph);
                vph = (vph - $(".banner-item").height())/2;
                $(".banner-item").css('padding-top', vph);
                $(".banner-item").css('padding-bottom', vph);
            }
   });
</script>
<div id="banner">
  <div class="banner-item">
          <img src="<?php echo $site_info['cover_photo'] ?>" class="banner-img">
          <div class="container clearfix">
            <div class="banner-caption text-center mb-4">
              <h2><strong><?php echo $site_info['cover_big'] ?></strong></h2>
              <p>
                <?php echo $site_info['cover_small'] ?>
              </p>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                  <img src="<?php echo base_url()?>assets/icon/floods1.png" height="64">
                  <h6><?php echo $site_info['flood']?></h6>
                  <h4><?php echo $report_inci['Flood']?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                    <img src="<?php echo base_url()?>assets/icon/fire1.png" height="64">
                  <h6><?php echo $site_info['fire']?></h6>
                  <h4><?php echo $report_inci['Fire']?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                    <img src="<?php echo base_url()?>assets/icon/landslide1.png" height="64">
                  <h6><?php echo $site_info['landslide']?></h6>
                  <h4><?php echo $report_inci['Landslide']?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                    <img src="<?php echo base_url()?>assets/icon/lightning1.png" height="64">
                  <h6><?php echo $site_info['lightning']?></h6>
                  <h4><?php echo $report_inci['Lightning']?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <a href="<?php echo base_url() ?>report_page" class="disaster-summary-item" data-mh="summary-item">
                  <p><?php echo $site_info['more']?> +</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="bg-dark" id="nextDiv">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-6">
                <div class="search-wrap text-center">
                  <h3 class="mb-3"><?php echo $site_info['search_dataset'] ?><strong></strong></h3>
                  <form method="POST" action="<?php echo base_url()?>datasets">
                    <div class="input-group input-group-lg">
                  <input type="text" class="form-control" name="search" placeholder="<?php echo $site_info['search']?>" aria-label="Keywords" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" name="submit_search" type="submit"><?php echo $site_info['search']?></button>
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
            <a class="nav-link active" id="hazard-tab" data-toggle="tab" href="#hazard" role="tab" aria-controls="hazard" aria-selected="true"><?php echo $site_info['cat_1'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="exposure-tab" data-toggle="tab" href="#exposure" role="tab" aria-controls="exposure" aria-selected="false"><?php echo $site_info['cat_2'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="baseline-tab" data-toggle="tab" href="#baseline" role="tab" aria-controls="baseline" aria-selected="false"><?php echo $site_info['cat_3'] ?></a>
          </li>
        </ul>
        <div class="tab-content scrolling-wrap" style="height: 280px;" id="myTabContent">
          <div class="tab-pane fade show active" id="hazard" role="tabpanel" aria-labelledby="hazard-tab">
            <div class="container-fluid">
              <ul class="row">
                  <?php foreach($exposure_data as $data){ ?>
                <li class="col-md-3 col-lg-2">
                  <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table'] ?> && name=<?php echo $data['category_name'] ?> " class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                    <img src="<?php echo $data['category_photo'] ?>">
                    <h6><?php echo  $data['category_name'] ?></h6>
                      <span class="count"><?php

                        if(!$this->db->table_exists($data['category_table'])){
                           echo 0;

                        }else{

                      echo $data_count_cat[$data['category_table']];
                        }
                      ?></span>
                  </a>
                </li>
            <?php } ?>
          </ul>
            </div>
          </div>
          <div class="tab-pane fade" id="exposure" role="tabpanel" aria-labelledby="exposure-tab">
<ul class="row">
    <?php foreach($hazard_data as $data){ ?>
            <li class="col-md-3 col-lg-2">
              <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table'] ?> && name=<?php echo $data['category_name'] ?> " class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                <img src="<?php echo $data['category_photo'] ?>">

                <h6><?php echo  $data['category_name'] ?></h6>
                  <span class="count"><?php

                    if(!$this->db->table_exists($data['category_table'])){
                       echo 0;

                    }else{

                  echo $data_count_cat[$data['category_table']];
                    }
                  ?></span>
              </a>
            </li>
          <?php }?>
          </ul>
          </div>
          <div class="tab-pane fade" id="baseline" role="tabpanel" aria-labelledby="baseline-tab">
<ul class="row">
    <?php foreach($baseline_data as $data){ ?>
            <li class="col-md-3 col-lg-2">
              <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table']?>&&name=<?php echo $data['category_name'] ?>" class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                <img src="<?php echo $data['category_photo'] ?>">
                <h6><?php echo  $data['category_name'] ?></h6>
                <span class="count"><?php

                  if(!$this->db->table_exists($data['category_table'])){
                     echo 0;

                  }else{

                echo $data_count_cat[$data['category_table']];
                  }
                ?></span>
              </a>
            </li>

          <?php } ?>
          </ul>
          </div>
        </div>

      </div>
        </div>
        <?php if($feat_lang=='en'){ ?>
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
<?php }else{ ?>

  <a href="category?tbl=<?php echo $feature['table'] ?>">
      <div class="bg-white feature-section">
        <div class="container">
          <div class="featured-post clearfix">
            <h5 class="post-ribbon">विशेष डाटासेट</h5>
            <img src="<?php echo $feature['photo'] ?>" alt="">
            <h3><a href="#" title=""><?php echo $feature['nepali_title'] ?></a></h3>
            <p>
            <?php echo $feature['nepali_summary'] ?>
            </p>
            <!-- <a href="#" title="" class="btn btn-primary">पुरा पढ्नुहोस्</a> -->
          </div>
        </div>
      </div>
  </a>
<?php } ?>
    <script type="text/javascript">
$("#started").click(function() {
    $('html, body').animate({
        scrollTop: $("#nextDiv").offset().top
    }, 1000);
});

$(document).ready(function(){
  if ($.fn.niceScroll) {


      $(".scrolling-wrap").niceScroll({
          cursorcolor: "#2057af",
          cursorborder: "0px solid #fff",
          cursorborderradius: "0px",
          cursorwidth: "8px"
      });

      $(".scrolling-wrap").getNiceScroll().resize();
      $(".scrolling-wrap").getNiceScroll().show();

  }
});

    </script>
