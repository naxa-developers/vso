


<style>
    #section1{margin-top: 0}
    #section1 {height:520px;color: #fff; background-color: #1f5cb2;}
    #section2 {padding-top:50px;padding-bottom: 30px; background-color: #f5f6f7; color: #101010;}
    #section3 {padding-top:50px;color: #101010; background-color:white; padding-bottom: 10px;}
    #section4 {padding-top:50px;padding-bottom: 30px; color: #101010; background-color:#f5f6f7}
    #section5 {padding-top:50px;color: #101010; background-color:white; padding-bottom: 10px;}
    .section-1-content{
      font-size: 14px;
      padding-left: 75px;
      padding-top: 50px;

    }

    .section1-p{
      font-size: 15px;
    }



.section1-img{
  position: relative;
  -webkit-animation-name: example;
  -webkit-animation-duration: 4s;
  animation-name: example;
  float: right;
  width: 100%;
  height: 100%;
}

.section2-img{
  position: relative;
  -webkit-animation-name: example;
  -webkit-animation-duration: 4s;
  animation-name: example;
  width: 100%;
  height: 100%;
}
@keyframes example {
  0%   {opacity: 0}
  100% {opacity: 1;}
}

  div#clients{
    padding: 20px;
  }

  /** client logos **/
#clients {
  display: block;
  margin-bottom: 15px;
}

#clients .clients-wrap {
  display: block;
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
  margin-left: 250px;
}

#clients .clients-wrap ul {
  display: block;
  list-style: none;
  position: relative;
}

#clients .clients-wrap ul li {
  display: block;
  float: left;
  position: relative;
  width: 140px;
  height: 100px;
  line-height: 55px;
  text-align: center;
}
#clients .clients-wrap ul li img {
  vertical-align: middle;
  height: 80px;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  transition: all 0.3s linear;
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=65)";
  filter: alpha(opacity=65);
  opacity: 0.65;
}
#clients .clients-wrap ul li img:hover {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity: 1.0;
}
</style>

<!--about-content -->

    <div class="section">
        <div id="section1" class="container-fluid">
            <div class="row">

                    <div class="col-xs-7 col-sm-7 col-md-7">
                        <div class="section-1-content">
                        <h2>Disaster Information Management System</h2>
                        <p class="section1-p">This Disaster Information Management System is developed in order to visualize the risk and hazard locations in Changunarayan Municipality over municipal infrastructures and households. A GIS based Risk Assessment Platform is not only to provide visual information to municipality authorities but also to disseminate GIS based information to public. The systems also aims municipality level stakeholders use this system during planning, which ultimately supports participatory planning process. Platform should support multi-layered filter options. Maps and attributes are two important component of this platform. User has opportunity to user either maps or data as per their requirement. System uses Open Street Map (OSM) as a base map.</p>
                        <ul>
                            <li>Consolidated dataset of municipal risks and hazards</li>
                            <li>GIS layers of local utilities, infrastructures and settlements</li>
                            <li>Basic query and filter options for data analysis</li>
                            <li>A mobile application to view data in mobile phones</li>
                            <li>Efficient data import and update</li>

                        </ul>
                    </div>
                    </div>

            <div class="col-xs-5 col-sm-5 col-md-5" style="padding-top:0; padding-right: 0; padding-left: 0">
                <img class="section1-img" src="assets/img/info2.png">
            </div>
            </div>
        </div>




        <div id="section2" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="section2-img" src="assets/img/ris.png">
                    </div>
                    <div class="col-md-6">
                        <h4>Risk and Hazard Data</h4>
                        <p>All the risks and hazard data and their locations identified during participatory Vulnerability Capacity Assessment (VCA) in the municipality has been visualized in this platform.</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="section3" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Infrastructure and Utility Data Layers</h4>
                        <p>The available up-to-date GIS layers of the local infrastructures and utilities like Hospitals, Schools, Government Offices and other important locations have been managed as interactive layers in this platform.</p>
                    </div>

                    <div class="col-md-3">
                        <img class="section2-img" src="assets/img/utility.png"></div>
                </div>
            </div>
        </div>

        <div id="section4" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="section2-img" src="assets/img/hold.png">
                    </div>
                    <div class="col-md-6">
                        <h4>Household Data</h4>
                        <p>Household level data including demographic, socio-economic data along with location of all the households in the municipality have been included in this platform. Each house is interactive and further information of the house can be viewed.</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="section5" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Query and Filter Options</h4>
                        <p>Over the available datasets in the platform, basic query and filter operations can ba carried out for analysis.</p>
                    </div>

                    <div class="col-md-3">
                        <img class="section2-img" src="assets/img/query.png"></div>
                </div>
            </div>
        </div>
</div>
  <!--about-content-->

   <!-- Project Partnes -->
   <!-- Testimonials -->
    <div id="clients">
        <h3 class="proj text-center">Project Partners</h3>
        <br>
        <div class="clients-wrap text-center">
          <ul id="clients-list" class="clearfix">

			  <?php foreach($proj_data as $data){ ?>

            <li class="logos"><img src="<?php echo $data['project_pic'] ?>" alt="euro"></li>

					<?php } ?>
          </ul>
        </div><!-- @end .clients-wrap -->
      </div><!-- @end #clients -->
