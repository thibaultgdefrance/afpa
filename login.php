<?php

    // $login = "admin";
    // $psswd = "admin";

    $dsn = 'mysql:dbname=shop;host=10.115.145.5';
    $user = 'root';
    $password = 'root';

    try {
        $bdd = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $sql="SELECT * FROM customers WHERE name='".$_POST['username']."'";
    foreach ($bdd->query($sql) as $row){        

        if(($_POST['username'] == $row['name']) && ($_POST['psswd'] == $row['password'])){
            session_start();
            $_SESSION['login'] = $row['name'];
            $_SESSION['psswd'] = md5($row['password']);
            $_SESSION['type'] = $row['type'];
            $_SESSION['id'] = $row['idcustomers']+62000;
            if($row['type'] == "admin"){
                header('Location: admin.php');
                exit(); 
            }
            else{
                header('Location: index.html');
                exit(); 
            }
        }else{
            echo "vous n'avez pas accés à cette page";
        }

    }