<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 5:15 PM
 */
$id = $_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Confirmation</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Menghapus User</h1>
        </legend>
        <h3>Yakin ingin menghapus User ini?</h3>
        <a href="user/delete.php?id=<?php echo $id ?>" class="btn btn-primary">Hapus</a>
        <a href="index.php?module=user" class="btn btn-danger">Batal</a>
    </fieldset>
</body>