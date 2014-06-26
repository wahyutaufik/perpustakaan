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
    <title>Input Buku</title>
</head>
<body>
    <?php
    $alert= "<div class='alert alert-danger' style='text-align: center;'>Data gagal disimpan</div>";
    if (!empty($_GET['message']) && $_GET['message'] == 'failed') {
        echo $alert;
    } else{

    }
    ?>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Input Buku</h1>
        </legend>
        <form role="form" method="POST" action="book/create.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" class="form-control" name="name" placeholder="Judul Buku" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <?php
                    $query = mysql_query("SELECT name FROM category");
                    echo '<select class="form-control" name="category">';
                    while ($data = mysql_fetch_array($query)) {
                        echo '<option value="'.$data['name'].'">'.$data['name'].'</option>';
                    }
                    echo '</select>';
                ?>
            </div>
            <div class="form-group">
                <label>Penerbit</label>
                <?php
                    $query = mysql_query("SELECT publisher_name FROM publisher");
                    echo '<select class="form-control" name="publisher">';
                    while ($data = mysql_fetch_array($query)) {
                        echo '<option value="'.$data['publisher_name'].'">'.$data['publisher_name'].'</option>';
                    }
                    echo '</select>';
                ?>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="description" rows="5" placeholder="Deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label>Pengarang</label>
                <input class="form-control" type="text" name="author" placeholder="Pengarang" required/>
            </div>
            <div class="form-group">
                <label>Jumlah Halaman</label>
                <input class="form-control" type="number" name="page" placeholder="Jumlah Halaman" required/>
            </div>
            <div class="form-group">
                <label>Tahun Terbit</label>
                <input class="form-control" type="text" name="publish_year" placeholder="Tahun Terbit" required/>
            </div>
            <div class="form-group">
                <label>Cover</label>
                <input type="file" name="cover" required/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php?module=buku" class="btn btn-danger">Cancel</a>
        </form>
    </fieldset>
</body>
</html>