<?php

if(isset($_POST['username'])) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header("location: ./index.php");
}
