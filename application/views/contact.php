

<style>

.nav-tabs,
.nav-pills {
  position: relative;
}
.tabdrop{
  width: 120px;
  margin-top: .5rem;
}

.nav-tabs li li i{
  visibility: hidden;
}

.hide {
  display: none;
}

.input-group-addon {
  position: absolute;
  right: 10px;
  bottom: 13px;
  z-index: 2;
}

.contact-search-1 {
  padding: 50px;
  border-bottom: 1px solid #eee;
  padding-left: 0px;
}

.responstable th {
  display: none;
  border: 1px solid transparent;
  background-color: lightslategray;
  color: #FFF;
  padding: 1em;
}

#reportable{
  overflow: auto;
  margin: 0em auto 3em;
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

.tabdrop .dropdown-menu a{
  padding: 20px;
}
</style>


<!--advance Search starts-->
<div class="container ">
    <div class="contact-search-1">
	<div class="row">
    <div class="col-sm-12 text-center">
        <div class="row no-gutters">
          <div class="col">
            <input class="form-control border-secondary border-right-0 rounded-0" type="search" placeholder="Search For.." id="example-search-input4">
          </div>
          <div class="col-auto">
            <button class="btn btn-secondary border-left-0 rounded-0 rounded-right" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
<!--advance Search ends-->

<!-- table List -->
<div class="container" id="emergency_no">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="true">Health Institutions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">Emergency Responders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Security</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="ngo-tab" data-toggle="tab" href="#ngo" role="tab" aria-controls="ngo" aria-selected="false">NGOs and INGOs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="volunter-tab" data-toggle="tab" href="#volunter" role="tab" aria-controls="volunter" aria-selected="false">DRR Volunteers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">Municipality Personnel</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="false">Members of Municipal Assemblysss</a>
    </li>
  </ul>


    <div class="col-sm-12 " style="margin: 10px auto;">
          <a href="#" class="btn btn-" role="button">Download</a>
    </div>


  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="health" role="tabpanel" aria-labelledby="health-tab">
      <div class="row" id="reportable">
       <!-- responsive table for displaying contact directory -->
       <table class="responstable">
        <tr>
          <th><span>S.N</span></th>
          <th data-th="Health Institutions"><span>Organization</span></th>
          <th><span>Address</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Alternate Phone No.</span></th>
          <th><span>Contact Person</span></th>
          <th><span>Post</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Email</span></th>
          <th><span>Website</span></th>
        </tr>


       <?php foreach ($health as  $health) {

        ?>

        <tr>
          <td><?php echo $health['id'] ?></td>
          <td><?php echo $health['organization'] ?></td>
          <td><?php echo $health['address'] ?></td>
          <td><?php echo $health['phone_no'] ?></td>
          <td><?php echo $health['alternate_phone_no'] ?></td>
          <td><?php echo $health['contact_person'] ?></td>
          <td><?php echo $health['personal_no'] ?></td>
          <td><?php echo $health['email'] ?></td>
          <td><?php echo $health['website'] ?></td>

        </tr>
 <?php } ?>

      </table>
    </div>
  </div>

  <div class="tab-pane fade show" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
    <div class="row" id="reportable">
     <!-- responsive table for displaying contact directory -->
     <table class="responstable">
      <tr>
        <th><span>S.N</span></th>
        <th data-th="Emergency Responders"><span>Organization</span></th>
        <th><span>Address</span></th>
        <th><span>Phone No.</span></th>
        <th><span>Alternate Phone No.</span></th>
        <th><span>Contact Person</span></th>
        <th><span>Post</span></th>
        <th><span>Phone No.</span></th>
        <th><span>Email</span></th>
        <th><span>Website</span></th>
      </tr>

  <?php foreach ($responders as $responders) {
    // code...
   ?>

      <tr>
        <td><?php echo $responders['id'] ?></td>
        <td><?php echo $responders['organization'] ?></td>
        <td><?php echo $responders['address'] ?></td>
        <td><?php echo $responders['phone_no'] ?></td>
        <td><?php echo $responders['alternate_phone_no'] ?></td>
        <td><?php echo $responders['contact_person'] ?></td>
        <td><?php echo $responders['personal_no'] ?></td>
        <td><?php echo $responders['email'] ?></td>
        <td><?php echo $responders['website'] ?></td>

      </tr>

 <?php } ?>

    </table>
  </div>
</div>

<div class="tab-pane fade show" id="security" role="tabpanel" aria-labelledby="security-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="Security"><span>Organization</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Alternate Phone No.</span></th>
      <th><span>Contact Person</span></th>
      <th><span>Post</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
      <th><span>Website</span></th>
    </tr>

    <?php foreach ($security as $security) {
      // code...
    } ?>

    <td><?php echo $security['id'] ?></td>
    <td><?php echo $security['organization'] ?></td>
    <td><?php echo $security['address'] ?></td>
    <td><?php echo $security['phone_no'] ?></td>
    <td><?php echo $security['alternate_phone_no'] ?></td>
    <td><?php echo $security['contact_person'] ?></td>
    <td><?php echo $security['personal_no'] ?></td>
    <td><?php echo $security['email'] ?></td>
    <td><?php echo $security['website'] ?></td>


  </table>
</div>
</div>

<div class="tab-pane fade show" id="ngo" role="tabpanel" aria-labelledby="ngo-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="NGOs and INGOs"><span>Organization</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Alternate Phone No.</span></th>
      <th><span>Contact Person</span></th>
      <th><span>Post</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
      <th><span>Website</span></th>
    </tr>
    <?php foreach ($ngo as $ngo) {
      // code...
     ?>

        <tr>
          <td><?php echo $ngo['id'] ?></td>
          <td><?php echo $ngo['organization'] ?></td>
          <td><?php echo $ngo['address'] ?></td>
          <td><?php echo $ngo['phone_no'] ?></td>
          <td><?php echo $ngo['alternate_phone_no'] ?></td>
          <td><?php echo $ngo['contact_person'] ?></td>
          <td><?php echo $ngo['personal_no'] ?></td>
          <td><?php echo $ngo['email'] ?></td>
          <td><?php echo $ngo['website'] ?></td>

        </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="volunter" role="tabpanel" aria-labelledby="volunter-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="DRR Volunteers"><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
    <?php foreach ($ddr as $ddr) {
      // code...
     ?>

     <tr>
       <td><?php echo $ddr['id'] ?></td>
       <td><img src="<?php echo $ddr['photo']?>" height="50" width="50"></td>
       <td><?php echo $ddr['name'] ?></td>
       <td><?php echo $ddr['organization'] ?></td>
       <td><?php echo $ddr['post'] ?></td>
       <td><?php echo $ddr['address'] ?></td>
       <td><?php echo $ddr['phone_no'] ?></td>
       <td><?php echo $ddr['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="person" role="tabpanel" aria-labelledby="person-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="Municipality Personnel"><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
    <?php foreach ($personnel as $personnel) {

     ?>

     <tr>
       <td><?php echo $personnel['id'] ?></td>
       <td><img src="<?php echo $personnel['photo']?>" height="50" width="50"></td>
       <td><?php echo $personnel['name'] ?></td>
       <td><?php echo $personnel['organization'] ?></td>
       <td><?php echo $personnel['post'] ?></td>
       <td><?php echo $personnel['address'] ?></td>
       <td><?php echo $personnel['phone_no'] ?></td>
       <td><?php echo $personnel['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="member" role="tabpanel" aria-labelledby="member-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="Members of Municipal Assembly"><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
    <?php foreach ($members as $members) {

     ?>

        <tr>
          <td><?php echo $members['id'] ?></td>
       <td><img src="<?php echo $members['photo']?>" height="50" width="50"></td>
          <td><?php echo $members['name'] ?></td>
          <td><?php echo $members['organization'] ?></td>
          <td><?php echo $members['post'] ?></td>
          <td><?php echo $members['address'] ?></td>
          <td><?php echo $members['phone_no'] ?></td>
          <td><?php echo $members['email'] ?></td>

        </tr>

   <?php } ?>
  </table>
</div>
</div>
</div>

</div>

<script src="<?php echo base_url()?>assets/jsbootstrap-tabdrop.js"></script>
<script type="text/javascript">
  $(".nav-tabs").tabdrop();
</script>
