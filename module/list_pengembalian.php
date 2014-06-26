<?php
include('../config/koneksi.php');
$alert  = "<div class='alert alert-success' style='text-align: center;'>Data Berhasil Ditambahkan</div>";
$alert2 = "<div class='alert alert-success' style='text-align: center;'>Data Berhasil Dihapus</div>";
$alert3 = "<div class='alert alert-success' style='text-align: center;'>Data Berhasil Diubah</div>";
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo $alert;
} elseif(!empty($_GET['message']) && $_GET['message'] == 'delete_success') {
    echo $alert2;
} elseif(!empty($_GET['message']) && $_GET['message'] == 'update_success') {
    echo $alert3;
} else{

}
?>
<title>Pengembalian</title>
<fieldset>
    <legend>
        <h1 style="font-weight: bold">List Pengembalian</h1>
    </legend>
    <!-- <a href="index.php?module=tambah_penerbit" class="btn btn-success">+ Tambah Penerbit</a> -->
    <form class="navbar-form navbar-right" role="search" method="GET" action="index.php">
        <div class="form-group">
            <input type="hidden" name="module" value="cari_peminjam">
            <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    <br/><br/>
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
        $query = mysql_query("SELECT b.*, bo.name FROM borrow b 
        					  LEFT JOIN book bo ON b.book_id = bo.id");

        while ($data = mysql_fetch_array($query)) {
        	$id      = $data['id'];

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
        ?>
    </table>
</fieldset>
