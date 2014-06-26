<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 5/26/14
 * Time: 7:22 PM
 */

include ("../config/koneksi.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Kategori</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Input Kategori</h1>
        </legend>
        <form role="form" method="POST" action="category/create.php">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="name" placeholder="Nama Kategori" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php?module=kategori_buku" class="btn btn-danger">Cancel</a>
        </form>
    </fieldset>
</body>
</html>