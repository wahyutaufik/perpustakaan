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
    <title>Input Penerbit</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Input Penerbit</h1>
        </legend>
        <form role="form" method="POST" action="publisher/create.php">
            <div class="form-group">
                <label>Nama Penerbit</label>
                <input type="text" class="form-control" name="publisher_name" placeholder="Nama Penerbit" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="address" rows="5" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input class="form-control" type="text" name="phone" placeholder="Telepon" required/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php?module=penerbit" class="btn btn-danger">Cancel</a>
        </form>
    </fieldset>
</body>
</html>