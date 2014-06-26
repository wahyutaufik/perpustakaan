<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 2:53 PM
 */

include('../../config/koneksi.php');
// var_dump($_POST);exit();
$id         = $_GET['id'];
$username   = $_POST['username'];
$pass       = $_POST['password'];
$password   = base64_encode($pass);
$email      = $_POST['email'];
$full_name  = $_POST['full_name'];
$address    = $_POST['address'];
$phone      = $_POST['phone'];
$akses      = $_POST['akses'];
$query2     = mysql_query("SELECT * FROM user WHERE id='$id'");
$data       = mysql_fetch_array($query2);
$photo      = $data['photo'];
$query      = "UPDATE `user` SET `id`='$id',`username`='$username',`password`='$password',`email`='$email',`full_name`='$full_name',`address`='$address',`phone`='$phone',`photo`='$photo', `akses`='$akses' WHERE id='$id'";
$save       = mysql_query($query);
//var_dump($query);exit;

if($save){
    header("Location:../index.php?module=user&message=update_success");
}