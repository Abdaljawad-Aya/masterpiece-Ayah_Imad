<!-- aside note the form works fine but some validation not working  -->

<?php require("includes/header.php") ?>

<?php require("./includes/db.php") ?>
<?php


$statusMsg = "";
$msgClass = "";

// Error messages
$nameEmptyErr = "";
$EmailTitleEmptyErr = ""; 
$nameErr = "";
$emailErr = "";

if (isset($_POST['submit'])) {
  //get the submitted form data
  $email   = $con->real_escape_string($_POST['email']);
  $name    = $con->real_escape_string($_POST['name']);

  // $name_error = "Name must contain only alphabets and space";

  $email_title = $con->real_escape_string($_POST['email_title']);
  $visitor_message = $con->real_escape_string($_POST['visitor_message']);


  //query to insert the variables data into the database 
  $sql = "INSERT INTO contactUs (name , email , email_title , visitor_message) VALUES ('" . $email . "', '" . $name . "','" . $email_title . "', '" . $visitor_message . "' )";
  //Execute the query and returning a mesage 
  if (!$result = $con->query($sql)) {
    die('Error occured [' . $con->error . ']');
  }

}

// function checkInput($input) {
//   $input = trim($input);
//   $input = stripslashes($input);
//   $input = htmlspecialchars($input);
//   return $input;
// }   
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb-text">
          <h2>Contact Us</h2>
          <div class="bt-option">
            <a href="./index.php">Home</a>
            <a href="#">Pages</a>
            <span>Contact us</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title contact-title">
          <span>Contact Us</span>
          <h2>GET IN TOUCH</h2>
        </div>
        <div class="contact-widget">
          <div class="cw-text">
            <i class="fa fa-map-marker"></i>
            <p>Jordan<br />Amman</p>
          </div>
          <div class="cw-text">
            <i class="fa fa-mobile"></i>
            <ul>
              <li>077-795-8110</li>
              <li>077-668-8860</li>
            </ul>
          </div>
          <div class="cw-text email">
            <i class="fa fa-envelope"></i>
            <p>Support.sportinvein@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="leave-comment">
        <?php if (!empty($statusMsg)) { ?>
            <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>"><?php echo $statusMsg; ?></p>
          <?php } ?>

          <!-- contactValidation.php -->
          <?php include('contactValidation.php'); ?>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <!-- Name -->
            <div class="form-group row">
             
              <input type="text" id="name" name="name" placeholder="Name" pattern=[A-Z\sa-z]{3,20} required class="form-control">
               <!-- Error -->
              <?php echo $nameEmptyErr; ?>
              <?php echo $nameErr; ?>
            </div>
            <!-- Email -->
            <div class="form-group row">
              <input type="email" id="email" name="email" placeholder="Email" required class="form-control">

              <!-- Error -->
              <?php echo $EmailTitleEmptyErr; ?>
              <?php echo $emailErr; ?>
            </div>
            <!-- Title -->
            <div class="form-group row">
              <input type="text" id="title" name="email_title" placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60} required class="form-control">
              <!-- Error -->
          <?php echo $EmailTitleEmptyErr; ?>
            </div>
            <!-- Text area -->
            <div class="form-group row">
              <textarea id="message" name="visitor_message" placeholder="Say whatever you want" class="form-control"></textarea>
            </div>
            <!-- Submit button -->
            <button type="submit" name="submit" value="Submit">Submit</button>
       
         </form>
        </div>
      </div>
    </div>

    <!-- Google MAP -->

    <div id="map"></div>
    <!-- <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"
        height="550" style="border:0;" allowfullscreen=""></iframe>
    </div> -->
  </div>
</section>
<!-- Contact Section End -->

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-map-marker"></i>
          <p>Amman,<br /> Jordan</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-mobile"></i>
          <ul>
            <li>077-795-8110</li>
            <li>077-668-8860</li>
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

<?php require("includes/footer.php") ?>