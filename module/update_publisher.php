<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/3/14
 * Time: 1:06 PM
 */
include ("../config/koneksi.php");
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM publisher WHERE id='$id'");
$data = mysql_fetch_array($query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Penerbit</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Update Penerbit</h1>
        </legend>
        <form role="form" method="POST" action="publisher/update.php?id=<?php echo $id; ?>">
            <div class="form-group">
                <label>Nama Penerbit</label>
                <input type="text" class="form-control" name="publisher_name" placeholder="Nama Penerbit" value="<?php echo $data['publisher_name']; ?>" />
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="address" rows="5" placeholder="Alamat"><?php echo $data['address']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input class="form-control" type="text" name="phone" placeholder="Telepon" value="<?php echo $data['phone']; ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php?module=penerbit" class="btn btn-danger">Cancel</a>
        </form>
    </fieldset>
</body>
</html>