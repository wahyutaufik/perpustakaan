<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 2:56 PM
 */
include('../../config/koneksi.php');
$id             = $_GET['id'];
$category		= $_POST['name'];
$query          = "UPDATE `category` SET `id`='$id',`name`='$category',`description`='' WHERE id='$id'";
$save           = mysql_query($query);

if($save){
    header("Location:../index.php?module=kategori_buku&message=update_success");
}