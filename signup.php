<!--this is some of the stuff I had to learn myself-->
<!-- This is what the user will see once they click on the sign up button so that they can input
their details which will be saved to a database-->

<?php
  include_once 'header.php';
?>

<section class="main-container">
    <div class="wrapper">
        <center><h2 class="signup-heading">Sign up</h2><center>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <input type="text" name="first" placeholder="First name">
          <input type="text" name="last" placeholder="Last name">
          <input type="text" name="email" placeholder="E-mail">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</section>
