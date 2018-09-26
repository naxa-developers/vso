

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
            <input class="form-control border-secondary border-right-0 rounded-0" type="search" placeholder="Search For.." id="myInput" onkeyup="myFunction()">
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
<?php $lang=$this->session->get_userdata('Language');
$con_lang=$lang['Language'];
$heading_en='<th><span>S.N</span></th>
<th data-th="DRR Volunteers"><span>Photo</span></th>
<th><span>Name</span></th>
<th><span>Organization</span></th>
<th><span>Post</span></th>
<th><span>Address</span></th>
<th><span>Phone No.</span></th>
<th><span>Email</span></th>';

$heading_nep='<th><span>क्र.स</span></th>
<th data-th="DRR Volunteers"><span>फोटो</span></th>
<th><span>नाम</span></th>
<th><span>संस्था</span></th>
<th><span>पद </span></th>
<th><span>ठेगाना</span></th>
<th><span>फोन नम्बर</span></th>
<th><span>इमेल</span></th>';

$heading_en_personnel='<th><span>S.N</span></th>
          <th data-th="Health Institutions"><span>Organization</span></th>
          <th><span>Address</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Alternate Phone No.</span></th>
          <th><span>Contact Person</span></th>
          <th><span>Post</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Email</span></th>
          <th><span>Website</span></th>';


$heading_nep_personnel='<th><span>क्र.स</span></th>
                <th data-th="Health Institutions"><span>संस्था</span></th>
                <th><span>ठेगाना</span></th>
                <th><span>फोन नम्बर.</span></th>
                <th><span>Alternate Phone No.</span></th>
                <th><span>Contact Person</span></th>
                <th><span>पद</span></th>
                <th><span>Personal No.</span></th>
                <th><span>इमेल</span></th>
                <th><span>Website</span></th>';


?>
<!-- table List -->
<div class="container" id="emergency_no">

  <?php  if ($con_lang=='en'){ ?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="chairperson-tab" data-toggle="tab" href="#chairpersons" role="tab" aria-controls="chairpersons" aria-selected="true">Chairpersons of Local Units</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chief-tab" data-toggle="tab" href="#cheif" role="tab" aria-controls="cheif" aria-selected="false">Chief of local level offices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="elected-tab" data-toggle="tab" href="#elected" role="tab" aria-controls="elected" aria-selected="false">Elected Representatives</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="municipal_ex-tab" data-toggle="tab" href="#municipal_ex" role="tab" aria-controls="municipal_ex" aria-selected="false">Municipal Executive Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="disaster-tab" data-toggle="tab" href="#disaster" role="tab" aria-controls="disaster" aria-selected="false">Municipality Level Disaster Management Committee,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nntds-tab" data-toggle="tab" href="#nntds" role="tab" aria-controls="nntds" aria-selected="false">NNTDS's Executive Committee</a>
      </li>
      <!-- break -->
      <li class="nav-item">
        <a class="nav-link" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="true">Health Institutions</a>
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




  <?php }else{ ?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="chairperson-tab" data-toggle="tab" href="#chairpersons" role="tab" aria-controls="chairpersons" aria-selected="true">स्थानिय तहका अध्यक्षहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chief-tab" data-toggle="tab" href="#cheif" role="tab" aria-controls="cheif" aria-selected="false">स्थानिय कार्यालयका प्रमुखहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="elected-tab" data-toggle="tab" href="#elected" role="tab" aria-controls="elected" aria-selected="false">निर्वाचित जनप्रतिनिधीहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="municipal_ex-tab" data-toggle="tab" href="#municipal_ex" role="tab" aria-controls="municipal_ex" aria-selected="false">पालिकाका कार्यकारी सदस्यहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="disaster-tab" data-toggle="tab" href="#disaster" role="tab" aria-controls="disaster" aria-selected="false">नगरपालिका तहको प्रकोप व्यवस्थापन समिति,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nntds-tab" data-toggle="tab" href="#nntds" role="tab" aria-controls="nntds" aria-selected="false">NNTDS को कार्यसमिति</a>
      </li>
      <!-- break -->
      <li class="nav-item">
        <a class="nav-link" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="true">स्वास्थ्य संस्थाहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">आपतकालिन परिचालकहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">सुरक्षा निकाय</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ngo-tab" data-toggle="tab" href="#ngo" role="tab" aria-controls="ngo" aria-selected="false">गैर सरकारी संस्थाहरु & अन्तराष्ट्रिय गैर सरकारी संस्थाहरु
</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="volunter-tab" data-toggle="tab" href="#volunter" role="tab" aria-controls="volunter" aria-selected="false">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="false">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
      </li>
    </ul>



  <?php } ?>





  <div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="chairpersons" role="tabpanel" aria-labelledby="chairpersons-tab">
  <br>
    <a href="get_csv_emergency?type=chairpersons&&name=Chairpersons_of_Local_Units&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
      <!-- <th><span>S.N</span></th>
      <th data-th="DRR Volunteers"><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th> -->
    </tr>
    <?php foreach ($chairpersons as $chairpersons) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $chairpersons['id'] ?>idchairpersons"><?php echo $chairpersons['id'] ?></td>
      <?php if($chairpersons['photo']==NULL){ ?>
          <td id="<?php echo $chairpersons['id'] ?>photochairpersons" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
      <?php }else{ ?>
       <td id="<?php echo $chairpersons['id'] ?>photochairpersons" ><img src="<?php echo $chairpersons['photo']?>" height="50" width="50"></td>
     <?php  } ?>
       <td id="<?php echo $chairpersons['id'] ?>namechairpersons"><?php echo $chairpersons['name'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>organizationchairpersons"><?php echo $chairpersons['organization'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>postchairpersons"><?php echo $chairpersons['post'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>addresschairpersons"><?php echo $chairpersons['address'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>phone_nochairpersons"><?php echo $chairpersons['phone_no'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>emailchairpersons"><?php echo $chairpersons['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>

   <div class="tab-pane fade show" id="cheif" role="tabpanel" aria-labelledby="cheif-tab">
  <br>
    <a href="get_csv_emergency?type=cheif&&name=Chief_of_local_level_offices&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($chief as $chief) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $chief['id'] ?>idcheif"><?php echo $chief['id'] ?></td>

       <?php if($chief['photo']==NULL){ ?>
       <td id="<?php echo $chief['id'] ?>photocheif" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
      <?php }else{ ?>
     <td id="<?php echo $chief['id'] ?>photocheif" ><img src="<?php echo $chief['photo']?>" height="50" width="50"></td>

      <?php  } ?>



       <td id="<?php echo $chief['id'] ?>namecheif"><?php echo $chief['name'] ?></td>
       <td id="<?php echo $chief['id'] ?>organizationcheif"><?php echo $chief['organization'] ?></td>
       <td id="<?php echo $chief['id'] ?>postcheif"><?php echo $chief['post'] ?></td>
       <td id="<?php echo $chief['id'] ?>addresscheif"><?php echo $chief['address'] ?></td>
       <td id="<?php echo $chief['id'] ?>phone_nocheif"><?php echo $chief['phone_no'] ?></td>
       <td id="<?php echo $chief['id'] ?>emailcheif"><?php echo $chief['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>


 <div class="tab-pane fade show" id="elected" role="tabpanel" aria-labelledby="elected-tab">
  <br>
    <a href="get_csv_emergency?type=elected&&name=Elected_Representatives&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($elected as $elected) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $elected['id'] ?>idelected"><?php echo $elected['id'] ?></td>

       <?php if($elected['photo']==NULL){ ?>
       <td id="<?php echo $elected['id'] ?>photoelected" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
      <?php }else{ ?>
        <td id="<?php echo $elected['id'] ?>photoelected" ><img src="<?php echo $elected['photo']?>" height="50" width="50"></td>

      <?php  } ?>


       <td id="<?php echo $elected['id'] ?>nameelected"><?php echo $elected['name'] ?></td>
       <td id="<?php echo $elected['id'] ?>organizationelected"><?php echo $elected['organization'] ?></td>
       <td id="<?php echo $elected['id'] ?>postelected"><?php echo $elected['post'] ?></td>
       <td id="<?php echo $elected['id'] ?>addresselected"><?php echo $elected['address'] ?></td>
       <td id="<?php echo $elected['id'] ?>phone_noelected"><?php echo $elected['phone_no'] ?></td>
       <td id="<?php echo $elected['id'] ?>emailelected"><?php echo $elected['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>
<!-- elected -->

 <div class="tab-pane fade show" id="municipal_ex" role="tabpanel" aria-labelledby="municipal_ex-tab">
  <br>
    <a href="get_csv_emergency?type=municipal_ex&&name=Municipal_Executive_Members&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($municipal_ex as $municipal_ex) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $municipal_ex['id'] ?>idmunicipal_ex"><?php echo $municipal_ex['id'] ?></td>

       <?php if($municipal_ex['photo']==NULL){ ?>
       <td id="<?php echo $municipal_ex['id'] ?>photomunicipal_ex" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
      <?php }else{ ?>
        <td id="<?php echo $municipal_ex['id'] ?>photomunicipal_ex" ><img src="<?php echo $municipal_ex['photo']?>" height="50" width="50"></td>

      <?php  } ?>




       <td id="<?php echo $municipal_ex['id'] ?>namemunicipal_ex"><?php echo $municipal_ex['name'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>organizationmunicipal_ex"><?php echo $municipal_ex['organization'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>postmunicipal_ex"><?php echo $municipal_ex['post'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>addressmunicipal_ex"><?php echo $municipal_ex['address'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>phone_nomunicipal_ex"><?php echo $municipal_ex['phone_no'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>emailmunicipal_ex"><?php echo $municipal_ex['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>


    <div class="tab-pane fade show" id="disaster" role="tabpanel" aria-labelledby="disaster-tab">
  <br>
    <a href="get_csv_emergency?type=disaster&&name=Municipality_Level_Disaster_Management_Committee&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($disaster as $disaster) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $disaster['id'] ?>iddisaster"><?php echo $disaster['id'] ?></td>

       <?php if($disaster['photo']==NULL){ ?>
       <td id="<?php echo $disaster['id'] ?>photodisaster" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
      <?php }else{ ?>
        <td id="<?php echo $disaster['id'] ?>photodisaster" ><img src="<?php echo $disaster['photo']?>" height="50" width="50"></td>

      <?php  } ?>


       <td id="<?php echo $disaster['id'] ?>photodisaster" ><img src="<?php echo $disaster['photo']?>" height="50" width="50"></td>


       <td id="<?php echo $disaster['id'] ?>namedisaster"><?php echo $disaster['name'] ?></td>
       <td id="<?php echo $disaster['id'] ?>organizationdisaster"><?php echo $disaster['organization'] ?></td>
       <td id="<?php echo $disaster['id'] ?>postdisaster"><?php echo $disaster['post'] ?></td>
       <td id="<?php echo $disaster['id'] ?>adisasteressdisaster"><?php echo $disaster['adisasteress'] ?></td>
       <td id="<?php echo $disaster['id'] ?>phone_nodisaster"><?php echo $disaster['phone_no'] ?></td>
       <td id="<?php echo $disaster['id'] ?>emaildisaster"><?php echo $disaster['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>
        <div class="tab-pane fade show" id="nntds" role="tabpanel" aria-labelledby="nntds-tab">
  <br>
    <a href="get_csv_emergency?type=nntds&&name=NNTDS_Executive_Committee&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($nntds as $nntds) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $nntds['id'] ?>idnntds"><?php echo $nntds['id'] ?></td>
       <?php if($nntds['photo']==NULL){ ?>
       <td id="<?php echo $nntds['id'] ?>photonntds" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
      <?php }else{ ?>
        <td id="<?php echo $nntds['id'] ?>photonntds" ><img src="<?php echo $nntds['photo']?>" height="50" width="50"></td>

      <?php  } ?>

       <td id="<?php echo $nntds['id'] ?>namenntds"><?php echo $nntds['name'] ?></td>
       <td id="<?php echo $nntds['id'] ?>organizationnntds"><?php echo $nntds['organization'] ?></td>
       <td id="<?php echo $nntds['id'] ?>postnntds"><?php echo $nntds['post'] ?></td>
       <td id="<?php echo $nntds['id'] ?>anntdsessnntds"><?php echo $nntds['address'] ?></td>
       <td id="<?php echo $nntds['id'] ?>phone_nonntds"><?php echo $nntds['phone_no'] ?></td>
       <td id="<?php echo $nntds['id'] ?>emailnntds"><?php echo $nntds['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>



    <div class="tab-pane fade show" id="health" role="tabpanel" aria-labelledby="health-tab">
      <br>
      <a href="get_csv_emergency?type=health&&name=Health_Institutions&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px; float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
      <div class="row" id="reportable">
       <!-- responsive table for displaying contact directory -->
       <table class="responstable">
        <tr>
          <?php if($con_lang=='en'){

            echo $heading_en_personnel;

           }else{

           echo $heading_nep_personnel;

          } ?>
          <!-- <th><span>S.N</span></th>
          <th data-th="Health Institutions"><span>Organization</span></th>
          <th><span>Address</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Alternate Phone No.</span></th>
          <th><span>Contact Person</span></th>
          <th><span>Post</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Email</span></th>
          <th><span>Website</span></th> -->
        </tr>


       <?php foreach ($health as  $health) {

        ?>

        <tr class="tr_tbl">
          <td id="<?php echo $health['id'] ?>idhealth"><?php echo $health['id'] ?></td>
          <td id="<?php echo $health['id'] ?>organizationhealth"><?php echo $health['organization'] ?></td>
          <td id="<?php echo $health['id'] ?>addresshealth"><?php echo $health['address'] ?></td>
          <td id="<?php echo $health['id'] ?>phone_nohealth"><?php echo $health['phone_no'] ?></td>
          <td id="<?php echo $health['id'] ?>alternate_phone_nohealth"><?php echo $health['alternate_phone_no'] ?></td>
          <td id="<?php echo $health['id'] ?>contact_personhealth"><?php echo $health['contact_person'] ?></td>
          <td id="<?php echo $health['id'] ?>contact_personhealth"><?php echo $health['post'] ?></td>
          <td id="<?php echo $health['id'] ?>personal_nohealth"><?php echo $health['personal_no'] ?></td>
          <td id="<?php echo $health['id'] ?>emailhealth"><?php echo $health['email'] ?></td>
          <td id="<?php echo $health['id'] ?>websitehealth"><?php echo $health['website'] ?></td>

        </tr>
 <?php } ?>

      </table>
    </div>
  </div>

  <div class="tab-pane fade show" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
    <br>
    <a href="get_csv_emergency?type=responders&&name=Emergency_Responders&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
    <div class="row" id="reportable">
     <!-- responsive table for displaying contact directory -->
     <table class="responstable">
      <tr>
        <?php if($con_lang=='en'){

          echo $heading_en_personnel;

         }else{

         echo $heading_nep_personnel;

        } ?>
      </tr>

  <?php foreach ($responders as $responders) {
    // code...
   ?>

      <tr class="tr_tbl">
        <td id="<?php echo $responders['id'] ?>idresponders"><?php echo $responders['id'] ?></td>
        <td id="<?php echo $responders['id'] ?>organizationresponders"><?php echo $responders['organization'] ?></td>
        <td id="<?php echo $responders['id'] ?>addressresponders"><?php echo $responders['address'] ?></td>
        <td id="<?php echo $responders['id'] ?>phone_noresponders"><?php echo $responders['phone_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>alternate_phone_noresponders"><?php echo $responders['alternate_phone_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>contact_personresponders"><?php echo $responders['contact_person'] ?></td>
        <td id="<?php echo $responders['id'] ?>personal_noresponders"><?php echo $responders['personal_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>emailresponders"><?php echo $responders['email'] ?></td>
        <td id="<?php echo $responders['id'] ?>websiteresponders"><?php echo $responders['website'] ?></td>

      </tr>

 <?php } ?>

    </table>
  </div>
</div>

<div class="tab-pane fade show" id="security" role="tabpanel" aria-labelledby="security-tab">
  <br>
    <a href="get_csv_emergency?type=security&&name=Security&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </tr>


    <?php foreach ($security as $security) {
      // code...
    } ?>
    <tr class="tr_tbl">
    <td id="<?php echo $security['id'] ?>idSecurity"><?php echo $security['id'] ?></td>
    <td id="<?php echo $security['id'] ?>organizationSecurity"><?php echo $security['organization'] ?></td>
    <td id="<?php echo $security['id'] ?>addressSecurity"><?php echo $security['address'] ?></td>
    <td id="<?php echo $security['id'] ?>phone_noSecurity"><?php echo $security['phone_no'] ?></td>
    <td id="<?php echo $security['id'] ?>alternate_phone_noSecurity"><?php echo $security['alternate_phone_no'] ?></td>
    <td id="<?php echo $security['id'] ?>contact_personSecurity"><?php echo $security['contact_person'] ?></td>
    <td id="<?php echo $security['id'] ?>personal_noSecurity"><?php echo $security['personal_no'] ?></td>
    <td id="<?php echo $security['id'] ?>emailSecurity"><?php echo $security['email'] ?></td>
    <td id="<?php echo $security['id'] ?>websiteSecurity"><?php echo $security['website'] ?></td>
  </tr>

  </table>
</div>
</div>

<div class="tab-pane fade show" id="ngo" role="tabpanel" aria-labelledby="ngo-tab">
  <br>
      <a href="get_csv_emergency?type=ngo&&name=NGOs_INGOs&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </tr>
    <?php foreach ($ngo as $ngo) {
      // code...
     ?>

        <tr class="tr_tbl">
          <td id="<?php echo $ngo['id'] ?>idngo"><?php echo $ngo['id'] ?></td>
          <td id="<?php echo $ngo['id'] ?>organizationngo"><?php echo $ngo['organization'] ?></td>
          <td id="<?php echo $ngo['id'] ?>addressngo"><?php echo $ngo['address'] ?></td>
          <td id="<?php echo $ngo['id'] ?>phone_nongo"><?php echo $ngo['phone_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>alternate_phone_nongo" ><?php echo $ngo['alternate_phone_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>contact_personngo"><?php echo $ngo['contact_person'] ?></td>
          <td id="<?php echo $ngo['id'] ?>personal_nongo"><?php echo $ngo['personal_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>emailngo"><?php echo $ngo['email'] ?></td>
          <td id="<?php echo $ngo['id'] ?>websitengo"><?php echo $ngo['website'] ?></td>

        </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="volunter" role="tabpanel" aria-labelledby="volunter-tab">
  <br>
    <a href="get_csv_emergency?type=ddr&&name=DRR_Volunteers&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($ddr as $ddr) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $ddr['id'] ?>idddr"><?php echo $ddr['id'] ?></td>

       <?php if($ddr['photo']==NULL){ ?>
           <td id="<?php echo $ddr['id'] ?>photoddr" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
        <?php }else{ ?>
        <td id="<?php echo $ddr['id'] ?>photoddr" ><img src="<?php echo $ddr['photo']?>" height="50" width="50"></td>
        <?php  } ?>



       <td id="<?php echo $ddr['id'] ?>nameddr"><?php echo $ddr['name'] ?></td>
       <td id="<?php echo $ddr['id'] ?>organizationddr"><?php echo $ddr['organization'] ?></td>
       <td id="<?php echo $ddr['id'] ?>postddr"><?php echo $ddr['post'] ?></td>
       <td id="<?php echo $ddr['id'] ?>addressddr"><?php echo $ddr['address'] ?></td>
       <td id="<?php echo $ddr['id'] ?>phone_noddr"><?php echo $ddr['phone_no'] ?></td>
       <td id="<?php echo $ddr['id'] ?>emailddr"><?php echo $ddr['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="person" role="tabpanel" aria-labelledby="person-tab">
  <br>
      <a href="get_csv_emergency?type=personnel&&name=Municipality_Personnel&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($personnel as $personnel) {

     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $personnel['id'] ?>idpersonnel"><?php echo $personnel['id'] ?></td>

       <?php if($personnel['photo']==NULL){ ?>
           <td id="<?php echo $personnel['id'] ?>photopersonnel" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
        <?php }else{ ?>
        <td id="<?php echo $personnel['id'] ?>photopersonnel" ><img src="<?php echo $personnel['photo']?>" height="50" width="50"></td>
        <?php  } ?>


       <td id="<?php echo $personnel['id'] ?>namepersonnel"><?php echo $personnel['name'] ?></td>
       <td id="<?php echo $personnel['id'] ?>organizationpersonnel"><?php echo $personnel['organization'] ?></td>
       <td id="<?php echo $personnel['id'] ?>postpersonnel"><?php echo $personnel['post'] ?></td>
       <td id="<?php echo $personnel['id'] ?>addresspersonnel"><?php echo $personnel['address'] ?></td>
       <td id="<?php echo $personnel['id'] ?>phone_nopersonnel"><?php echo $personnel['phone_no'] ?></td>
       <td id="<?php echo $personnel['id'] ?>emailpersonnel"><?php echo $personnel['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="member" role="tabpanel" aria-labelledby="member-tab">
  <br>
      <a href="get_csv_emergency?type=members&&name=Members_of_Municipal_Assembly&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </tr>
    <?php foreach ($members as $members) {

     ?>

        <tr class="tr_tbl">
          <td id="<?php echo $members['id'] ?>idmembers"><?php echo $members['id'] ?></td>

          <?php if($members['photo']==NULL){ ?>
              <td id="<?php echo $members['id'] ?>photomembers" ><img src="<?php echo base_url()?>/assets/img/admin.png" height="50" width="50"></td>
           <?php }else{ ?>
           <td id="<?php echo $members['id'] ?>photomembers" ><img src="<?php echo $members['photo']?>" height="50" width="50"></td>
           <?php  } ?>


          <td id="<?php echo $members['id'] ?>namemembers"><?php echo $members['name'] ?></td>
          <td id="<?php echo $members['id'] ?>organizationmembers"><?php echo $members['organization'] ?></td>
          <td id="<?php echo $members['id'] ?>postmembers"><?php echo $members['post'] ?></td>
          <td id="<?php echo $members['id'] ?>addressmembers"><?php echo $members['address'] ?></td>
          <td id="<?php echo $members['id'] ?>phone_nomembers"><?php echo $members['phone_no'] ?></td>
          <td id="<?php echo $members['id'] ?>emailmembers"><?php echo $members['email'] ?></td>

        </tr>

   <?php } ?>
  </table>
</div>
</div>
</div>

</div>

<script src="<?php echo base_url()?>assets/js/bootstrap-tabdrop.js"></script>
<script type="text/javascript">
 $(".nav-tabs").tabdrop();




  function myFunction() {
    // Declare variables
   var  input, filter, div, tr, i ,j;
    input = document.getElementById('myInput');

    filter = input.value.toUpperCase();

  //
     div = document.getElementsByClassName("tab-pane");
  //
     // td = document.getElementsByTagName('td');
     tr = document.getElementsByClassName('tr_tbl');
      // console.log(td);
  //   console.log(h5);
  //   console.log(div);
  //   console.log(filter);
  //   console.log(input);
  //
  //   // Loop through all list items, and hide those who don't match the search query
 // var ab='Juddha Barun Yantra Karyalaya'
 // console.log(ab.toUpperCase().indexOf(filter));
//console.log(tr);
 for(j = 0; j < tr.length; j++){
   //console.log(tr);
   var closeit = 0;
    for (i = 0; i < tr[j].children.length; i++) {
        var td = tr[j].children[i];
        //console.log(td);
        // a = h5[i].getElementsByTagName("a")[0];
         //console.log(td[i].innerHTML.toUpperCase().indexOf(filter));

        if(closeit == 0){
          $("#"+td.id).parent().css('display','none');
          //console.log("not found on"+td[i].id);

        }

        if ((td.innerText.toUpperCase().indexOf(filter) > -1) && closeit == 0) {
        // console.log("found on"+td.id);
        // console.log(closeit);

            $("#"+td.id).parent().css('display','');
            closeit = 1;


        }

    }
    //console.log("row");
}

  }


</script>
