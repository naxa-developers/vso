
<!--main content start-->
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script>
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <section class="panel">
            <header class="panel-heading">
              Categories
              
              <span class="tools pull-right">
                <a href="<?php echo base_url()?>create_categories"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-plus"></i> Add Category</button></a>
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
                <table class="table table-hover" id="tb3">
                  <thead>





                    <tr>

                      <?php foreach($data[0] as $key => $value){

                        if($key == 'summary_list'){   ?>

                          <td>Summary List</td>

                        <?php }elseif($key == 'style'){?>

                          <td>Style</td>

                        <?php }elseif($key == 'popup_content'){?>

                          <td>Popup</td>

                        <?php }elseif($key == 'default_load'){?>

                          <td>Default Load</td>

                        <?php }elseif($key == 'summary'){?>



                        <?php }elseif($key == 'category_table'){?>

                        <?php }elseif($key == 'category_photo'){?>

                        <?php }elseif($key == 'ordering'){?>

                        <?php }else{?>
                          <td>

                            <?php

                            $cleanname = explode("_", $key);
                            foreach ($cleanname as $r) {
                              echo ucfirst($r)." ";
                            } ?>

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




                            if($key == 'summary_list'){   ?>

                              <td><a href="<?php echo base_url()?>update_summary?tbl=<?php echo $v['category_table'];?>"><button type="submit" class="btn-sm btn-success">Summary</button></a></td>

                            <?php }elseif($key == 'style'){?>

                              <td><a href="<?php echo base_url()?>manage_style?tbl=<?php echo $v['category_table'];?>"><button type="submit" class="btn-sm btn-info">Style</button></a> </td>

                            <?php }elseif($key == 'popup_content'){?>

                              <td><a href="<?php echo base_url()?>manage_popup?tbl=<?php echo $v['category_table'];?>"><button type="submit" class="btn-sm btn-primary">Popup</button></a></td>


                            <?php }elseif($key == 'default_load'){?>

                              <?php if($v['default_load']=='1'){  ?>

                                <td><label class="switch"><input type="checkbox" id="<?php echo $v['id'] ?>" class="default_switch" checked><span class="slider round"></span></label></td>

                              <?php }else{ ?>

                                <td><label class="switch"><input type="checkbox" id="<?php echo $v['id'] ?>" class="default_switch" ><span class="slider round"></span></label></td>

                              <?php  } ?>

                            <?php }elseif($key == 'summary'){?>




                            <?php }elseif($key == 'category_table'){?>

                            <?php }elseif($key == 'category_photo'){?>

                            <?php }elseif($key == 'ordering'){?>

                            <?php }else{?>


                              <td><?php echo $value;?></td>
                            <?php } } ?>
                            <td><a href="<?php echo base_url()?>data_tables?tbl_name=<?php echo base64_encode($v['category_table']);?>">View</a> /
                              <!-- <a href="<?php echo base_url()?>edit_categories?id=<?php echo base64_encode($v['id']);?>&& tbl=<?php echo base64_encode($tbl_name);?>">Edit</a> / -->
                              <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url()?>delete_data?id=<?php echo  $v['id'];?>&& tbl=<?php echo ($tbl_name);?>&& cat_tbl=<?php echo $v['category_table']  ?>">Delete</a>
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
<script>
  $(document).ready(function(){



  $('.default_switch').on('change',function(){
  console.log($(this).is(':checked'));
  var id = $(this).attr('id');


  if($(this).is(':checked')){
    console.log('checked');
     var def = 1;

     change_default(id,def);

  //$('.'+Class).attr('checked',true);


  }else{
  console.log('not-checked');
  var def=0;
   change_default(id,def);
  }




  });

  function change_default(id,value)
  {

//console.log(id);
//console.log(value);

$.ajax
({
type: "GET",
url: "<?php echo base_url(); ?>MapController/update_default?id="+id+"&value="+value,



success: function(response)
{
//alert(response);

}
});

  }



  });

</script>
