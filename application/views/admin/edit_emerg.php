<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
    <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Form Elements
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="">



              <input type="hidden" value="<?php echo $e_data['id']; ?>" name="id">




                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $e_data['name']; ?>" name="name" class="form-control round-input">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $e_data['address']; ?>" name="address" class="form-control round-input">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $e_data['contact_number']; ?>" name="contact_number" class="form-control round-input">
                    </div>
                </div>








                <div class="col-md-6">
              <button type="submit" name="submit" class="btn btn-info">Submit</button>

                 </div>



                </div>


                </div>
            </form>
        </div>
    </section>




    </div>
    </div>









    <!-- page end-->
    </section>
</section>
<!--main content end-->
