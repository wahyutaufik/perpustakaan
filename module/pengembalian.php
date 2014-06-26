<?php 
include ("../config/koneksi.php");
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM borrow WHERE id='$id'");
$data = mysql_fetch_array($query);
?>
<title>Kembalikan Buku</title>
<fieldset>
	<legend>Mengembalikan Buku</legend>
	<form action="peminjaman/update.php?id=<?php echo $id; ?>" method="POST">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<input type="hidden" name="book_id" value="<?php echo $data['book_id'] ?>">
		<input type="hidden" name="user_code" value="<?php echo $data['user_code'] ?>">
		<input type="hidden" name="borrow_date" value="<?php echo $data['borrow_date'] ?>">
		<input type="hidden" name="batas" value="<?php echo $data['batas_pengembalian'] ?>">
		<input type="hidden" name="status" value="Returned">
		<input type="submit" class="btn btn-primary" value="Kembalikan Buku">
	</form>
</fieldset>