<link href="sitemapstyler/sitemapstyler.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="sitemapstyler/sitemapstyler.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" />

<script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/changunarayan.js"></script>
<style>
.leaflet-left{
	left: 21.5%;
	top: 12px;
}

ul.nav.nav-tabs{
  font-size: 14px;
  font-weight: bold;
  border-bottom-color: transparent;
  /*  margin-left: 10px;*/
  margin-top: 0px;
  background: #0056b3;
  border-bottom: none;
}

ul.nav.nav-tabs a{

  padding:10px;
  color: black;
}

ul.nav.nav-tabs a:hover{

  text-decoration:none;
  color: black;
}
li.basemap.chevron1 {
  width: 40px;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  display: inline-block;
}
img.test-icon.chevron {
  margin-left: 10px;
}

li.basemap.chevron2 {
  width: 40px;
}
li.active.layer.map {
  height: 25px;
}
li.basemap.map {
  height: 25px;
}

li.basemap {
  background-color: #0056b3;
  height: 32px;
}

li.basemap img:hover {

  transition: all 0.2s ease-in;
}
li.active.layer img:hover {

  transition: all 0.2s ease-in;
}

li.active.layer {
 background-color: #0056b3;
 height: 32px;
}

.panel-heading.right {
/*  float: right;
margin-right: 7px;*/
}

li.list-group-item {
  margin-bottom: 5px;
  padding: .55rem 1.25rem;
}

li.list-group-item:hover{
  background-color: #eee;
}


.half {
  float: left;
  font-size: 11px;
}

ul.list-group.cate {
  padding: 0px;
}

.tab-content .cate {
  margin-top: 5px;
  background: #fff;
  padding: 10px;
}

div#categories {
  background-color: #fff;
}

div#filter {
  background-color: #fff;
  margin-top: 10px;
}

.tab-content p {
  margin: 0.5em;
}

.panel.panel-info {
 overflow: hidden;
 width: 250px;
 background-color: #fdfeff;
 padding: 5px;
 border-radius: 0px;
 float: right;
 height: 523px;
 font-size: 11px;
}
span.ic {
  font-size: 12px;
}

.modal-window>div {
  width: 350px;
}

.modal-window {
  position: fixed;
  background-color: rgba(0, 0, 0, 0.5);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 9;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;

}

.modal-window:target {
  opacity: 1;
  pointer-events: auto;
}

.modal-window>div {
  width: 500px;
  position: relative;
  margin: 10% auto;
  padding: 1rem;
  background: #fff;
  color: #444;
  border-radius: 15px;
  box-shadow:10px 10px 20px grey;
}
}

.modal-window header {
  font-weight: bold;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}

.modal-close:hover {
  color: #000;
}

.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}
.modal-footer{
  padding: 1rem 0rem 0rem;
}

div#over_map1 {
  position: absolute;
  z-index: 8;
  right: 0px;
}
#wrapper { position: relative; }
#over_map { position: absolute; left: 0px; z-index: 8; top: 33px;}

.icon-bar{
  background-color:#0056b3;
  color: white;
  margin-top: 0px;
  padding: 4px 0px;
  margin-left: 64px;
  border-left: 1px solid white;
}

.icon-bar a{
  color: white;
  margin-left: 13px;
  font-size: 15px;
}

.icon-bar a:hover{
  color: lightblue;
  text-decoration:none;
}

.panel.panel-success.categories {
  width: 290px;
  overflow-y: auto;
  overflow-x: hidden;
  height: 523px;
}

.panel.panel-success {
  background-color: #fff;
  float:left;
  overflow-y: auto;
  overflow-x: hidden;
}

.treeview input[type="checkbox"] {
  display: none;
}
.treeview input[type="radio"] {
  display: none;
}

.treeview,
.treeview ul {
  padding: 0;
  margin: 0;
  margin-bottom: 5px;
  overflow: hidden;

}

.treeview li {
  position: relative;
  font-size: 1rem;
  display: flex;
  flex-direction: column;
}
.treeview > li {
  padding-left: 0;
}

.treeview ul {
  max-height: 0;
  -webkit-transition: 0.8s ease;
  -moz-transition: 0.8s ease;
  -ms-transition: 0.8s ease;
  -o-transition: 0.8s ease;
}

.treeview li input:nth-of-type(1):checked ~ ul {
  max-height: 1000px;
}

.treeview li label.specific {
  padding: 0px;
  padding-left: 23px;
  /*background-color: #f3f3f4;*/
  cursor: pointer;
  font-size: 12px;
  display: flex;
  align-items: center;
  font-weight: bold;
}

.treeview li label.specific i {
  font-size: 14px;
}

.treeview li label.specific > span {
  margin: 0 20px;
}

.treeview li label.specific input[type="text"] {
  flex: 1;
  color: #676a6c;
  background: white;
  border: none;
  border-radius: 3px;
  transition: 0.2s ease;
  padding: 9px;
  margin-left: 10px;
  background: none;
}

.treeview li label.specific input[type="text"]:focus,
.treeview li label.specific input[type="text"]:hover {
  background: white;
}

.treeview li label.specific:not(.child):before {
  transition: 0.3s ease;
  position: absolute;
  margin-left: -11px;
}

.treeview li label.specific:not(.child):before {
  font: normal normal normal 14px/1 FontAwesome;
  content: "\f054";
}

.treeview li input[type="checkbox"]:checked + label.specific:before {
  transform: rotate(90deg);
}

.treeview .ball {
  left: 16px;
  margin-left: -60px;
  padding-right: 30px;
}

.treeview .ball:before {
  color: #fff;
  position: relative;
  display: flex;
  border-radius: 50%;
  background-color: #0056b3;
  align-items: center;
  height: 23px;
  width: 23px;
  font-size: 13px;
  justify-content: center;
  content: attr(data-id);
}
.treeview .action-list {
  margin-left: auto;
}
.treeview .action-list i {
  margin-left: 15px;
}

#apply{
  font-size: 10px;
  color: #fff;
  border: 1px solid transparent;
  background: #0056b3;
  border-radius: 0px;
  padding: 5px;
}

#apply:hover,#apply:active{
  color: #0056b3;
  border: none;
  background: none;
  border: 1px solid  #0056b3;
}
.treeview .btn-pos{
  margin: 0px 4px;
}

.treeview .desc{
  font-size: 12px;
  padding-left: 25px;
}

.control.pull-right{
  margin-left: auto;
}

.control{
  padding: 5px 5px 0px 0px;
}
.head-panel{
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}


.categories .list-group-item{
  font-size: 13px;
  border-left: none;
  border-right: none;
  border-radius: 0;
  margin-bottom: -1px;
}

.btn-pos-list{
  margin: 5px 0px;
}

.form-group .label_summary{
  font-size: 13px;
  font-weight: bold;
  padding: 5px 8px;
}

.total .counter-desc{
  margin: auto;
  padding: 0px 8px;
  font-size: 12px;
}

.right-content-info .total{
  border-radius: 0px;
  padding: 5px 0px;
  margin: 0px 0px 7px;
}

.list-cat-panel {
/*  overflow-y: auto;
height: 280px;*/
}

.head-panel .control div a{
  color: #0056b3;
}

.transform img{
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  display: inline-block;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

#close-panel-left img{
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  display: inline-block;
}

#close-panel-right img{
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  display: inline-block;
}
.no-padding{
  padding-left: 0;
  padding-right: 0;
}

.right-content-info{
  height: 446px;
  overflow-y: auto;
  overflow-x: hidden;
}

.treeview .inter-list-panel{
  margin: 5px 5px;
  border-radius: 0px;
}

.example .btn-toggle {
  top: 50%;
  transform: translateY(-50%);
}
.control .btn-toggle {
  margin: 0 4rem;
  padding: 0;
  position: relative;
  border: none;
  height: 1.5rem;
  width: 3rem;
  border-radius: 1.5rem;
  color: #6b7381;
  background: #bdc1c8;
}
.control .btn-toggle:focus,
.control .btn-toggle.focus,
.control .btn-toggle:focus.active,
.control .btn-toggle.focus.active {
  outline: none;
}
.control .btn-toggle:before,
.control .btn-toggle:after {
  line-height: 1.5rem;
  width: 4rem;
  text-align: center;
  font-weight: 600;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: absolute;
  bottom: 0;
  transition: opacity 0.25s;
}
.control .btn-toggle:before {
  content: "Off";
  left: -4rem;
}
.control .btn-toggle:after {
  content: "On";
  right: -4rem;
  opacity: 0.5;
}
.control .btn-toggle > .handle {
  position: absolute;
  top: 0.1875rem;
  left: 0.1875rem;
  width: 1.125rem;
  height: 1.125rem;
  border-radius: 1.125rem;
  background: #fff;
  transition: left 0.25s;
}
.control .btn-toggle.active {
  transition: background-color 0.25s;
}
.control .btn-toggle.active > .handle {
  left: 1.6875rem;
  transition: left 0.25s;
}
.control .btn-toggle.active:before {
  opacity: 0.5;
}
.control .btn-toggle.active:after {
  opacity: 1;
}
.control .btn-toggle:before,
.control .btn-toggle:after {
  color: #6b7381;
}
.control .btn-toggle.active {
  background-color: #0056b3;
}
.control .btn-toggle.btn-xs:before,
.control .btn-toggle.btn-xs:after {
  display: none;
}
.control .btn-toggle.btn-xs {
  margin: 0 0;
  padding: 0;
  position: relative;
  border: none;
  height: 1rem;
  width: 2rem;
  border-radius: 1rem;
}
.control .btn-toggle.btn-xs:focus,
.control .btn-toggle.btn-xs.focus,
.control .btn-toggle.btn-xs:focus.active,
.control .btn-toggle.btn-xs.focus.active {
  outline: none;
}
.control .btn-toggle.btn-xs:before,
.control .btn-toggle.btn-xs:after {
  line-height: 1rem;
  width: 0;
  text-align: center;
  font-weight: 600;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: absolute;
  bottom: 0;
  transition: opacity 0.25s;
}
.control .btn-toggle.btn-xs:before {
  content: "Off";
  left: 0;
}
.control .btn-toggle.btn-xs:after {
  content: "On";
  right: 0;
  opacity: 0.5;
}
.control .btn-toggle.btn-xs > .handle {
  position: absolute;
  top: 0.125rem;
  left: 0.125rem;
  width: 0.75rem;
  height: 0.75rem;
  border-radius: 0.75rem;
  background: #fff;
  transition: left 0.25s;
}
.control .btn-toggle.btn-xs.active {
  transition: background-color 0.25s;
}
.control .btn-toggle.btn-xs.active > .handle {
  left: 1.125rem;
  transition: left 0.25s;
}
.control .btn-toggle.btn-xs.active:before {
  opacity: 0.5;
}
.control .btn-toggle.btn-xs.active:after {
  opacity: 1;
}

.categories .list-group-item i{
  font-size: 16px;
}

#table1 .form-group{
  margin-bottom: 5px;
  border-radius: 0;
  /*padding: 0px 10px;*/
}
div#map{
  width:100%;
  height:523px;
  z-index:1;
  margin-top: 0px;
}

#legend .cate{
  font-size: 13px;
  font-weight: bold;
}

.panel-heading .nav-tabs img.test-icon{
  height: 20px;
  margin-top: 6px;
}

select#sel1 {
  height: 30px;
  font-size: 11px;
  border-radius: 0;
}

.total a {
  margin: 8px;
  font-size: 18px;
}

/* range slider */

.treeview_list{
  list-style: square outside none;
  display:list-item;
}
.treeview-content-p{
  margin: 15px 20px 5px;
}
</style>

<div id="wrapper">


	<!-- left pane -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 no-padding col-sm-12">
				<div class="panel-heading">
					<ul class="nav nav-tabs" role="tablist">
						<li class="basemap chevron1" id="close-panel-left"><img src="<?php echo base_url()?>assets/img/up-arrow.png" class="test-icon chevron"></li>
						<li role="presentation" class="active layer"><a href="#categories" aria-controls="home" role="tab" data-toggle="tab"><img src="<?php echo base_url()?>assets/img/boxes.png" class="test-icon"></a></li>
						<li role="presentation" class="basemap"><a href="#layers" aria-controls="profile" role="tab" data-toggle="tab"><img src="<?php echo base_url()?>assets/img/layers-icon.png" class="test-icon"></a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-6 no-padding col-sm-12" style="background: #0056b3">
				<div class="panel-heading right pull-right">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active layer navbar-right pull-right"><a href="#table1" aria-controls="home" role="tab" data-toggle="tab"><img src="<?php echo base_url()?>assets/img/menu.png" class="test-icon"></a></li>
						<li class=" basemap chevron2 navbar-right" id="close-panel-right"><img src="<?php echo base_url()?>assets/img/up-arrow.png" class="test-icon chevron"></li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<div class="half col-sm-12 col-md-4 no-padding" id ="over_map">
		<div class="panel panel-success categories" id="left-panel-toggle">
			<div class="panel-body cate">
				<div>
					<!-- Tab panes -->
					<div class="tab-content cate">
						<!-- categories -->
						<div role="tabpanel" class="tab-pane active" id="categories">
							<ul class="treeview checklist">


 <?php  foreach ($data as $data){ ?>

								<li class="card inter-list-panel">
									<div class="head-panel">
										<div class="control">
											<div class="row">
											<!-- <div class="col-md-1 pull-left">
												<a href="#"><i class="fa fa-info-circle"></i></a>
											</div> -->

											<div class="col-md-12">
											<?php	if($data['default_load']=='0'){ ?>
												<button type="button" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle pull-right CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
												<?php	}else{ ?>
													<button type="button" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle pull-right active CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
											<?php	} ?>
													<div class="handle"></div>
												</button>
											</div>
										</div>
									</div>

								</div>


								<input type="checkbox" name="tall" id="<?php echo $data['category_table']?>">

								<label for="<?php echo $data['category_table']?>" class="specific">
									<!-- <div class="ball" data-id="1"></div> -->
									<p><?php echo $data['category_name']; ?></p>
									<!-- <div class="action-list">
										<i class="fa fa-info-circle"></i>
										<i class="fa fa-plus"></i>
									</div> -->
								</label>

								<ul>
									<li>
										<div class="desc">
                      <div class="range range-primary">
                        <small>Transparency</small>
                        <input type="range" name="range" min="1" max="100" value="50" onchange="rangePrimary.value=value">
                        <!-- <output id="rangePrimary">50</output> -->
                      </div>

                      <div class="treeview-content-p">
                       <p class="treeview_list">Primary</p>
                       <p class="treeview_list">Secondary</p>
                     </div>
                     <div class="btn-pos text-right">
                      <a href="#open-modal" id="apply" class="btn btn-default btn-xs">Add filters</a>
                    </div>
                  </div>
                </li>
              </ul>

            </li>

					<?php }?>

</ul>


</div>

<!-- categories -->
<!-- layer -->
<div role="tabpanel" class="tab-pane" id="layers">
  <div id="layers">

   <div id="content map">
    <ul id="sitemap" class="layer-sites">

     <li><a><input type="checkbox" name="1"> Administrative Layers</a>
      <ul>
       <li><a ><input type="checkbox" name="1"> Municipal Boundary</a></li>
       <li><a><input type="checkbox" name="1"> Ward Boundary</a></li>
       <li><a><input type="checkbox" name="1"> Old VDCs</a></li>
       <li><a ><input type="checkbox" name="1"> Old ward Layers</a></li>

     </ul>
   </li>
   <li><a><input type="checkbox" name="1"> Settlement Layers</a>
    <ul>
     <li><a><input type="checkbox" name="1"> Settlement Clusters</a></li>
     <li><a><input type="checkbox" name="1"> Households</a></li>


   </ul>
 </li>

 <li><a><input type="checkbox" name="1"> Risks and Hazards</a>
  <ul>
   <li><a><input type="checkbox" name="1"> Sublayer 1</a></li>
   <li><a><input type="checkbox" name="1"> Sublayer 2</a></li>
   <li><a><input type="checkbox" name="1"> Sublayer 3</a></li>

 </ul>
</li>

<li><a><input type="checkbox" name="1"> Open Spaces / Safe locations</a>
  <ul>
   <li><a><input type="checkbox" name="1"> Grounds</a></li>
   <li><a><input type="checkbox" name="1"> Parks</a></li>
   <li><a><input type="checkbox" name="1"> Open Spaces</a></li>

 </ul>
</li>

<li><a><input type="checkbox" name="1"> Institution</a>
  <ul>
   <li><a><input type="checkbox" name="1"> Private Organization</a>
    <ul>
     <li><a><input type="checkbox" name="1"> Category 1</a></li>
     <li><a><input type="checkbox" name="1"> Category 2</a></li>
     <li><a><input type="checkbox" name="1"> Hotels & Lodges</a></li>
     <li><a><input type="checkbox" name="1"> Financial Institutions</a></li>

   </ul>	</li>

   <li><a><input type="checkbox" name="1"> Government Organizations</a>
     <ul>
      <li><a><input type="checkbox" name="1"> Ward offices</a></li>
      <li><a><input type="checkbox" name="1"> Govt. Offices</a></li>
      <li><a><input type="checkbox" name="1"> Post offices etc.</a></li>
    </ul>
  </li>
</ul>
</li>

<li><a><input type="checkbox" name="1"> Urban Utilities</a>
 <ul>
  <li><a><input type="checkbox" name="1"> Roads</a></li>
  <li><a><input type="checkbox" name="1"> Rivers</a></li>
  <li><a><input type="checkbox" name="1"> Bus Park</a></li>
  <li><a><input type="checkbox" name="1"> Public Toilets</a></li>
  <li><a><input type="checkbox" name="1"> Public Taps</a></li>
  <li><a><input type="checkbox" name="1"> Falcha</a></li>
  <li><a><input type="checkbox" name="1"> Bus Chautari</a></li>

</ul>
</li>

<li><a><input type="checkbox" name="1"> Educational Institutions</a>
 <ul>
  <li><a><input type="checkbox" name="1"> Schools</a></li>
  <li><a><input type="checkbox" name="1"> Colleges</a></li>
  <li><a><input type="checkbox" name="1"> Training Centers</a></li>

</ul>
</li>

<li><a><input type="checkbox" name="1"> Health Centers</a>
 <ul>
  <li><a><input type="checkbox" name="1"> Health Posts</a></li>
  <li><a><input type="checkbox" name="1"> Hospitals</a></li>
  <li><a><input type="checkbox" name="1"> Pharmacies</a></li>
  <li><a><input type="checkbox" name="1"> Health Centers</a></li>

</ul>
</li>

<li><a><input type="checkbox" name="1"> Development Projects </a>
 <ul>
  <li><a><input type="checkbox" name="1"> Construction Sites</a></li>
  <li><a><input type="checkbox" name="1"> Ongoing Projects</a></li>

</ul>
</li>

<li><a><input type="checkbox" name="1"> Heritage Sites</a>
 <ul>
  <li><a><input type="checkbox" name="1"> Temples</a></li>
  <li><a><input type="checkbox" name="1"> Gompas</a></li>
  <li><a><input type="checkbox" name="1"> Monasteries</a></li>
  <li><a><input type="checkbox" name="1"> Pati/Pauwa</a></li>
  <li><a><input type="checkbox" name="1"> H. Sites</a></li>

</ul>
</li>
<li><a><input type="checkbox" name="1"> Security Forces</a>
 <ul>
  <li><a><input type="checkbox" name="1"> Police Station</a></li>
  <li><a><input type="checkbox" name="1"> Army Camps</a></li>

</ul>
</li>
</ul>
</div>

</div>
</div>
<!-- layer -->

<!-- filter -->
<div role="tabpanel" class="tab-pane" id="filter">
 <div class="form-group">
  <label for="usr"></label>
  <input type="text" class="form-control" id="usr"  placeholder="Enter text eg. Text">
</div>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
 </select>
</div>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" >
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
 </select>
</div>

<button type="button" class="btn btn-default btn-sm"> Filter</button>

</div>

<!-- legend -->
<div role="tabpanel" class="tab-pane" id="legend">
 <ul class="list-group cate">
  <li class="list-group-item"><i class="fa fa-square" style='color:#8DD3C7;'></i> Roads</li>
  <li class="list-group-item"><i class="fa fa-square" style='color:#FFFFB3;'></i> Rivers</li>
  <li class="list-group-item"><i class="fa fa-square" style='color:#BEBADA;'></i> Mountain</li>
  <li class="list-group-item"><i class="fa fa-square" style='color:#FB8072;'></i> Forest</li>
  <li class="list-group-item"><i class="fa fa-square" style='color:#80B1D3;'></i> Lake</li>
</ul>
</div>
<!-- legend -->

<!-- categories -->

</div>
</div>
</div>
</div>
</div>


<div id="over_map1" class="col-sm-12 col-md-4 no-padding">

  <div class="panel panel-info col-sm-12 no-padding" id="right-panel-toggle">
   <div class="panel-body">

    <!-- Tab panes -->
    <div class="tab-content right">
     <!-- categories -->
     <div role="tabpanel" class="tab-pane active" id="table1">
      <div class="form-group">
       <!-- <label for="sel1" class="label_summary">Select layer:</label> -->
       <select class="form-control" id="active_layers">

      </select>
    </div>

    <div class="right-content-info">
     <div class="card total">
      <div class="row">
       <div class="col-sm-12">
        <div class="counter_cat">
         <a> <!-- <img src="img/map(1).png" class="img-responsive center-block" />  -->
          <span class="count text-center"><b>  70</b></span><span class="ic"><b> Open Spaces </b></span>
        </a>
      </div>
      <div class="counter-desc">
       <p>this is the description of individual category
       this is the description of individual category this is the description of individual category this is the description of individual category</p>
     </div>
   </div>

 </div>
</div>

<div class="list-cat-panel">
  <ul id="ListGroup" class="list-group cate categories">

 </ul>
</div>
</div>

<div class="btn-pos-list text-center">
 <a href="#" id="apply" class="btn btn-default btn-md">View all</a>
</div>

</div>
<!-- categories -->

<!-- layer -->
<div role="tabpanel" class="tab-pane" id="popups"></div>
<!-- layer -->

<!-- filter -->

<!-- categories -->
</div>
</div>
</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-4 no-padding">
     <div id="open-modal" class="modal-window" role="dialog">
      <div class="box1" style="border-radius: 0;">
       <div class="modal-header">
        <a href="#modal-close" title="Close" class="modal-close"><i class="fa fa-times exit fa-2x"></i></a>
        <h6>Filter Education Institution</h6>
      </div>

      <div class="modal-body">
        <div class="row">

         <div class="col-6">
          <div class="form-group">
           <select id="select1" multiple="multiple" class="btn btn-default">
            <option value="1">Cheese</option>
            <option value="2">Tomatoes</option>
            <option value="3">Mozzarella</option>
            <option value="4">Mushrooms</option>
            <option value="5">Pepperoni</option>
            <option value="6">Onions</option>
          </select>

        </div>
      </div>

      <div class="col-6">
        <div class="form-group">

          <select multiple="multiple" id="select2" class="btn btn-default">
            <option value="111">Select Data</option>
            <option value="222">Risk and Hazards</option>
            <option value="333">Household</option>
            <option value="444">Schools</option>
            <option value="555">Health Facilities</option>
            <option value="666">Government Offices</option>
            <option value="777">Open Spaces</option>
          </select>

        </div>
      </div>

    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-sm" id="apply"><i class="fa fa-filter"></i> apply</button>
   </div>
 </div>

</div>
</div>
</div>
</div>
</div>

<div id="map" class="col-sm-12 no-padding"></div>



<!-- scripts for leaflet map -->
<script>

var layer_array = '<?php echo $layer_name; ?>';
var geo_array = '<?php echo $geo; ?>';
var default_loadd = '<?php echo $default_load; ?>';

//
var cat_layer = '<?php echo $cat_map_layer; ?>';
var cat_tbl_array = '<?php echo $category_tbl; ?>';


//




layer_name = JSON.parse(layer_array);
geojson = JSON.parse(geo_array);
default_load = JSON.parse(default_loadd);
console.log(default_load);

cat_layer_data = JSON.parse(cat_layer);
cat_tbl_array_name = JSON.parse(cat_tbl_array);

var selected_category='<?php echo $_GET['tbl'] ?>';

//clicked category_map
$('#<?php echo $_GET['tbl'] ?>').prop('checked',true);
$('#<?php echo $_GET['tbl'].'_toggle'?>').addClass('active');

	/*-- LayerJS--*/
	$(document).ready(function(){
		$(".layer-toggle").click(function(){
			$(".panel.panel-success").toggle(800);
			$(".layer-toggle i").toggleClass("fa-chevron-right");
		});

			//map part

			var map = L.map('map').setView([27.693547,85.440240], 13);
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

			map.addLayer(googleStreets);
			layerswitcher = L.control.layers(baseLayers, {}, {collapsed: true}).addTo(map);

				 function underscoreToSpace(naaaaame) {

						 var underscored = naaaaame;

						 var spaced = underscored.replace(/_/g, " ");

						 return spaced;

				 }

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


														 var popUpContent = "";

														 popUpContent += '<table style="width:100%;" id="District-popup" class="popuptable">';

														 for (data in layer.feature.properties) {

																 // console.log('feature ', feature);

																 dataspaced = underscoreToSpace(data);

																 popUpContent += "<tr>" + "<td></td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";

														 }

														 popUpContent += '</table>';



														 layer.bindPopup(L.popup({

																 closeOnClick: true,

																 closeButton: true,

																 keepInView: true,

																 autoPan: true,

																 maxHeight: 200,

																 minWidth: 250

														 }).setContent(popUpContent));


			layer.setStyle({

											fillColor: randomColor(),
											fillOpacity:0,
											weight: 0.5,
											opacity: 1,
											color: 'black'//,
											//dashArray: '3'

									});
		 // table is created to put all the data of the database into the marker on one click
		 //slayer.bindLabel('sdfsaas');



		 // console.log(feature);
		 }

		 }).addTo(map);

		 }

styles=JSON.parse('<?php echo $style ?>');
//popup CheckBoxStart
popup_content_parsed = JSON.parse('<?php echo $popup_content ?>');

//popup end

	$('#active_layers').append('<option id = '+selected_category+' >'+selected_category.replace( "_"," ")+'</option>');
		 //cat map load
		 for(i=0; i<cat_tbl_array_name.length; i++){
//style start
var style=JSON.parse(styles[i]);
//style end

			 //console.log(cat_tbl_array_name[i]);
		 window[''+cat_tbl_array_name[i]]= new L.GeoJSON(cat_layer_data[i],
		 {

			 pointToLayer: function(feature,Latlng)
				{
					icons=L.icon({
					iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
				});
				var marker = L.circleMarker(Latlng);
				//for(data in style){


					marker.setStyle(style);


			//	}

						return marker;

			 },




		 onEachFeature: function(feature,layer){

			 //console.log(feature);

		 var popUpContent = "";

														 popUpContent += '<table style="width:100%;" id="District-popup" class="popuptable">';

														 //for (data in popup_content_parsed) {
															 		pop = JSON.parse(popup_content_parsed[i]);

																	for(data in pop.a){
																			//console.log(data);
																			pop1 = pop.a[data].col;
																			name = pop.a[data].name;
																			popUpContent += "<tr>" + "<td>"+name+"</td>" + "<td>" +  feature.properties[pop1]  + "</td></tr>";
																	}



																 // console.log('feature ', feature);

																 //dataspaced = underscoreToSpace(data);
																 //console.log(JSON.parse(popup_content_parsed[data]));


														 //}

														 popUpContent += '</table>';



														 layer.bindPopup(L.popup({

																 closeOnClick: true,

																 closeButton: true,

																 keepInView: true,

																 autoPan: true,

																 maxHeight: 200,

																 minWidth: 250

														 }).setContent(popUpContent));



		 },



		 });

//add layer if the admin has set the layer to load by default on page load
		if($('#'+cat_tbl_array_name[i]+'_toggle').hasClass('active')){
				console.log(cat_tbl_array_name[i]);
				window[''+cat_tbl_array_name[i]].addTo(map);
				//$('#active_layers').append('<option>Select layer</option>');

				var table_name=cat_tbl_array_name[i].replace( '_',' ');
       if(cat_tbl_array_name[i]==selected_category){

			 }else{

				$('#active_layers').append('<option id= '+cat_tbl_array_name[i]+' >'+table_name+'</option>');
			 }



		}

		 }
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


			L.Mask = L.Polygon.extend({
				options: {
					stroke: false,
					color: '#333',
					fillOpacity: 0.5,
					clickable: true,

					outerBounds: new L.LatLngBounds([-90, -360], [90, 360])
				},

				initialize: function (latLngs, options) {

							 var outerBoundsLatLngs = [
						this.options.outerBounds.getSouthWest(),
						this.options.outerBounds.getNorthWest(),
						this.options.outerBounds.getNorthEast(),
						this.options.outerBounds.getSouthEast()
					];
							L.Polygon.prototype.initialize.call(this, [outerBoundsLatLngs, latLngs], options);
				},

			});
			L.mask = function (latLngs, options) {
				return new L.Mask(latLngs, options);
			};


			var coordinates = changu1[0].features[0].geometry.coordinates[0];

			var latLngs = [];
			for (i=0; i<coordinates.length; i++) {
				for(j=0; j<coordinates[i].length;j++){
					// console.log(coordinates[i][j]);
					latLngs.push(new L.LatLng(coordinates[i][j][1], coordinates[i][j][0]));
				}
			}


			L.mask(latLngs).addTo(map);


function Loadlist(selected_list_id){
	$.ajax({
                                    type: "GET",
                                  //  data: name,
                                    url:  "MapController/get_summary_list?selected_list_id="+selected_list_id,
                                    beforeSend: function() {
                                      //  $.LoadingOverlay("show");
                                    },
                                    complete: function() {
                                      //  $.LoadingOverlay("hide", true);
                                    },
                                    success: function (result) {
																			$("#ListGroup").html('');
																				var result_parsed = JSON.parse(result);
																				  //
																					//console.log(result_parsed[i]);
																					console.log(result);
																				for(var i=0; i<result_parsed.length;i++){
																					var coords = JSON.parse(result_parsed[i].st_asgeojson);
																					$("#ListGroup").append('<li id='+coords.coordinates[0]+' name = '+coords.coordinates[1]+' class="list-group-item zoomTo" >'+result_parsed[i].field+' <span class="pull-right"><a href="#"><i class="fa fa-crosshairs"></i></a></span></li>');



																				}

                                    }


                                });

}


Loadlist(selected_category);

 $('#active_layers').on('change',function(){
var selected_list_id=$('#active_layers option:selected').attr('id');

   Loadlist(selected_list_id);
 });


$("#ListGroup").on('click', '.zoomTo', function(){ console.log("fadsdfasfd");
			var lat = parseFloat($(this).attr('id'));
			var lon = parseFloat($(this).attr('name'));
			map.setView([lon,lat],16);
});

			});
		</script>


    <!-- panel toggle script -->
		<script>
			$('#close-panel-left').click(function(){
				$('#left-panel-toggle').slideToggle('fast');
				$(this).toggleClass('transform');
			});
		</script>

		<script>
			$('#close-panel-right').click(function(){
				$('#right-panel-toggle').slideToggle('fast');
				$(this).toggleClass('transform');
			});
		</script>



    <!-- Initialize the plugin for multiselect -->
    <script type="text/javascript">
      $(document).ready(function() {



				//$('#category1_toggle').removeClass('active');
        $('#select1').multiselect();
        $('#select2').multiselect();
      });
    </script>
