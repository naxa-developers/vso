<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                      <b>Reports</b>
                      <!-- <span class="tools pull-right">
                        <a href="<?php echo base_url()?>add_proj"><button type="submit" name="upload_data" class="btn btn-danger"><i class="fa fa-plus"></i> Add Project Partner</button></a>
                       </span> -->
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

                                if ($key=='id'||$key=='latitude'||$key=='longitude'||$key=='photo') {
                                  // code...
                                }else{
                                          ?>
                              <td>

                                <?php

               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      }?>

                              </td>
                            <?php  }} ?>
                            <td>
                              Operations
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>

                              <?php foreach($v as $key => $value) {

                                if ($key=='id'||$key=='latitude'||$key=='longitude'||$key=='photo') {
                                  // code...
                                }elseif($key=='status'){

                                    if($value=='ongoing'){
                                     echo '<td><button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target="#myModal'.$v['id'].'">Ongoing</button></td>';

                                   } elseif($value=='completed'){
                                      echo '<td><button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#myModal'.$v['id'].'">Completed</button></td>';

                                    } elseif($value=='pending'){
                                       echo '<td><button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModal'.$v['id'].'">Pending</button></td>';

                                   }else{

                                    echo '<td><button type="button" class="btn btn-round btn-warning" data-toggle="modal" data-target="#myModal'.$v['id'].'"> choose status</button></td>';
                                   }




                                 }else{ ?>





                              <td><?php echo $value;?></td>
                            <?php }}  ?>
                              <td>

                          <a href="<?php echo base_url()?>report/delete?id=<?php echo  $v['id'];?>">Delete</a>
                        </td>





                          </tr>

                          <!-- modal start -->


                          <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo  $v['id'];?>" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Change Status</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Choose Status.</p>

                                    <form action="" method="POST">
                                      <input type="text" name="id" value="<?php echo  $v['id'];?>" hidden>
                                <label class="radio-inline">
                                  <input type="radio" name="status" value="pending">Pending
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="status" value="ongoing">Ongoing
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="status" value="completed">Completed
                                </label>
                                <br><br>
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
