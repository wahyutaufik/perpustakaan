<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 5/26/14
 * Time: 1:01 PM
 */

include ('../../config/koneksi.php');

$name           = $_POST['name'];
$category       = $_POST['category'];
$publisher      = $_POST['publisher'];
$description    = $_POST['description'];
$page           = $_POST['page'];
$publish_year   = $_POST['publish_year'];
$author         = $_POST['author'];

$error		    = false;
$folder		    = '../../templates/library/img/';
$file_type	    = array('jpg','jpeg','png','gif','bmp');
$max_size	    = 5000000;
$file_name	    = $_FILES['cover']['name'];
$file_size	    = $_FILES['cover']['size'];
$explode	    = explode('.',$file_name);
$extensi	    = $explode[count($explode)-1];
$stock 			= 1;


if(move_uploaded_file($_FILES['cover']['tmp_name'], $folder.$file_name)) {
    $query = "INSERT INTO book(id, name, category, publisher, description, page, publish_year, author, cover, stock)
              VALUES ('','$name','$category','$publisher','$description','$page','$publish_year','$author','$file_name','$stock')";
    $save = mysql_query($query);
    header("Location:../index.php?module=buku&message=success");
} else{
    header("Location:../index.php?module=tambah_buku&message=failed");
}


