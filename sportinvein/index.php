
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

    <div class="row justify-content-center">
       <?php 
          include './includes/db.php';
         $query = "SELECT id, product , price, description, features , best_value FROM pricing ORDER BY id ASC";
         $results = mysqli_query($con, $query) or die ("database error:". mysqli_error($con));
         while($price = mysqli_fetch_assoc($results)){
       ?>
      <div class="col-lg-4 col-md-8">
        <div class="ps-item">
          <?php if($price['best_value']){?>
                <div class="pricing-table ribbon">
                   
                </div>
          <?php } ?>


          <h3><?php echo strtoupper($price['product']);?></h3>
          <div class="pi-price">
            <h2><?php echo $price['price'];?></h2>
            <span><?php echo $price['description'];?></span>
          </div>
          <ul> 
           <?php
            $featuresArray = preg_split("/\|\|\|\|/", $price['features']);
            foreach($featuresArray as $features){
           ?>
              <li><b><span></span>
                  <span><?php echo $features;?></span>
                  </b></li>
              <?php }?>
            <!-- <li>Free Riding</li>
            <li>Limited Equipment's</li>
            <li>Weight Losing Classes</li>

            <li>Time Restriction</li> -->
          </ul>
          <!-- <button type="submit" ></button> -->
          <a href="#small-dialog" class="primary-btn pricing-btn popup-with-zoom-anim <?php if($price['best_value'])?>" type="submit" 
          name="paypal"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" border="0" alt="PayPal Logo"
          >
          <!-- ENROLL NOW -->
           </a></div>
      </div>

      <?php }?>
     
     
</section>
<!-- Pricing Section End -->


<!-- start pop-up-grid -->



<!--end pop-up-grid -->

<!-- Gallery Section Begin -->

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
    
      
    <?php 
          include './includes/db.php';

          
         $query = "SELECT id, trainerName, trainerTitle , trainerImage  FROM trainers ORDER BY id ASC";
         $results = mysqli_query($con, $query) or die ("database error:". mysqli_error($con));
         while($trainer = mysqli_fetch_assoc($results)){
       ?>

        <div class="col-lg-4 ">
        
          <div class="ts-item set-bg" data-setbg="<?php echo $trainer['trainerImage'];?>">
            <div class="ts_text">
              <h4><?php echo $trainer['trainerName'];?></h4>
              <span><?php echo $trainer['trainerTitle'];?></span>
            </div>
          </div>
     

        </div>
<?php }?>
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
          <p>Amman,
            Jordan</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-mobile"></i>
          <ul>
            <li>077-668-8860</li>
            <li>077-795-8110</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text email">
          <i class="fa fa-envelope"></i>
          <p>Support.sportinvein@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Get In Touch Section End -->

<?php include 'includes/footer.php'; ?>
