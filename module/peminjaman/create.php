<?php
date_default_timezone_set("Asia/Bangkok");
include ('../../config/koneksi.php');

$user_code        = $_POST['user_code'];
$book_id          = $_POST['book_id'];
$date_now         = date('Y-m-d');
$dateOneWeekAdded = strtotime(date("Y-m-d", strtotime($date_now)) . " +1 week");
$batas            = date("Y-m-d",$dateOneWeekAdded);
$status           = 'Not Returned';

$book = mysql_query("SELECT * FROM book");
while ($data = mysql_fetch_array($book)) {
	// $up_query		  = "UPDATE book set id = $data[id], name = '$data[name]', category = '$data[category]', publisher = '$data[publisher]', description = '$data[description]', page = $data[page], publish_year = $data[publish_year], author = '$data[author]', stock = $saldo_stock WHERE id = 2";

	// $a = mysql_query($up_query);
}
	$saldo_stock	  = $data['stock'] - 1;

	$query            = "INSERT INTO `borrow`(`id`, `book_id`, `user_code`, `borrow_date`, `batas_pengembalian`, `pengembalian_date`, `denda`, `status`) 
						 VALUES ('','$book_id','$user_code','$date_now','$batas','','','$status')";
	mysql_query($query);


header("Location:../index.php?module=pengembalian&message=success");