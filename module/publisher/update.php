<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 2:56 PM
 */
include('../../config/koneksi.php');
$id            = $_GET['id'];
$publisher_name= $_POST['publisher_name'];
$address       = $_POST['address'];
$phone         = $_POST['phone'];
$query         = "UPDATE `publisher` 
				  SET `id`            ='$id',
				  	  `publisher_name`='$publisher_name',
				  	  `address`       ='$address',
				  	  `phone`         ='$phone' 
			  	  WHERE id            ='$id'";
$save          = mysql_query($query);

if($save){
    header("Location:../index.php?module=penerbit&message=update_success");
}