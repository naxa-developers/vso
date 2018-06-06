


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>

<!-- date -->


<style>
/*.leaflet-left .leaflet-control {
  margin-left: 1300;
  margin-bottom: 10;
}

.leaflet-top .leaflet-control {
  margin-top: 26px;
}*/

  /* ---------------------------------------------------
    conten-map STYLE
    ----------------------------------------------------- */

    .dropdown-category_dropdown .btn-light{
  padding: ;
  width: 100%;
  border: 1px solid grey;
  margin: 1px 0px 3px;
padding: 2px 0px 5px;
font-size: 14px;
}

    #conten-map {
      padding: 0px;
      transition: all 0.3s;
      position: relative;
      width: 100%;
      background: #fff;
    }

    #conten-map .navbar {
      padding: 0;
      background: #002052;
      border: none;
      border-radius: 0;
      margin: 0px;
      box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    #conten-map .navbar.navbar-default{
      min-height: 25px;
      font-size: 13px;
    }

    #sider .panel .panel-body{
      padding: 0px 5px 0px;
    }

    #sider .panel{
      margin-bottom: 0px;
    }

    .wrapper nav#sider{
      height: 600px;
      overflow: hidden;
      overflow-y: hidden;
      overflow-y: auto;
    }

    #sider .sidebar-header{
      padding: 5px 10px;
    }

    #reportrange{
      background: #eee;
      cursor: pointer;
      padding: 5px;
    }

    #sider #reporting .panel-body{
      height: 600px;
      overflow-y: auto;
      overflow-x: hidden;
    }

    #reporting .page-header{
      margin: 8px 15px 5px;
      padding-bottom: 0px;
      font-size: 16px;
      font-weight: bold;
      color: #444;
      border-bottom: 1px solid #ddd;
    }

    #conten-map .nav {
      text-align: center;
      color: #fff;
    }

    #conten-map .navbar-header .navbar-nav li{
      padding: 0;
      color: white;
    }
    #conten-map .navbar-header .navbar-nav li>a{
      color:#fff;
      padding-top: 5px;
      padding-bottom: 5px;
    }
    #conten-map .navbar-header .navbar-nav li>a:hover{
      text-decoration: none;
      color: #002052;
      background: #f5f5f5;
    }
    #conten-map .navbar-default .navbar-nav > li > a:focus{
      text-decoration: none;
      color: #002052;
      background: #f5f5f5;
    }

    .news-panel{
      font-weight: 400;
      box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
      border-radius: 0;
      padding: 5px;
      margin-bottom: 10px;
    }

    .blog-panel .thumbnail img{
      width: 100%;
      height: 70px;
      object-fit: cover;
    }
    .blog-panel{
      padding-right:0px;
      position: relative;
    }
/*    .blog-panel .thumbnail{
      padding: 0px;
      margin: 0px;
      width: 100%;
      height: auto;
      margin-top: 10px;
      overflow: auto;
    }*/

    .fancy h5{
      color: #002052;
      border-bottom: 1px solid #e7e7e7;
      font-weight: bold;
      word-spacing: 2px;
      font-size: 0.9rem;
    }
    .fancy p{
      font-size: 12px;
      color: rgba(0,0,0,0.9);
      text-align: justify;
    }

    .fancy a.naya{
      font-size: 11px;
      float: right;
      color: grey;
      text-decoration: none;
      padding: 2px;
      cursor: pointer;
      color: #555;
    }

    .horz{
      margin: 0px 40px 5px;
    }

    .tiny{
      color: rgba(0,0,0,0.7);
      font-size: 10px;
      text-align: justify;
      justify-content: space-around;
      display: flex;
    }

    .tiny a{
      color:  grey;
    }

    .jana-map{
      padding-left: 0;
      border-left: 0.2em solid #ccc;
    }

    .no-padding {
      padding-left: 0;
      padding-right: 0;
    }

    .dropdown-category_dropdown{
      background-color: #eee;
      position: relative;
    }

    .filter-check{
      border-bottom: 0.2em solid #fff;
      padding: 8px 1px 4px;

    }
    .filter-check .dropdown-menu{
      min-width: 170px;
    }
    .filter-check .dropdown-toggle{
      width: 95%;
    }
    .filter-check .multiselect-icon{
      border-radius: 0;
      margin: 1px 0px 3px;
      height: 30px;
      padding: 0px 5px;
      border: 1px solid #f30728;
      width: 98%;
      border-radius: 2px;
    }
    .filter-check .glyphicon{
      color: #002052;
    }

    #datepicker, #datepicker1 {
      height: 30px;
      padding: 0px;
      width: 49%;
      display: inline;
      margin: 1px -2px 3px;
      border: 1px solid #f30728;
      border-radius: 2px;
    }

    .filter-check p{
      font-size: 14px;
      border-bottom: 1px solid #ccc;
    }

    #map {
      height: 600px; width: 100%; margin-bottom: 0px;position: relative;/*border-top: 0.3em solid #ccc;*/
    }

    /*popup*/
    .arrow_box {
      position: relative;
      background: silver;
    }
    .arrow_box:after, .arrow_box:before {
      right: 100%;
      top: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .arrow_box:after {
      border-color: rgba(0, 0, 0, 0);
      border-right-color: #silver;
      border-width: 20px;
      margin-top: -20px;
    }
    .arrow_box:before {
      border-color: rgba(51, 102, 153, 0);
      border-right-color: #369;
      border-width: 21px;
      margin-top: -21px;
    }

    #popup-container{
      max-width: 380px;
      max-height: 280px;
    }


    .popup-panel{
      font-weight: 400;
      font-family: inherit;
      border-radius: .3rem;
      padding: 5px;
      margin-bottom: 2px;
      overflow-x: hidden;
      overflow-y: auto;
      padding: 5px 0px;
    }

    .blog-panel1 .thumbnail1 img{
      width: 100%;
      height: auto;
    }
    .blog-panel1{
      padding: 12px 0px;
      position: relative;
    }
    .blog-panel1 .thumbnail1{
      padding: 0px;
      margin: 0px;
      overflow: auto;
      position: relative;
    }

    .fancy .list-group{
      font-size: 10px;
      padding: 0px;
      margin: 0px;
      margin-top: 5px;
      border: 1px solid lightgrey;
    }

    .fancy .list-group .list-group-item{
      padding: 3px;
      margin: 2px;
    }

    #popup_nav_small{
      padding: 15px 5px;
      min-height: 30px;
    }

    #popup_nav_small .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; background: none;}
    #popup_nav_small .nav-tabs > li > a { border: none; color: #666; }
    #popup_nav_small .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #002052 !important; background: transparent; }
    #popup_nav_small .nav-tabs > li > a::after { content: ""; background: #002052; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    #popup_nav_small .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
    #popup_nav_small .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
    #popup_nav_small .tab-pane { font-size: 10px; }


    #conten-map .navbar-expand-sm{
      background: #1f5cb2;
      height: 32px;
    }
    #conten-map .nav-item .nav-link{
      color: #fff;
      font-size: 13px;
    }
button.btn.btn-light.btn-sm {
   color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
}
  </style>

  <div id="conten-map">
    <nav class="navbar navbar-expand-sm">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fa fa-map" aria-hidden="true"></i> Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="map_reports"><i class="fa fa-database" aria-hidden="true"></i> Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="map_reports_table"><i class="fa fa-pencil-square" aria-hidden="true"></i> Ghatana Bibaran</a>
        </li>
      </ul>
    </nav>

    <div class="wrapper">

      <!-- Sidebar Holder -->
      <div class="row">
        <div class="col-md-3 col-sm-12" style="padding-right: 0;">

          <div id="sider">

            <!-- problems reposrting sections starts -->

            <div class="panel" id="reporting">
              <!-- report title -->
              <div class="page-header">
                <p>Citizen reports</p>
              </div>

              <div class="panel-body">

                <!-- report 1 -->

                <!-- report 5 -->
        <?php foreach($report_data as $data){ ?>

                <div class="news-panel clearfix report_div" value="<?php echo $data['latitude'] ;?>" name="<?php echo $data['longitude'] ;?>">
                  <div class="row">
                    <div class="col-md-3 blog-panel">
                      <a href="#" class="thumbnail">
                        <img src="<?php echo $data['photo'] ;?>" alt="image">
                      </a>
                    </div>
                    <div class="fancy col-md-9">
                      <h5><?php echo $data['incident_type'] ;?></h5>
                      <p class="small">
                      <?php echo $data['message'] ;?>
                        <a class="naya" id="btnitem" data-toggle="modal" data-target="#myModal">.... Read more</a>
                      </p>

                    </div>
                  </div>
                  <hr class="horz">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="list-inline tiny">
                        <li class="list-inline-item"><i class="fa fa-user" aria-hidden="true"></i> Category: <a href="#"><?php echo $data['incident_type'] ;?></a> </li>
                        <li class="list-inline-item"><i class="icon-calendar" aria-hidden="true"></i> Status: <a href="#"> problem</a></li>
                        <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> 2 hours ago</li>
                      </ul>
                    </div>
                  </div>
                </div>

                  <?php } ?>
<!-- //end -->
              </div>
            </div>
            <!-- problems reposrting sections ends -->

          </div>
        </div>

        <div class="col-md-9 col-sm-12 jana-map">
          <?php
            $error=	$this->session->flashdata('msg');
             if($error){ ?>
               <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Message!!!!</strong> <?php echo $error ; ?>
                    </div>
             <?php
             }
              ?>
        <form action="" method="post">

          <div class="row" style="margin-left: 0; margin-right: 0;">



          <!-- map contrl items -->
          <div class="col-md-4 no-padding">
            <div class="text-center dropdown-category_dropdown filter-check">
              <div class="form-group" style="margin-bottom: 0;">
                  <input name="from_date" class="form-control" type="date" id="datepicker" placeholder="From">
                  <input name="to_date" class="form-control" type="date" id="datepicker1" placeholder="To">
              </div>
            </div>
          </div>

          <div class="col-md-2 no-padding">
            <div class="text-center dropdown-category_dropdown filter-check">
              <select name="ward" class="custom-select multiselect-icon">
                <option value="0" selected>Select ward</option>
                <option value="1" >ward no 1</option>
                <option value="2" >ward no 2</option>
                <option value="3" >ward no 3</option>
                <option value="4" >ward no 4</option>
                <option value="5" >ward no 5</option>
                <option value="6" >ward no 6</option>
                <option value="7" >ward no 7</option>
                <option value="8" >ward no 8</option>
              </select>
            </div>
          </div>

          <div class="col-md-2 no-padding">
            <div class="text-center dropdown-category_dropdown filter-check">
              <select name="incident_type" class="custom-select multiselect-icon">
                <option value="0" selected>Select Category</option>
                <option value="Fire" >Fire</option>
                <option value="Earth" >Earth</option>
                <option value="Water" >Water</option>

              </select>
            </div>
          </div>


          <div class="col-md-2 no-padding">
            <div class="text-center dropdown-category_dropdown filter-check">
              <select name="status" class="custom-select multiselect-icon">
                <option value="0" selected>Status</option>
                <option value="ongoing" >Ongoing</option>
                <option value="pending" >Pending</option>
                <option value="completed" >Completed</option>
              </select>
            </div>
          </div>

          <div class="col-md-2 no-padding">
            <div class="text-center dropdown-category_dropdown filter-check">
              <button name="submit" class="btn btn-light btn-sm" type="submit">Apply</button>
            </div>
          </div>


        </div>
  </form>

          <!-- main map -->
          <div id="map" style="margin-top: 0;"></div>

        </div>
      </div>

    </div>
  </div>

  <script>

    var report = '<?php echo $report_map_layer ;?>';
      console.log(report);
    report_layer = JSON.parse(report);
    //console.log(report_layer);
    /*-- LayerJS--*/
    $(document).ready(function(){
      $(".layer-toggle").click(function(){
        $(".panel.panel-success").toggle(800);
        $(".layer-toggle i").toggleClass("fa-chevron-right");
      });

      //map part

      var map = L.map('map');//.setView([27.7005033, 85.4328162], 13);
      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
      $(".layer-toggle").click(function(){
        $(".panel.panel-success").toggle(1000);
        $(".layer-toggle i").toggleClass("fa-chevron-right");
      });
      var sankhu = new L.geoJson.ajax("http://app.naxa.com.np/geojson/Shankharapur.geojson", {

        onEachFeature: function(feature,layer){

          layer.on('click', function() {
            map.fitBounds(layer.getBounds());
          });
          layer.setStyle({
            fillColor:"Green",
            fillOpacity:0,
            weight: 1,
            opacity: 1,
            color: 'black',
              //dashArray: '3'

            });

        }


      }).addTo(map);


      sankhu.on('data:loaded', function (data) {
        map.fitBounds(sankhu.getBounds());
      });

      var report_map = new L.GeoJSON(report_layer, {
        pointToLayer: function(feature, latlng) {
          icons = L.icon({
              //iconSize: [27, 27],
              iconAnchor: [13, 27],
              popupAnchor:  [2, -24],
              iconUrl: 'https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png'
            });
            //console.log(icon.options);
            var marker = L.marker(latlng, {icon: icons});
            return marker;

          },
          onEachFeature: function(feature, layer) {
            layer.bindPopup(feature.properties.name);
            //feature.properties.layer_name = "transit_stops";

          }
        });

      report_map.on('data:loaded', function (data) {


      });
      report_map.addTo(map);



//filter start


$('.report_div').click(function(){

  var long =$(this).attr("name");
  var lat =$(this).attr("value");
  console.log(typeof lat);
  console.log(long);

  map.setView([parseFloat(lat),parseFloat(long)], 18);
  //$.ajax({
  //  url: 'ReportController/search?data='+srch,


  //  success: function(response) {
      //alert(response);
      //var srchd= JSON.parse(response);
    //  alert(response);


//     map.removeLayer(report_map);s
//   single_report=JSON.parse(response);
//
// console.log(parseFloat(single_report.features.geometry.coordinates[0]));

// var single_map = new L.GeoJSON(single_report, {
//     pointToLayer: function(feature, latlng) {
//       icons = L.icon({
//         //iconSize: [27, 27],
//         iconAnchor: [13, 27],
//         popupAnchor:  [2, -24],
//         iconUrl: 'https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png'
//       });
//       //console.log(icon.options);
//       var marker = L.marker(latlng, {icon: icons});
//       return marker;
//
//     },
//     onEachFeature: function(feature, layer) {
//       layer.bindPopup(feature.properties.name);
//       //feature.properties.layer_name = "transit_stops";
//
//     }
//   });

  // single_map.on('data:loaded', function (data) {
  //
  //   map.addLayer(single_map);
  //
  //
  // });

//map.setView(parseFloat(single_report.features.geometry.coordinates[1]),parseFloat(single_report.features.geometry.coordinates[0]), 18);


    //}



  //});

});





//filter end











      }); //document --ends

    </script>
