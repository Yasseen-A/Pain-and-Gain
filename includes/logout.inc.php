<!--this some of the stuff that I had to learn myself-->
<!--This php file is in charge of logging the user out-->
<?php

if (isset($_POST['submit'])) {
	session_start();
	session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
