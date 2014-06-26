<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 2:56 PM
 */

include ('../../config/koneksi.php');
// var_dump($_POST);exit;

$category		= $_POST['name'];
$query          = "INSERT INTO category(id, name, description)
                   VALUES ('','$category','')";
$save           = mysql_query($query);
//var_dump($save);exit;

if($save){
    header("Location:../index.php?module=kategori_buku&message=success");
}