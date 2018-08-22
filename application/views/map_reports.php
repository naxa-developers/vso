
  <style>

   #map-table-jana{
        margin: 20px 0px 60px;
        background: #fff;
        overflow: hidden;
    }

    #reportable{
        overflow: auto;
        margin: 0.5em;
    }
    .responstable {
  margin: 1em 0em;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #000;
  border-radius: 0px;
  border: 1px solid #1f5cb2;
  font-size: 16px;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #7696c7;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
}
.responstable th:nth-child(2):after {
    display: none;
}
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
}
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 0.3em;
}
}
#map-table-jana .text-center h3{

}

#map-table-jana .report-down{
  padding: 25px;
  border-bottom: 1px solid #e7e7e7;
}

#map-table-jana .repo_filter{
  margin: 30px auto 15px;
}

</style>


<div class="container">
<div id="map-table-jana">

  <div class="row">
    <div class="col-md-12">
      <div class="report-down">
            <div class="text-center"><h3>Total Reports</h3></div>
            <div class="col-md-3 pull-right">
              <ul class="list-inline">
                <a href="ReportController/map_data_download"><li class="list-inline-item"><i class="fa fa-cloud-download"></i> Download </li></a>

                <!-- <li class="list-inline-item"><a href="#" title="pdf"><i class="fa fa-file-pdf-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="excel"><i class="fa fa-file-excel-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="image"><i class="fa fa-file-image-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="word"><i class="fa fa-file-word-o"></i></a></li> -->
              </ul>
            </div>
      </div>
  </div>
  </div>

<div class="row" id="reportable">
 <!-- responsive table for displaying contact directory -->
 <table class="responstable">
  <tr>
    <th><span>#</span></th>
    <th data-th="Incident detail"><span>Recieved Date</span></th>
    <!-- <th><span>Recieved Time</span></th> -->
    <th><span>Type of Incident</span></th>
    <th><span>Location</span></th>
    <th><span>Status</span></th>
    <th><span>Remarks</span></th>
  </tr>
  <tr>
    <!-- <td></td>
    <td><span class="report-form"><input type="date" class="form-control form-control-sm"></span></td>
    <td><span class="report-form"><input type="time" class="form-control form-control-sm"></span></td>
    <td><span class="report-form"><input type="text" class="form-control form-control-sm" placeholder="type of incident"></span></td>
    <td><span class="report-form"><input type="text" class="form-control form-control-sm" placeholder="place of incident"></span></td>
    <td><span class="report-form">
      <select class="custom-select multiselect-icon" name="code_status" style="margin: -22px 0px 0px; height: 32px;">
        <option value="0" selected disabled>Select</option>
        <option value="Solved">Actioned</option>
        <option value="Waiting">Pending</option>
        <option value="Issued">Verified</option>
        <option value="Piled">Queued</option>
      </select></span></td> -->
    <!-- <td><span class="report-form"><input type="text" class="form-control form-control-sm" placeholder="place of incident"></span></td> -->

  </tr>
  <?php foreach($data as $report){ ?>
  <tr>
    <td><a href="#" name="open_element" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-open"></i> Open</a></td>


    <td><?php echo $report['incident_time']?></td>
    <td><?php echo $report['incident_type']?></td>
    <td>Ward <?php echo $report['ward']?></td>
    <td><?php echo $report['status']?></td>
    <td><?php echo $report['message']?></td>

  </tr>
<?php } ?>

</table>

<div class="container">
<div class="row">
  <div class="col-md-12">
     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </div>
</div>
</div>

</div>
</div>
</div>
</div>
