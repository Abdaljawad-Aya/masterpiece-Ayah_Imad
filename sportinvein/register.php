<?php include 'server.php'?>
<?php include 'includes/header.php';?>
<?php
//  include 'includes/db.php';
 ?>
<section id="1" class="team-section spad">
    <div class="header">
        <h2>Register</h2>
    </div>
    <form class="form" action="register.php" method="POST">
        <?php include 'errors.php';?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>

        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a> </p>

    </form>
</section>

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
                        <li> 077-668-8860</li>
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

<?php require 'includes/footer.php';?>
