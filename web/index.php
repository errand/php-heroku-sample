<?php

session_start();
?>

<html>
<head>

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
