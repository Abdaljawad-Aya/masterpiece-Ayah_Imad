<?php include 'includes/header.php'; ?>

<?php include './includes/db.php'; ?>

<?php include 'config.php'; ?>
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
    <?php
    // $query = mysqli_query($con, 'SELECT * FROM products ORDER BY id ASC');
    $query = mysqli_query(
        $con,
        'INSERT INTO products (name, price, currency) VALUES ("6 Month unlimited" , "JOD 59.0" , "JOD")'
    );
    if ($query->connect_errno) {
        echo 'Failed to connect to MySQL:' . $query->connect_error;
        exit();
    }
    // ($query = mysqli_query(
    //     $con,
    //     'INSERT INTO  products name , price , currency'
    // )) or die(mysqli_error($con));
    if ($query->num_rows > 0) {
        while ($row = new mysqli($query)) {
            $id = $row['id']; ?>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-8">
        <div class="ps-item">
          <h3>Class drop-in</h3>
          <div class="pi-price">
            <h2> JOD 39.0</h2>
            <span>SINGLE CLASS</span>
          </div>
          <ul>
            <li>Free riding</li>
            <li>Unlimited equipments</li>
            <li>Weight losing classes</li>

            <li>time restriction</li>
          </ul>
          <a href="#" class="primary-btn pricing-btn">Enroll now</a>

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
          <a href="#" class="primary-btn pricing-btn">Enroll now</a>
          <!-- <div id="paypal-button-container"></div> -->
          <!-- <script
            src="https://www.paypal.com/sdk/js?client-id=AffpkFem-SNIqz70nreqfcIBhe7ksAzIF4x5fVGijliEkfrab-TczDaNMKCPDLlWlOsMlmafY5sj90bp&currency=USD">
          // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
          </script> -->




        </div>
      </div>
      <div class="col-lg-4 col-md-8">
        <div class="ps-item">
          <h3><?php echo $row['name']; ?> 6 Month unlimited</h3>
          <div class="pi-price">
            <h2><?php echo $row['price']; ?> JOD 59.0</h2>
            <span>SINGLE CLASS</span>
          </div>
          <ul>
            <li>Free riding</li>
            <li>Unlimited equipments</li>
            <li>Personal trainer</li>
            <li>Weight losing classes</li>

            <li>No time restriction</li>
          </ul>
          <a href="checkout.php?id=<?php echo $id; ?>" class="primary-btn pricing-btn">Enroll now</a>
        </div>
      </div>


    </div>
    <?php
        }
    } else {
        echo '<p style="text-align:center;">Product(s) not found... </p>';
    }
    ?>
  </div>

</section>
<!-- Pricing Section End -->

<div id="pop-up">
  <div id="small-dialog" class="mfp-hide">
    <div class="pop_up">
      <div class="payment-online-form-left">
        <form id="signUpForm" class="paypal" action="#" method="post">
          <input type="hidden" name="Subscribe" value="1">
          <input type="hidden" name="Plan" value="">
          <input type="hidden" name="Price" value="">
          <h4>Sign Up</h4>
          <ul>
            <li> <input class="text-box-dark" type="text" placeholder="Name" name="Name" required> </li>

            <li> <input class="text-box-dark email" type="text" placeholder="Email" name="Email" required> </li>

            <li> <input class="text-box-dark" type="password" placeholder="Password" name="Paswword" required>
            </li>

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
          <a href="appointment.php" class="primary-btn btn-normal appoinment-btn">appointment</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="ts-slider owl-carousel">

        <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
            <div class="ts_text">
              <h4>Jamie Turner</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
            <div class="ts_text">
              <h4>John Myer</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-8.jpg">
            <div class="ts_text">
              <h4>Jillian Michaels</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ts-item set-bg" data-setbg="img/team/team-7.jpg">
            <div class="ts_text">
              <h4>Oscar Fox</h4>
              <span>Gym Trainer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Team Section End -->


<!--start Booking with a trainer  -->



<!-- End Booking with a trainer  -->
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

<?php require 'includes/footer.php'; ?>