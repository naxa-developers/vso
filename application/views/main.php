<header class="masthead text-white text-center">
  <div class="overlay"></div>



  <div class="container">
    <div class="row" style="margin-top: -25px;">
      <div class="col-md-10 col-lg-9 col-xl-6 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="search" class="form-control form-control-lg" placeholder="What data are you looking for? ">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary"><i class="fa fa-search"> </i></button>
            </div>

          </div>
          <h5 class="text-center" style="color: black !important;">  </h5>
                    <div class="interior">
              <a class="btnas" href="#open-modal">Advanced Search</a>
            </div>
          </div>
          <div id="open-modal" class="modal-window">
            <div class="box1">
              <a href="#modal-close" title="Close" class="modal-close"><i class="fa fa-times"></i></a>
              <h5>Advanced Search</h5>
              <div class="row">
                <div class="col-6"><div class="form-group">

                  <input type="text" class="form-control" id="tt1" placeholder="Ward">
                </div></div>
                <div class="col-6"><div class="form-group">

                  <input type="text" class="form-control" id="tt2" placeholder="Data">
                </div></div>
              </div>
              <div class="row">
                <div class="col-6"> <div class="form-group">

                  <select class="form-control" id="sel1" >
                    <option>Select Ward </option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
                </div></div>
                <div class="col-6"> <div class="form-group">

                  <select class="form-control" id="sel1">
                    <option>Select Data</option>
                    <option>Risk and Hazards</option>
                    <option>Households</option>
                    <option>Schools</option>
                    <option>Health Facilities</option>
                    <option>Government Offices</option>
                    <option>Open Spaces</option>
                  </select>
                </div>

              </div>

            </div>
            <button type="button" class="btn btn-success text-center">Apply</button></div>
          </div>



      </form>
    </div>

</div>
</div>
</header>
<div class="grid-container">
  <div class="item1"> <h5> Browse  By Category</h5>
    <hr width="40%">

    <div class="row">

<?php foreach($data_cat as $data){ ?>

      <div class="col-lg-3 text-center">
       <a href="category.php"> <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
           <img src="<?php echo $data['category_photo']?>" class="img-responsive center-block">
         </div>
         <h6><?php echo ucwords($data['category_name'])?></h6>

       </div></a>
     </div>

   <?php } ?>


</div>

</div>
<div class="item2"><h5>Emergency Contacts</h5>
  <hr width="40%">
<!-- <h6> Roads Completed </h6>-->
<!--<div class="progress">-->
<!--  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
<!--</div>-->
<!--<br>-->
<!-- <h6> Literacy </h6>-->
<!--<div class="progress">-->
<!--  <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>-->
<!--</div>-->
<!--<br>-->
<!--<h6> Ongoing Projects </h6>-->
<!--<div class="progress">-->
<!--  <div class="progress-bar bg-info" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>-->
<!--</div>-->

<!--<br>-->
<!--<h6> Earthquake Affected Area </h6>-->
<!--<div class="progress">-->
<!--  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>-->
<!--</div>-->

<table class="table">
      <thead>
        <tr>

          <th>Name</th>
           <th>Address</th>
          <th>Contact NO</th>

        </tr>
      </thead>
      <tbody>

     <?php foreach($emerg_contact as $emrg_data) {?>

        <tr class="active">

          <td><?php echo $emrg_data['name']  ?></td>
          <td><?php echo $emrg_data['address']  ?></td>
          <td><?php echo $emrg_data['contact_number']  ?></td>
        </tr>
      <?php } ?>

      </tbody>
    </table>
    <span class="pull-right"><a href="contact.php" class="view">View all</a></span>
</div>
</div>



    <!-- Testimonials -->
    <div id="clients">
        <h3 class="proj text-center">Project Partners</h3>
        <br>
        <div class="clients-wrap text-center">
          <ul id="clients-list" class="clearfix">
            <?php foreach ($proj_data as $data){?>
            <li class="logos"><img src="<?php echo $data['project_pic'];  ?>" alt="euro"></li>

          <?php } ?>

          </ul>
        </div><!-- @end .clients-wrap -->
      </div><!-- @end #clients -->
