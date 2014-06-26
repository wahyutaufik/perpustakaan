<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/3/14
 * Time: 1:07 PM
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
            <h1 style="font-weight: bold">Menghapus Data</h1>
        </legend>
        <h3>Yakin ingin menghapus data penerbit ini?</h3>
        <a href="publisher/delete.php?id=<?php echo $id ?>" class="btn btn-primary">Hapus</a>
        <a href="index.php?module=penerbit" class="btn btn-danger">Batal</a>
    </fieldset>
</body>
</html>