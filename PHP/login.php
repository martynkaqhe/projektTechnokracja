<?php
    require('conn.php');
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Email/password.</h3><br/>
                  </div>";
        }
    }