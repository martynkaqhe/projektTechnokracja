<?php
    session_start();
    // Kasuje sesję
    if(session_destroy()) {
        // Przerzuca do loginu
        header("Location: login.php");
    }
?>
