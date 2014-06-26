<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 5:19 PM
 */
include('../../config/koneksi.php');
$id = $_GET['id'];
$query = mysql_query("DELETE FROM `user` WHERE id='$id'");

if ($query){
    header("Location:../index.php?module=user&message=delete_success");
}