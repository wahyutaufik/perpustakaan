<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 2:56 PM
 */

include ('../../config/koneksi.php');

$name   = $_POST['publisher_name'];
$address= $_POST['address'];
$phone  = $_POST['phone'];
$query  = "INSERT INTO publisher(id, publisher_name, address, phone)
           VALUES ('','$name','$address','$phone')";
$save   = mysql_query($query);

if($save){
    header("Location:../index.php?module=penerbit&message=success");
}