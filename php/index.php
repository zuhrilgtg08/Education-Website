<?php
session_start();

if(isset($_SESSION['username'])){
    header("location: welcome.php");
}
?>

<html>
    <head>
        <title>
            sebelum login
        </title>
    </head>
    <body>
        
    </body>
</html>