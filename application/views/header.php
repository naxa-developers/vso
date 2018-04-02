<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/ng.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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


<link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans+Condensed:300|Raleway|Simonetta|Wire+One" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/new.css">
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
  <!-- map -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/sitemapstyler.js"></script>
  <!-- map -->
  
 
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>

  
  
  
   
  
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
    position:relative;
    z-index:9999;
    background:url("img/loader.gif") no-repeat center center rgba(0,0,0,0.25)
  }

.navbar-brand{
  margin-left: -90px;


}


</style>
</head>

<body>
 <div id="load" style="background-color: white; "></div>
 <div id="contents">


  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url();?>main"><img src="<?php echo base_url();?>assets/img/ng.png" class="img-responsive"> Changunarayan Municipality
        <br> <div class="sub"> <h6>     Municipal GIS </h6> </div>
      </a>
      <div class="header">
       <div class="header-right">
        <a class="active" href="<?php echo base_url();?>main"><i class="fa fa-home"></i></a>
        <a href="<?php echo base_url();?>datasets">Datasets</a>
        <a href="<?php echo base_url();?>map">Map</a>
        <a href="<?php echo base_url();?>about">About</a>

        <a href="#website">Municipal Website</a>

      </div>
    </div>
  </div>
</nav>
</div>
