<?php
/**
* Created by PhpStorm.
* User: wahyu
* Date: 5/26/14
* Time: 1:03 PM
*/

session_start();
include("config/koneksi.php");
$level = "";
$password = $_POST['password'];
$pass = base64_encode($password);
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($pass);
$login = mysql_query("SELECT username, akses, code FROM user WHERE username='$username' and password='$password'");

$data = mysql_fetch_array($login);
// var_dump($data);exit();
$jumlahdata = mysql_num_rows($login);

if($jumlahdata > 0){
	$_SESSION['username'] = $data['username'];
	$_SESSION['code']     = $data['code'];
	$_SESSION['akses']    = $data['akses'];
    header("Location:module/index.php?message=success");
} else {
    header("Location:index.php?message=failed");
}
