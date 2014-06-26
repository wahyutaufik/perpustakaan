<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 12:19 PM
 */
include ("../config/koneksi.php");
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM book WHERE id='$id'");
$data = mysql_fetch_array($query);
//var_dump($data);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Buku</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Update Buku</h1>
        </legend>
        <div class="col-md-3">
            <img src="../templates/library/img/<?php echo $data['cover']?>" class="img-responsive img-thumbnail" alt="Responsive image" width="180">
        </div>
        <div class="col-md-9">
            <form role="form" method="POST" action="book/update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="description" rows="5"><?php echo $data['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Jumlah Halaman</label>
                    <input type="text" class="form-control" name="page" value="<?php echo $data['page']; ?>">
                </div>
                <div class="form-group">
                    <label>Tahun Terbit</label>
                    <input type="text" class="form-control" name="publish_year" value="<?php echo $data['publish_year']; ?>">
                </div>
                <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" class="form-control" name="author" value="<?php echo $data['author']; ?>">
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
<!--                <div class="form-group">-->
<!--                    <label>Cover</label>-->
<!--                    <input type="file" name="cover" >-->
<!--                </div>-->
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?module=buku" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </fieldset>
</body>
</html>