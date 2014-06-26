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
    <title>Data User</title>
</head>

<body>
    <?php
    $alert= "<div class='alert alert-success' style='text-align: center;'>User Berhasil Ditambahkan</div>";
    $alert2= "<div class='alert alert-success' style='text-align: center;'>User Berhasil Dihapus</div>";
    $alert3= "<div class='alert alert-success' style='text-align: center;'>User Berhasil Diubah</div>";
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
        <legend><h1 style="font-weight: bold">List User</h1></legend>
        <form class="navbar-form navbar-right" role="search" method="GET" action="index.php">
            <div class="form-group">
                <input type="hidden" name="module" value="cari_user">
                <input type="text" class="form-control" placeholder="Search" name="search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>

        <table class="table table-striped table-responsive">
            <tr>
                <th>Username</th>
                <th>Kode</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Akses</th>
                <th>Action</th>
            </tr>
            <?php
            $query = mysql_query("SELECT * FROM user");
            $no = 1;

            while ($data = mysql_fetch_array($query)) {
                   $id      = $data['id'];
                   $limit   = 30;
                   $address = $data['address'];
                   $post    = substr($address, 0, $limit);
                ?>
                <tr>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['code']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['full_name']; ?></td>
                    <td><?php echo $post; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['akses']; ?></td>
                    <td><a href="index.php?module=ubah_user&id=<?php echo $id;?>">Update</a> | <a href="index.php?module=hapus_user&id=<?php echo $id;?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </fieldset>
</body>
</html>