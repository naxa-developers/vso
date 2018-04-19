
<div id="wrapper">
<div id="map" style="width:100%; height:600px; margin-top:0px;"> </div></div>


<script>

var layer_array = '<?php echo $layer_name; ?>';
var geo_array = '<?php echo $geo; ?>';
var cat_layer = '<?php echo $cat_map_layer; ?>';
var nep = '<?php echo $nep; ?>';





layer_name = JSON.parse(layer_array);
geojson = JSON.parse(geo_array);


cat_layer = JSON.parse(cat_layer);
nep = JSON.parse(nep);

//console.log(nep);
// console.log(layer_name);
//console.log(cat_layer);

$(document).ready(function(){

 var map = L.map('map').setView([27.701871, 85.315297], 12);
// map.scrollWheelZoom.disable();
map.options.maxBounds;  // remove the maxBounds object from the map options
//map.options.minZoom = 9;

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



for(i=0; i<layer_name.length; i++){
window[''+layer_name[i]] = new L.GeoJSON(geojson[i],
{


//  pointToLayer: function(feature,Latlng)
//  {
//    icons=L.icon({
//    iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
//  });
//  var marker = L.marker(Latlng,{icon: icons});
//
// },
// with onEachFeature the task is carried out on Each of the point of coordinates or other properties Like( Creating table in each point of cordinates and etc)

onEachFeature: function(feature,layer){

 layer.on('click',function() {
 map.fitBounds(layer.getBounds());
});



 var popupTxt = ('<table class="table table-bordered"> <tr> <th> Center </th><th> district </th><th> new_ward_n </th><th>area_sqkm</tr></th> <tr><td>'+ feature.properties.center +'</td><td>' + feature.properties.district +'</td><td>' + feature.properties.new_ward_n +'</td></td><td>' + feature.properties.area_sqkm + '</td></td></td></table>')
 layer.bindPopup(popupTxt);
               layer.setStyle({

                                 fillColor: randomColor(),
                                 fillOpacity:0.4,
                                 weight: 1,
                                 opacity: 1,
                                 color: 'blue'//,
                                 //dashArray: '3'

                             });
// table is created to put all the data of the database into the marker on one click
//slayer.bindLabel('sdfsaas');



// console.log(feature);
}

}).addTo(map);

}



//cat map load
window['school']= new L.GeoJSON(cat_layer,
{

  pointToLayer: function(feature,Latlng)
   {
     icons=L.icon({
     iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
   });
   var marker = L.marker(Latlng,{icon: icons});
       return marker;

  },




onEachFeature: function(feature,layer){

console.log(feature.properties);
var pop='';

pop +='<table class="table-bordered">';
pop +='<thead><tr>';

for(i=0;i<nep.length;i++){

  // console.log(nep[i].nepali_lang);
pop += '<td>'+nep[i].nepali_lang+'</td>';




}
pop +='</tr></thead>';


pop +='<tbody><tr>';

for(i=0;i<nep.length;i++){

      pop +='<td>'+ feature.properties['a'+i] +'</td>';



}

 pop +='</tr></tbody>';

  pop +='</table>';

//console.log(pop);
layer.bindPopup(pop);


},



}).addTo(map);

//cat map end








$( ".CheckBox" ).click(function( event ) {
     layerClicked = window[event.target.value];
 //console.log(layerClicked);
         if (map.hasLayer(layerClicked)) {
             map.removeLayer(layerClicked);
         }
         else{
             map.addLayer(layerClicked);
         } ;
 });


$( ".CheckBoxStart" ).click(function( event ) {
layerClicked1 = window[event.target.value];
map.addLayer(layerClicked1);
map.removeLayer(layerClicked1)

 });






});
</script>
