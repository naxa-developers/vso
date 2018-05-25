<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  lang="en"> <!--<![endif]-->
<head>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/ng.png">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <title>Municipal GIS</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- map -->
  <link href="<?php echo base_url();?>assets/css/sitemapstyler.css" rel="stylesheet" type="text/css" media="screen" />

  <!-- end map -->

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/landing-page.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leaflet.label.css">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/new.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leaflet.label.css">
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!-- Bootstrap core JavaScript -->
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/carousels.js"></script>
  <!-- map -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/sitemapstyler.js"></script>
  <!-- map -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

  <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="assets/js/vendor/popper.min.js"></script>
  <script src="assets/js/vendor/jquery.nicescroll.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

  <script>
    $(document).ready(function(){
      var imgSrc = $('.banner-item>img').attr('src');
      $('.banner-item').css({"background" : "url("+imgSrc+")", "background-position": "center", "background-size": "cover"});
      $(".banner-item>img").remove();
    });
  </script>


  <!-- div is created to keep the map in its certain area whichever amount of area is located to display the map -->
  <style type="text/css">

  .leaflet-popup-content {

    overflow: auto;
  }

  div#map {
    margin-top: 44px ;
  }

  ::-webkit-scrollbar {
    width: 10px;
  }

  ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(120,120,120,120);
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(120,120,120,120);
  }
  #load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("img/loader.gif") no-repeat center center rgba(0,0,0,0.25)
  }


  }
  #over_map {
    position: absolute;
    top: 117px;
    left: 12px;
    z-index: 999;
  }

</style>
</head>

<body>
   <!--[if lt IE 8]>
     <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <div id="load" style="background-color: white; "></div>

          <header id="website-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
              <div class="container">
                <a class="navbar-brand" href="#">
                  <div class="logo-gov clearfix">
                    <img src="<?php echo base_url();?>assets/img/logo.png" alt="Logo">
                    <h6>
                      <strong>Shankharapur Municipality</strong><br/>
                      <small>Disaster Information Management Platform</small>
                    </h6>
                  </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php"><i class="fa fa-home"></i><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>datasets">Datasets</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>category?tbl=">Map</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>about"">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="assets/contact.php">Er Inventory</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>report_page">Reports</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>publication">Publication</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Websites
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://www.changunarayanmun.gov.np/en" target="_blank">Municipal Website</a>
                        <a class="dropdown-item" href="http://neoc.gov.np/en/" target="_blank">NEOC</a>
                      </div>
                    </li>
                  </ul>
                </div>

              </div>
            </nav>

          </header>
