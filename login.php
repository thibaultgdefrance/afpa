<?php

    $login = "admin";
    $psswd = "admin";
    if(($_POST['username'] == $login) && ($_POST['psswd'] == $psswd)){
        header('Location: admin.html');
        exit(); 
    }else{
        echo "vous n'avez pas accés à cette page";
    }
