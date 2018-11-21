<?php

    $login = "admin";
    $psswd = "admin";
    if(($_POST['username'] == $login) && ($_POST['psswd'] == $psswd)){
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['psswd'] = $psswd;
        header('Location: admin.php');
        exit(); 
    }else{
        echo "vous n'avez pas accés à cette page";
    }
