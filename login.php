<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="psswd" placeholder="password">
    </form>
</body>
</html>
<?php

    $login = "admin";
    $psswd = "admin";
    if(($_POST['username'] == $login) && ($_POST['psswd'] == $psswd){
        header('Location: admin.html');
        exit(); 
    }else{
        echo "vous n'avez pas accés à cette page";
    }
