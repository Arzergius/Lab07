<?php
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
include('funciones.php');
$xc = conectar();
$sql = "SELECT * FROM users WHERE user = '".$user."' AND password = '".$password."'";
echo $sql;
$res = mysqli_query($xc, $sql) or die("Error");
$filas = mysqli_fetch_array($res);
if(isset($filas)){
    echo 'loqueado';
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: portafolio.php");
    echo $_SESSION['user'];
    exit();
}
else{
    echo 'Feka';
}
?>