<?php 
session_start();
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    //panggil fungsi
    switch (@$_GET['mod']){
        case 'guru':
        include_once 'controller/guru.php';
        break;
        case 'data':
        include_once 'views/guru/jabatan.php';
        break;
        default:
        include_once 'controller/login.php';
    }
}else{
    //panggil cont login
    include_once 'controller/login.php';
}
?>