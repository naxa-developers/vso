<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Basic Formss
                      <span class="tools pull-right">
                       <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Csv Format Example</button>
                         </span>
                    </header>

                    <div class="panel-body">

                      <?php
                        $error=	$this->session->flashdata('msg');
                         if($error){ ?>
                           <div class="alert alert-info alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Message!!!!  </strong>   <?php echo $error ; ?>
                                </div>
                         <?php
                         }
                          ?>

                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: Select a Csv File to Upload to Table</h5><br>
                            <form role="form" method="POST" action="" enctype="multipart/form-data">


                                  <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" name="fileToUpload" id="exampleInputFile">

                                  </div>


                            <button type="submit" name="submit" class="btn btn-info">Upload</button>
                        </form>
                        </div>

                    </div>

           <!-- modal start -->


           <div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">csv format should be in following format</h4>
        </div>
        <div class="modal-body">


          <p>Csv format should be as given in the exanple table. </p>
          <p>Csv table should not contain multiheaders </p>
          <p>S.n / id  such kind of column is not needed .</p>

         <!-- table start -->

          <table class="table table-bordered">
  <thead>
    <tr>
      <th>Longitude</th>
      <th>Latitude</th>
      <th>other column</th>
      <th>other column</th>
      <th>other column</th>
      <th>other column</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1st column should be Longitude</td>
      <td>2nd column should be latitude</td>
      <td>other data</td>
      <td>other data</td>
      <td>other data</td>
      <td>other data</td>
    </tr>

</table>

<!-- table end -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>

           <!-- modal end -->


                </section>

        </div>

    </div>

<!-- kjljlkjklj -->








    <!-- page end-->
    </section>
</section>
<!--main content end-->
