<?php
session_start();
$_SESSION['login'] = "";
$_SESSION['psswd'] = "";
session_destroy(); 
header('Location: index.html');
?>