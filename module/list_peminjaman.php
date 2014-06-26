<?php 
include('../config/koneksi.php');
?>	
<title>Peminjaman</title>
<fieldset>
    <form role="form" method="POST" action="peminjaman/create.php" enctype="multipart/form-data">
    	<div class="form-group">
            <label>User Code</label>
            <?php
                $query = mysql_query("SELECT code FROM user WHERE akses='user'");
                echo '<select class="form-control" name="user_code">';
                while ($user = mysql_fetch_array($query)) {
                    echo '<option value="'.$user['code'].'">'.$user['code'].'</option>';
                }
                echo '</select>';
            ?>
        </div>
        <div class="form-group">
            <label>Nama Buku</label>
            <?php
                $query = mysql_query("SELECT id,name FROM book order by name");
                echo '<select class="form-control" name="book_id">';
                while ($book = mysql_fetch_array($query)) {
                    echo '<option value="'.$book['id'].'">'.$book['name'].'</option>';
                }
                echo '</select>';
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="index.php?module=buku" class="btn btn-danger">Cancel</a>
    </form>
</fieldset>