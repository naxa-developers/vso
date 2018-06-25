<style type="text/css">
h1.sub{
  font-size: 80px;

}
</style>

<!-- Add this script before </body> -->
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
     <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h">Total Reports</h4>

              <h1 class="sub" id="count"><?php echo $report ?></h1>


            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h">Users</h4>

              <h1 class="sub" id="count1"><?php echo $user ?></h1>


            </div>
          </div>
        </div>
      </section>
    </div>
   <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">

            <h4 class="widget-h">Data</h4>
            <h1 class="sub text-center" id="count2"><?php echo $map ?></h1>

          </div>
        </div>
      </section>
    </div>

  </div>

  <div class="row">
    <div class="col-md-8">
      <!--earning graph start-->
      <section class="panel">
        <header class="panel-heading">
          Graph <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
          </span>
        </header>
        <div class="panel-body">

          <div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        </div>
      </section>
      <!--earning graph end-->
    </div>
    <div class="col-md-4">
      <!--widget graph start-->
      <section class="panel">
        <div class="panel-body">

         <img src="<?php echo $max['photo']?>" alt="visited" height=330; width=310;>
         <!-- Tab panes -->

       </div>
       <p class="text-center"><b>Most Visited </b></p>


     </section>



     <!-- page end-->

</section>
</section>


<!--main content end-->
<script>
var home=parseInt("<?php echo $home ?>");
var map=parseInt("<?php echo $map ?>");
var report=parseInt("<?php echo $reports ?>");
var about=parseInt("<?php echo $about ?>");


window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Page Visited"
  },
  axisY: {
    title: ""
  },
  data: [{
    type: "column",
    showInLegend: true,
    legendMarkerColor: "grey",
    legendText: "Pages",
    dataPoints: [
      { y: home, label: "Home" },
      { y: map,  label: "Map" },
      { y: report,  label: "Reports" },
      { y: about,  label: "About" },

    ]
  }]
});
chart.render();

}
</script>


<script type="text/javascript">
  $('#count,#count1,#count2').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
