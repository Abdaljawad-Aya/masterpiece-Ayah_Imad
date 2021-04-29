<?php include 'server.php'?>
<?php include 'includes/header.php';?>


<section id="1" class="team-section spad">

    <div class="header">
        <h2>Login</h2>
    </div>


    <form class="formlogin" action="login.php" method="post">
        <?php include 'errors.php';?>
        <div class="input-group ">
            <label for="">Username</label>
            <input type="text" name="username" value="">
        </div>
        <!--  -->
        <div class="input-group ">
            <label for="">Password</label>
            <input type="password" name="password" value="">
        </div>
        <div class="input-group ">
            <button type="submit" class="btnlogin" name="login_user">Login</button>
        </div>

        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</section>
<?php include 'includes/footer.php';?>
