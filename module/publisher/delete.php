<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 2:56 PM
 */
include('../../config/koneksi.php');
$id = $_GET['id'];
$query = mysql_query("DELETE FROM `publisher` WHERE id='$id'");

if ($query){
    header("Location:../index.php?module=penerbit&message=delete_success");
}