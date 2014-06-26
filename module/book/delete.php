<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 5/26/14
 * Time: 1:02 PM
 */

include('../../config/koneksi.php');
$id = $_GET['id'];
$query = mysql_query("DELETE FROM `book` WHERE id='$id'");

if ($query){
    header("Location:../index.php?module=buku&message=delete_success");
}