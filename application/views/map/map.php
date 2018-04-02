   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>
 <!-- div is created to keep the map in its certain area whichever amount of area is located to d  -->
 

  <!--<div style = "position:absolute; margin-left:513px; margin-top:-33px; z-index: 7; font-size:0.5 em">

        <select id = "selectInstallment" style = "height:35px;">
          <option class = "installment" value="default" selected disabled>Filter Municipality</option>
          <option class = "installment" value="kathmandu">Kathmandu</option>
          <option class = "installment" value="lalitpur">Lalitpur</option>
          <option class = "installment" value="kritipur">Kritipur</option>
          <option class = "installment" value="Lubhu">Lubhu</option>
          <option class = "installment" value="3">All Layers</option>
          
        </select>
    </div>-->

 
 <div id="wrapper">
  <div id="map" style="width:100%; height:600px; margin-top:0px;"> </div></div>
   <!--  <script>
  // this var geo is done to convert the php version of $geo data into js version as geo from $geo

  var geo = '<?php echo $geo; ?>';

  //json error checker to check whether the format of json is correct or not
        JSON._parse = JSON.parse;
        JSON.parse = function (json) {
            try {
                return JSON._parse(json)
            } catch(e) {
                jsonlint.parse(json)
            }
        }

        JSON.parse(geo) // either a valid object, or an meaningful exception

// variable geojson is done to convert that parsed geo JSON format into useable variable format of geojson.
  var geojson= JSON.parse(geo);
  //console.log(geojson);
</script>
 -->

<script>


	var geo = '<?php echo $geo; ?>';

  //json error checker to check whether the format of json is correct or not
        JSON._parse = JSON.parse;
        JSON.parse = function (json) {
            try {
                return JSON._parse(json)
            } catch(e) {
                jsonlint.parse(json)
            }
        }

  var geojson= JSON.parse(geo);

  console.log(geojson);

$(document).ready(function(){

map = L.map("map", {
				center: [27.701871, 85.315297],
				zoom: 12

		});
		
		
		//map.options.minZoom = 14;
		//console.log("adfasfsadfasfasdfasfdasdfsafasdfsafasfasfsafsa");
		var osm = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
		});
		
		googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		//var none = "";
		var baseLayers = {
			"OpenStreetMap": osm,
			"Google Streets": googleStreets,
			"Google Hybrid": googleHybrid,
			"Google Satellite": googleSat,
			"Google Terrain": googleTerrain//,
			//"None": none
		};
		
		map.addLayer(googleHybrid);
		layerswitcher = L.control.layers(baseLayers, {}, {collapsed: true}).addTo(map);
		
       
		
    
var geoJsonLayer = new L.GeoJSON(geojson,
  {
  
// with onEachFeature the task is carried out on Each of the point of coordinates or other properties Like( Creating table in each point of cordinates and etc)

	onEachFeature: function(feature,layer){
	
    var popupTxt = ('<table class="table table-bordered"> <tr> <th> Center </th><th> district </th><th> new_ward_n </th><th>area_sqkm</tr></th> <tr><td>'+ feature.properties.center +'</td><td>' + feature.properties.district +'</td><td>' + feature.properties.new_ward_n +'</td></td><td>' + feature.properties.area_sqkm + '</td></td></td></table>')
    layer.bindPopup(popupTxt);
									layer.setStyle({
                                    
                                    fillColor: "#0BB3F7",
                                    fillOpacity:0.3,
                                    weight: 1,
                                    opacity: 1,
                                    color: 'black'//,
                                    //dashArray: '3'

                                });
 // table is created to put all the data of the database into the marker on one click
//slayer.bindLabel('sdfsaas');
	
      

// console.log(feature);
}
 
}).addTo(map);
     
   








});
</script>

