<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                     <b>Emergency Contacts</b>
                      <span class="tools pull-right">
                        <a href="<?php echo base_url()?>add_emergency_personnel?cat=<?php echo $cat ?>"><button type="submit" name="upload_data" class="btn btn-danger"><i class="fa fa-plus"></i> Add Emergency Contact</button></a>
                       </span>
                  </header>
                  <div class="panel-body">

                    <?php
                      $error=	$this->session->flashdata('msg');
                       if($error){ ?>
                         <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Message!!!!</strong>  <?php echo $error ; ?>
                              </div>
                       <?php
                       }
                        ?>
                    <?php  if($data == NULL){   ?>

                      <h4> NO Data   </h4>

                    <?php }else{ ?>
                      <table class="table table-hover" id='tb1'>
                          <thead>





                          <tr>

                            <?php foreach($data[0] as $key => $value){

                                if($key=='category'){}else{

                                          ?>
                              <td>

                                <?php

               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      }?>

                              </td>
                            <?php  } }?>
                            <td>
                              Operations
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>

                              <?php foreach($v as $key => $value) {

                                if($key=='photo'){


            echo '<td><button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModal'.$v['id'].'"> change  Photo</button></td>';
                                      ?>
                              <?php   }elseif($key=='category'){}else{ ?>

                              <td><?php echo $value;?></td>
                            <?php }}  ?>
                              <td>
                                <a href="<?php echo base_url()?>edit_emergency_personnel?id=<?php echo base64_encode($v['id']);?> && cat=<?php echo $cat ?> && tbl=emergency_personnel">Edit</a> /
                                <a href="<?php echo base_url()?>delete_emergency?id=<?php echo $v['id'];?> && cat=<?php echo $cat ?> && tbl=emergency_personnel">Delete</a></td>





                          </tr>
                          <!-- modal start -->


                          <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo  $v['id'];?>" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Change Photo</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>.</p>

                                    <form action="" method="POST" enctype="multipart/form-data">
                                      <input type="text" name="id" value="<?php echo  $v['id'];?>" hidden>

                                                  <div class="form-group ">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-9">
                                                      <br>
                                                      <div class="col-md-6">
                                                        Upload Image
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="<?php echo  $v['photo'];?>" alt="" />
                                                          </div>
                                                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                          <div>
                                                            <span class="btn btn-white btn-file">
                                                              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                              <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                              <input type="file" name="emerg_pic" class="default" />
                                                            </span>


                                                          </div>
                                                        </div>
                                                      </div>
                                                      </div>
                                                      </div>
                                <button type="submit" name="submit" class="btn btn-danger">Change</button>
                              </form>

                                  </div>
                                  <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                  </div>
                                </div>

                              </div>
                            </div>
                          <!-- modal end -->

                        <?php  }?>
                          </tbody>
                      </table>
                    <?php }?>
                  </div>
              </section>

            </section>
        </div>
    </div>

        </div>
    <!-- page end-->
    </section>
</section>
<!--main content end-->