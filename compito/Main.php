<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $nome = mysqli_real_escape_string($con,$_POST['Nome']);
    $regista = mysqli_real_escape_string($con,$_POST['Regista']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where Nome='".$nome."' and password='".$regista."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid Film and Regista";
        }

    }
