<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 12:40 PM
 */
date_default_timezone_set("Asia/Bangkok");
include('../../config/koneksi.php');
// var_dump($_POST);exit;
$id             = $_GET['id'];
$pengembalian_date = date('Y-m-d');
$batas = strtotime($_POST['batas']);
$dateNow = strtotime($pengembalian_date);
if ($dateNow>$batas) {
	$denda = 5000;
} else{
	$denda = 0;
}
$query          = "UPDATE `borrow` SET `id`=$_POST[id],`book_id`=$_POST[book_id],`user_code`='$_POST[user_code]',`borrow_date`='$_POST[borrow_date]',`batas_pengembalian`='$_POST[batas]',`pengembalian_date`='$pengembalian_date',`denda`='$denda',`status`='$_POST[status]' WHERE id=$id";
$a = mysql_query($query);

header("Location:../index.php?module=pengembalian&message=update_success");
