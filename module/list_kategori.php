<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 5/26/14
 * Time: 1:03 PM
 */

include('../config/koneksi.php');
?>

<html>
<head>
    <title>List Kategori</title>
</head>

<body>
    <?php
        $alert= "<div class='alert alert-success' style='text-align: center;'>Data Berhasil Ditambahkan</div>";
        $alert2= "<div class='alert alert-success' style='text-align: center;'>Data Berhasil Dihapus</div>";
        $alert3= "<div class='alert alert-success' style='text-align: center;'>Data Berhasil Diubah</div>";
        if (!empty($_GET['message']) && $_GET['message'] == 'success') {
            echo $alert;
        } elseif(!empty($_GET['message']) && $_GET['message'] == 'delete_success') {
            echo $alert2;
        } elseif(!empty($_GET['message']) && $_GET['message'] == 'update_success') {
            echo $alert3;
        } else{

        }
    ?>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">List Kategori</h1>
        </legend>
    </fieldset>
    <a href="index.php?module=tambah_kategori" class="btn btn-success">+ Tambah Kategori</a>
    <form class="navbar-form navbar-right" role="search" method="GET" action="index.php">
        <div class="form-group">
            <input type="hidden" name="module" value="cari_kategori">
            <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    <br/><br/>
    <table class="table table-striped table-responsive">
        <tr>
            <th width="85%">Kategori</th>
            <th width="15%">Action</th>
        </tr>
        <?php
        $query = mysql_query("SELECT * FROM category");

        $no = 1;

        while ($data = mysql_fetch_array($query)) {
            $id      = $data['id'];
            $limit   = 30;
            $address = $data['address'];
            $post    = substr($address, 0, $limit);
            ?>
            <tr>
                <td><?php echo $data['name']; ?></td>
                <td><a href="index.php?module=ubah_kategori&id=<?php echo $id; ?>">Update</a> | <a href="index.php?module=hapus_kategori&id=<?php echo $id; ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>