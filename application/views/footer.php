
      <footer id="website-footer" class="bg-dark">

        <div class="subscribe-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="fbox">
                  <h4>Disaster Information Management Platform</h4>
                  <p>
                    This platform visualizes the data regarding risk and hazards over available dataset in order to enable basic risk assessment in the municipality.
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="fbox">
                  <h4>Subscribe To Our Newsletter</h4>
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Subscribe</button>
                      </div>
                    </div>
                  </form>
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
                  <a href="#" title="">About</a>
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
                  <a href="#" title=""><i class="fa fa-facebook"></i></a>
                  <a href="#" title=""><i class="fa fa-twitter"></i></a>
                  <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>

      </footer>


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



