<?php

session_start();
?>
<html>
<head>
<title>Sample Heroku app</title>
</head>
<body>
<?php
    if(!isset($_SESSION['username'])) {
        include './includes/login.php';
    } else {
        include './includes/logout.php';
    }
?>
</body>
</html>
