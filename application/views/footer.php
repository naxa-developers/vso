       <style type="text/css">
       label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}
div#exampleModal {
    overflow: hidden;
}
button.btn.btn-secondary {
    z-index: 0;
}
     </style>

      <footer id="website-footer" class="bg-dark">

        <div class="subscribe-wrap">
          <div class="container">
            <div class="row clearfix">
              <div class="col-md-4">
                <div class="fbox">
                  <h4><?php echo $site_info['footer_big'] ?></h4>
                  <p>
                    <?php echo $site_info['footer_small'] ?> &nbsp; <a href="<?php echo base_url()?>about" title="" class="btn btn-outline-light btn-sm">See More</a>
                  </p>

                </div>
              </div>

              <div class="col-md-4">
                <div class="fbox">
                  <h4><?php echo $site_info['subscribe'] ?></h4>
                  <form action="" method="">
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                            <button class="btn btn-secondary" name="submit"  type="submit" data-toggle="modal" data-target="#exampleModal"><?php echo $site_info['subscribe_btn'] ?></button>

                        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #111">Subscribe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="margin-left: 25px;">
        <div class="row">
          <div class="col-md-6">
            <form>
              <label>
                <input id="fb3" type="radio" name="fb" value="med" />
                <img src="<?php echo base_url();?>assets/img/dataset.png"  alt="Logo" height="90" >
                <p class="text-center" style="color: #111"> Datasets</p>
              </label>
            </div>

            <div class="col-md-6">
             <label>
              <input id="fb3" type="radio" name="fb" value="med" />
              <img src="<?php echo base_url();?>assets/img/dataset.png" alt="Logo" height="90">
              <p class="text-center"  style="color: #111"> Maps</p>
            </label>
          </div>

          <div class="col-md-6">
           <label>
            <input id="fb3" type="radio" name="fb" value="med" />
            <img src="<?php echo base_url();?>assets/img/dataset.png" alt="Logo" height="90">
            <p class="text-center" style="color: #111"> Publications</p>
          </label>
        </div>

        <div class="col-md-6">
         <label>
          <input id="fb3" type="radio" name="fb" value="med" />
          <img src="<?php echo base_url();?>assets/img/dataset.png" alt="Logo" height="90">
          <p class="text-center" style="color: #111">Contact</p>
        </label>
      </div>

      <div class="all-select" style="color: #111">
        <input type="radio" name="allselect"> Subscribe All
      </div>
    </div>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary">Subscribe</button>
  </form>
      </div>
    </div>
  </div>
</div>

                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-4">
                <div class="fbox">
                  <h4><?php echo $site_info['imp_link'] ?></h4>
                  <ul class="list-group">
                    <li><a href="<?php echo $site_info['1_link'] ?>" target="_blank"><?php echo $site_info['1_name'] ?></a></li>
                    <li><a href="<?php echo $site_info['2_link'] ?>" target="_blank"><?php echo $site_info['2_name'] ?></a></li>
                    <li><a href="<?php echo $site_info['3_link'] ?>" target="_blank"><?php echo $site_info['3_name'] ?></a></li>
                    <li><a href="<?php echo $site_info['4_link'] ?>" target="_blank"><?php echo $site_info['4_name'] ?></a></li>
                    <li><a href="<?php echo $site_info['5_link'] ?>" target="_blank"><?php echo $site_info['5_name'] ?></a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-6 sec-left">
                <p class="margin-top">
                  <a href="#" title="">Contact</a>
                  <a href="#" title="">Terms of Use</a>
                  <a href="#" title="">Privacy Policy</a>
                </p>
                <p>
                  &copy; 2018 <a href="#" title="">Naxa</a>. All Rights Reserved.
                </p>
              </div>
              <div class="col-md-6 sec-right">
                <p class="margin-top social-icons">
                  <a href="<?php echo $site_info['facebook'] ?>" title=""><i class="fa fa-facebook"></i></a>
                  <a href="<?php echo $site_info['twitter'] ?>" title=""><i class="fa fa-twitter"></i></a>
                  <a href="<?php echo $site_info['google'] ?>" title=""><i class="fa fa-google-plus"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>

      </footer>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

      <script type="text/javascript">
          document.onreadystatechange = function () {
            var state = document.readyState
            if (state == 'interactive') {
             document.getElementById('contents').style.visibility="hidden";
           } else if (state == 'complete') {
            setTimeout(function(){
             document.getElementById('interactive');
             document.getElementById('load').style.visibility="hidden";
             document.getElementById('website-header').style.visibility="visible";
           },1000);
          }
        }
      </script>

      <!--counter-->
      <script type="text/javascript">

      $(document).ready(function() {
        $('#hydropower').DataTable({
           dom: 'Bfrtip',



        });
      } );

        $('.count').each(function () {
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

  </body>

</html>
