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
	        <th>Nama Buku</th>
	        <th>Kategori Buku</th>
	        <th>Penerbit</th>
	        <th>Pengarang</th>
	        <th>Sinopsis Buku</th>
	        <th>Jumlah Halaman</th>
	        <th>Tahun Terbit</th>
	        <th>Action</th>
	    </tr>
	<?php
	if (strlen($search) >= $min_length) {
		$search = htmlspecialchars($search);
		$search = mysql_real_escape_string($search);
		$query 	= "SELECT * FROM book
	               WHERE (`name` LIKE '%".$search."%')";
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
	                <td><?php echo $data['name']; ?></td>
	                <td><?php echo $data['category']; ?></td>
	                <td><?php echo $data['publisher']; ?></td>
	                <td><?php echo $auth; ?></td>
	                <td><?php echo $post; ?></td>
	                <td><?php echo $data['page']; ?></td>
	                <td><?php echo $data['publish_year']; ?></td>
	                <td><a href="index.php?module=update_buku&id=<?php echo $id;?>">Update</a> | <a href="index.php?module=hapus_buku&id=<?php echo $id;?>">Delete</a></td>
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
<a href="index.php?module=buku" class="btn btn-danger">Kembali</a>