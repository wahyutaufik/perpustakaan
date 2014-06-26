<?php 
include '../config/koneksi.php';
$search 	= $_GET['search'];
$min_length = 3;
?>
<fieldset>
    <legend>
        <h1 style="font-weight: bold">Hasil Pencarian</h1>
    </legend>
    <form class="navbar-form navbar-right" role="search" method="GET" action="index.php">
        <div class="form-group">
            <input type="hidden" name="module" value="cari_penerbit">
            <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
	<table class="table table-striped table-responsive">
	    <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Akses</th>
            <th>Action</th>
        </tr>
	<?php
	if (strlen($search) >= $min_length) {
		$search = htmlspecialchars($search);
		$search = mysql_real_escape_string($search);
		$query 	= "SELECT * FROM user
	               WHERE (`username` LIKE '%".$search."%')";
		$raw_result = mysql_query($query) or die(mysql_error());

		if (mysql_num_rows($raw_result) > 0) {
			while ($data = mysql_fetch_array($raw_result)) {
				$id      = $data['id'];
               $limit   = 30;
               $address = $data['address'];
               $post    = substr($address, 0, $limit);
            ?>
            <tr>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['full_name']; ?></td>
                <td><?php echo $post; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['akses']; ?></td>
                <td><a href="index.php?module=ubah_user&id=<?php echo $id;?>">Update</a> | <a href="index.php?module=hapus_user&id=<?php echo $id;?>">Delete</a></td>
            </tr>
            <?php
			}
		} else{
			echo '<div class="alert alert-danger" style="text-align: center;">Data tidak ditemukan</div>';
		}
	}
	?>
	</table>
</fieldset>
<a href="index.php?module=user" class="btn btn-danger">Kembali</a>