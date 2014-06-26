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
            <input type="hidden" name="module" value="cari_buku">
            <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
	<table class="table table-striped table-responsive">
	    <tr>
	        <th>Peminjam</th>
            <th>Nama Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Batas Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Denda</th>
            <th>Status</th>
            <th>Action</th>
	    </tr>
	<?php
	if (strlen($search) >= $min_length) {
		$search = htmlspecialchars($search);
		$search = mysql_real_escape_string($search);
		$query 	= "SELECT * FROM borrow
	               WHERE (`user_code` LIKE '%".$search."%')";
		$raw_result = mysql_query($query) or die(mysql_error());

		if (mysql_num_rows($raw_result) > 0) {
			while ($data = mysql_fetch_array($raw_result)) {
				$id          = $data['id'];
	            $limit       = 30;
	            $limit2      = 10;
	            $description = $data['description'];
	            $author      = $data['author'];
	            $post        = substr($description, 0, $limit);
	            $auth        = substr($author, 0, $limit2);
	            ?>
	            <tr>
                <td><?php echo $data['user_code']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['borrow_date']; ?></td>
                <td><?php echo $data['batas_pengembalian']; ?></td>
                <td><?php echo $data['pengembalian_date']; ?></td>
                <td><?php echo $data['denda']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><a href="index.php?module=ubah_pengembalian&id=<?php echo $id; ?>">kembalikan Buku</a></td>
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
<a href="index.php?module=pengembalian" class="btn btn-danger">Kembali</a>