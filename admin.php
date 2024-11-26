<?php 

session_start(); 
if($_SESSION['role'] == 'admin') {
    session_destroy();
    header('localtion: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleadmin.css">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang administrator: <?php echo $_SESSION['name'];?></h1>
    <button><a href="backend/logout.css">Logout</a></button>
</body>
</html>