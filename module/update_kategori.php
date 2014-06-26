<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/3/14
 * Time: 1:06 PM
 */
include ("../config/koneksi.php");
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM category WHERE id='$id'");
$data = mysql_fetch_array($query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Kategori</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Update Kategori</h1>
        </legend>
        <form role="form" method="POST" action="category/update.php?id=<?php echo $id; ?>">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="name" placeholder="Nama Kategori" value="<?php echo $data['name']; ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php?module=kategori_buku" class="btn btn-danger">Cancel</a>
        </form>
    </fieldset>
</body>
</html>