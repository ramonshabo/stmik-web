<?php 
if($_SERVER['REQUEST_METHOD']==='GET'){
    $email = $_GET['email'];
    $password = $_GET['password'];

    echo 'ini data dikirim melalui Method GET'.'<br>';
    echo $email . ' dan ' . $password;
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo 'ini data dikirim melalui Method POST :'.'<br>';
    echo $email . ' dan ' . $password;
}

?>