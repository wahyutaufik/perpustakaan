<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 12:40 PM
 */

include('../../config/koneksi.php');
$id             = $_GET['id'];
$name           = $_POST['name'];
$category       = $_POST['category'];
$publisher      = $_POST['publisher'];
$description    = $_POST['description'];
$page           = $_POST['page'];
$publish_year   = $_POST['publish_year'];
$author         = $_POST['author'];
$query          = "UPDATE `book` SET `id`='$id',`name`='$name',`category`='$category',`publisher`='$publisher',`description`='$description',`page`='$page',`publish_year`='$publish_year',`author`='$author' WHERE id='$id'";
$save           = mysql_query($query);

if($save){
    header("Location:../index.php?module=buku&message=update_success");
}