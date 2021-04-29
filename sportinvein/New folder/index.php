<?php include("includes/header.php") ?>

<?php include("./includes/db.php"); ?>
<!-- Hero Section Begin -->
<section class="hero-section">
  <div class="hs-slider owl-carousel">
    <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="hi-text">
              <span>Shape your body</span>
              <h1>Be <strong>strong</strong> traning hard</h1>
              <a href="getInfo.php" class="primary-btn">Get info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="hi-text">
              <span>Shape your body</span>
              <h1>Be <strong>strong</strong> traning hard</h1>
              <a href="getInfo.php" class="primary-btn">Get info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- ChoseUs Section Begin -->
<section class="choseus-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Why chose us?</span>
          <h2>PUSH YOUR LIMITS FORWARD</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-034-stationary-bike"></span>
          <h4>Modern equipment</h4>
          <p>The equipment ranges from balls, nets, and protective gear like helmets.protective gear or a tool used to
            help the athletes play the sport</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-033-juice"></span>
          <h4>Healthy nutrition plan</h4>
          <p>A healthy eating plan gives your body the nutrients it needs every day while staying within your daily
            calorie goal for weight loss. </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-002-dumbell"></span>
          <h4>Proffesponal training plan</h4>
          <p>The training plan will include all topics, knowledge and skills that you need to be able to do
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-014-heart-beat"></span>
          <h4>Unique to your needs</h4>
          <p>Our goal</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ChoseUs Section End -->

<!-- Classes Section Begin -->
<section class="classes-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Our Classes</span>
          <h2>WHAT WE CAN OFFER</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="class-item">
          <div class="ci-pic">
            <img src="img/classes/class-6.jpg" alt="">
          </div>
          <div class="ci-text">
            <span>STRENGTH</span>
            <h5>Weightlifting</h5>
            <a href="https://youtu.be/VMaBfcRprAU"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="class-item">
          <div class="ci-pic">
            <img src="img/classes/class-9.jpg" alt="">
          </div>
          <div class="ci-text">
            <span>Cardio</span>
            <h5>Indoor cycling</h5>
            <a href="https://youtu.be/csNeUKYBW0E"><i class=" fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="class-item">
          <div class="ci-pic">
            <img src="img/classes/class-3.jpg" alt="">
          </div>
          <div class="ci-text">
            <span>STRENGTH</span>
            <h5>Kettlebell power</h5>
            <a href="https://youtu.be/IP9iM2AxClc"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="class-item">
          <div class="ci-pic">
            <img src="img/classes/class-4.jpg" alt="">
          </div>
          <div class="ci-text">
            <span>Intense</span>
            <h4>Bodybuilding</h4>
            <a href="https://youtu.be/bTGPfJUJRh0"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="class-item">
          <div class="ci-pic">
            <img src="img/classes/class-5.jpg" alt="">
          </div>
          <div class="ci-text">
            <span>Training</span>
            <h4>Boxing</h4>
            <a href="https://youtu.be/B6DefSfqZ4w"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="bs-text">
          <h2>registration now to get more deals</h2>
          <div class="bt-tips">Where health, beauty and fitness meet.</div>
          <a href="#1" class="primary-btn  btn-normal">Appointment</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ajax code start -->
<script>
$(document).ready(function() {
  $('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });
  $('.popup-with-zoom-anim').on('click', function(e) {
    $('#signUpForm').find('input[name="Plan"]').val($(this).data("plan"));
    $('#signUpForm').find('input[name="Price"]').val($(this).data("price"));

  });
  $('#signUpForm').validate({
    errorPlacement: function(error, element) {
      if (element.attr('name') == 'Terms') {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    }
  });
  if ($('#paypalForm').length > 0) {
    $('#paypalForm').trigger('submit');
  }
});
</script>
<!-- Ajax code end -->
<!-- Banner Section End -->

<section class="priceing-table w3l">
  <div class="wrap">
    <!-- <h1>Subscription Sign up Form</h1> -->
    <div class="priceing-table-main">
      <?php
      if (isset($_POST['Subscribe']) && !empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['Price']) && in_array($_POST['Plan'], array('basic', 'premium', 'standart'))) {


        // $con = new mysqli($SETTINGS['hostname'], $SETTINGS['mysql_user'], $SETTINGS['mysql_pass'], $SETTINGS['mysql_database']);
        // if ($con->connect_error) {
        //   die('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
        // }

        $data = array(
          'name' => "'" . $con->real_escape_string($_POST['Name']) . "'",

          'email' => "'" . $con->real_escape_string($_POST['Email']) . "'",
          'password' => "'" . $con->real_escape_string($_POST['Password']) . "'",
          'phone' => "'" . $con->real_escape_string($_POST['Phone']) . "'",
          'plan' => "'" . $con->real_escape_string($_POST['Plan']) . "'",
          'data_created' => 'NOW()',
          'ip' => "'" . $_SERVER['REMOTE_ADDR'] . "'",
        );

        $sql = "REPLACE INTO `" . 'registrations' . "` (`" . implode("`, `", array_keys($data)) . "`) VALUES (" .
          implode(", ", array_values($data)) . ")";
        if ($con->query($sql) === TRUE) {
          $last_id = $con->insert_id;

      ?>
      <div class="paypal-form">
        <h3>Redirecting to paypal.com ...</h3>
        <img src="img/ajax/ajax-loader.gif" alt="Ajax Loader">
        <form id="paypalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="display: inline;">

          <!-- input start -->
          <input type="hidden" name="cmd" value="_xclick-subscriptions" />

          <!-- <input type="hidden" name="business" value="<?php echo $SETTINGS["paypal_address"]; ?>" /> -->

          <input type="hidden" name="item_name" value="<?php echo $_POST['Plan']; ?>" />

          <input type="hidden" name="custom" value="<?php echo $con->insert_id; ?>" />
          <input type="hidden" name="currency_code" value="JOD" />
          <input type="hidden" name="lc" value="JO" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="no_shipping" value="1" />

          <!-- a3 – Regular subscription price. -->
          <input type="hidden" name="a3" value="<?php echo number_format($_POST['Price'], 2, '.', ''); ?>" />

          <!-- p3 – Subscription duration in an integer format. The valid range will be based on the units specified in t3. -->
          <input type="hidden" name="p3" value="1" />

          <!-- Regular subscription units of duration -->
          <input type="hidden" name="t3" value="M" />
        </form>
      </div>
      <?php
        } else {
        ?>
      <div class="paypal-form">
        <h3>Something went wrong</h3>
      </div>
      <?php
        }
        $con->close();
      } else {
        ?>

      <!-- Pricing Section Begin -->


      <section class="pricing-section spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <span>Our Plan</span>
                <h2>Choose your pricing plan</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
              <div class="ps-item">
                <h3>Class drop-in</h3>
                <div class="pi-price">
                  <h2>JOD 39.0</h2>
                  <span>SINGLE CLASS</span>
                </div>
                <ul>
                  <li>Free riding</li>
                  <li>Unlimited equipments</li>
                  <!-- <li>Personal trainer</li> -->
                  <li>Weight losing classes</li>

                  <li>time restriction</li>
                </ul>
                <a href="#small-dialog" class="primary-btn pricing-btn popup-with-zoom-anim" data-plan="basic"
                  data-price="39.0">Enroll
                  now</a>
                <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-8">
              <div class="ps-item">
                <h3>12 Month unlimited</h3>
                <div class="pi-price">
                  <h2>JOD 99.0</h2>
                  <span>SINGLE CLASS</span>
                </div>
                <ul>
                  <li>Free riding</li>
                  <li>Unlimited equipments</li>
                  <li>Personal trainer</li>
                  <li>Weight losing classes</li>
                  <li>No time restriction</li>
                </ul>
                <a href="#small-dialog" class="primary-btn pricing-btn popup-with-zoom-anim" data-plan="premium"
                  data-price="99.0">Enroll
                  now</a>
                <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-8">
              <div class="ps-item">
                <h3>6 Month unlimited</h3>
                <div class="pi-price">
                  <h2>JOD 59.0</h2>
                  <span>SINGLE CLASS</span>
                </div>
                <ul>
                  <li>Free riding</li>
                  <li>Unlimited equipments</li>
                  <li>Personal trainer</li>
                  <li>Weight losing classes</li>

                  <li>No time restriction</li>
                </ul>
                <a href="#small-dialog" class="primary-btn pricing-btn popup-with-zoom-anim" data-plan="standart"
                  data-price="59.0">Enroll
                  now</a>
                <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> -->
              </div>
              <div class="clear"></div>

            </div>
            <?php
          }
            ?>
          </div>
        </div>
      </section>

      <!-- Pricing Section End -->
    </div>
  </div>

</section>

<div id="pop-up">
  <div id="small-dialog" class="mfp-hide">
    <div class="pop_up">
      <div class="payment-online-form-left">
        <form id="signUpForm" action="#" method="post">
          <input type="hidden" name="Subscribe" value="1">
          <input type="hidden" name="Plan" value="">
          <input type="hidden" name="Price" value="">
          <h4>Sign Up</h4>
          <ul>
            <li> <input class="text-box-dark" type="text" placeholder="Name" name="Name" required> </li>

            <li> <input class="text-box-dark email" type="text" placeholder="Email" name="Email" required> </li>

            <li> <input class="text-box-dark" type="password" placeholder="Password" name="Paswword" required></li>

            <li> <input class="text-box-dark" type="text" placeholder="Phone" name="Phone" required> </li>
          </ul>
          <span class="checkbox1">
            <label class="checkbox"><input type="checkbox" name="Terms" checked="" required>
              <li> </li> I Accept Terms.
            </label>
          </span>
          <ul class="payment-sendbtns">
            <li><input type="submit" value="Submit"></li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- start pop-up-grid -->



<!--end pop-up-grid -->

<!-- Gallery Section Begin -->
<!-- <div class="gallery-section">
  <div class="gallery">
    <div class="grid-sizer"></div>
    <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
      <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
    </div>
    <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
      <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
    </div>
    <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
      <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
    </div>
    <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
      <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
    </div>
    <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
      <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
    </div>
    <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
      <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
    </div>
  </div>
</div> -->
<!-- Gallery Section End -->

<!-- Team Section Begin -->
<section id="1" class="team-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="team-title">
          <div class="section-title">
            <span>Our Team</span>
            <h2>TRAIN WITH EXPERTS</h2>
          </div>
          <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="ts-slider owl-carousel">
        <!-- <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
            <div class="ts_text">
              <h4>Athart Rachel</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div> -->
        <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
            <div class="ts_text">
              <h4>Athart Rachel</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
            <div class="ts_text">
              <h4>Athart Rachel</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
            <div class="ts_text">
              <h4>Athart Rachel</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
            <div class="ts_text">
              <h4>Athart Rachel</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
            <div class="ts_text">
              <h4>Athart Rachel</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>
<!-- Team Section End -->

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-map-marker"></i>
          <p>333 Middle Winchendon Rd, Rindge,<br /> NH 03461</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-mobile"></i>
          <ul>
            <li>125-711-811</li>
            <li>125-668-886</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text email">
          <i class="fa fa-envelope"></i>
          <p>Support.gymcenter@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Get In Touch Section End -->

<?php require("includes/footer.php") ?>