<?php
 session_start();

 if (!isset($_SESSION['username'])){
   $_SESSION['msg'] = "You must =log in first";
   header('location: login.php');
 }
 if(isset($_GET['logout'])){
   session_destroy();
   unset($_SESSION['username']);
   header("location: login.php");
 }

?>
<!-- Appointment Online -->
<?php include './includes/header.php'?>

<section id="1" class="team-section spad">
  
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3 class="alert alert-primary">
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
            
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p>  <a href="appointment.php?logout='1'" style="color: red;"><i class="fa fa-sign-out">logout</i></a> </p>
    <?php endif ?>
</div>

<b>
    <center id="appointment" class="style1">Appointment</center>
  </b>

  <form action="onlinebooking.php" method="POST">

    <table class="style2" width="550px">
      <tr>

        <td>Surname:</td>
        <td><input type="text" name="surname" placeholder="Surname" required></td>

        <td>Firstname:</td>
        <td><input type="text" name="firstname" placeholder="Firstname" required></td>

      </tr>

      <tr>
        <td>Address:</td>
        <td><input type="text" name="address" placeholder="Address" required></td>

        <td>Date of Birth:</td>
        <td><input type="text" name="dob" placeholder="DOB" required></td>

      </tr>
      <tr>
        <td>Gender:</td>
        <td>
          <input type="radio" name="gender" value="m" required>Male
          <input type="radio" name="gender" value="f" required>Female
        </td>
        <td>Do you declare a disability?</td>
        <td>
          <input type="radio" name="yes" value="yes" required>Yes
          <input type="radio" name="no" value="no" required>No
        </td>

      </tr>
      <tr>
        <td>Home Number:</td>
        <td><input type="text" name="number" placeholder="Home No"></td>

        <td>Mobile Number:</td>
        <td><input type="text" name="mobile" placeholder="Mobile No" required></td>
      </tr>
      <tr>
        <td>City:</td>
        <td><input type="text" name="city" placeholder="City"></td>

        <td>Post Code:</td>
        <td><input type="text" name="post_code" placeholder="Post Code" required></td>
      </tr>
      <tr>
        <!-- <td>&nbsp;</td> -->
        <td>&nbsp;</td>
        <td><input class="btnS btnS1" type="submit" value="Submit">
          <input class="btnS btnS1" type="reset" value="Reset">
        </td>
      </tr>

    </table>

  </form>
</section>
<!-- Appointment Online End-->

<?php include './includes/footer.php'?>
