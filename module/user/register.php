<?php
include("../../config/koneksi.php"); 

mysql_select_db("user");
$error		= false;
$folder		= '../../templates/library/img/';
$file_type	= array('jpg','jpeg','png','gif','bmp');
$max_size	= 5000000; // 1MB
$file_name	= $_FILES['photo']['name'];
$file_size	= $_FILES['photo']['size'];
$explode	= explode('.',$file_name);
$extensi	= $explode[count($explode)-1];
$password   = $_POST['password'];
$pass       = base64_encode($password);
function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) ;
    return $guidText;
}

$Guid = NewGuid();

if(move_uploaded_file($_FILES['photo']['tmp_name'], $folder.$file_name)){
    $sql        ="INSERT INTO user(id, username, password, email, full_name, address, phone, akses, photo, code)
                  VALUES ('','$_POST[username]','$pass','$_POST[email]','$_POST[full_name]','$_POST[address]','$_POST[phone]','$_POST[akses]','$file_name','$Guid')";
} else{
    echo "Proses upload error";
}

if (!mysql_query($sql)) {
    die('Error ' .mysql_error());
}
mysql_close();
header("Location: ../../index.php?message=success");
?>