<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 5/26/14
 * Time: 1:03 PM
 */

include('../config/koneksi.php');
$sqlCount   = "SELECT count(id) FROM book";
$rsCount    = mysql_fetch_array(mysql_query($sqlCount));
$banyakData = $rsCount[0];
$page       = isset($_GET['page']) ? $_GET['page'] : 1;
$limit3     = 8;  
$start_from = $limit*($page - 1);
?>

<html>
<head>
    <title>Book Lists</title>
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
            <h1 style="font-weight: bold">List Buku</h1>
        </legend>
        <a href="index.php?module=tambah_buku" class="btn btn-success">+ Tambah Buku</a>
        <form class="navbar-form navbar-right" role="search" method="GET" action="index.php">
            <div class="form-group">
                <input type="hidden" name="module" value="cari_buku">
                <input type="text" class="form-control" placeholder="Search" name="search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        <br/><br/>
        <table class="table table-striped table-responsive">
            <tr>
                <th>Nama Buku</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Sinopsis</th>
                <th>Halaman</th>
                <th>Tahun Terbit</th>
                <!-- <th>Stock</th> -->
                <th>Action</th>
            </tr>
            <?php
            $query      = mysql_query("SELECT * FROM book");

            $no = 1;

            while ($data = mysql_fetch_array($query)) {
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
                    <!-- <td><?php echo $data['stock']; ?></td> -->
                    <td><a href="index.php?module=update_buku&id=<?php echo $id;?>">Update</a> | <a href="index.php?module=hapus_buku&id=<?php echo $id;?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
            // $numberofPages = ceil($banyakData/$limit3);
            // echo '<ul class="pagination">';  
            // for($i = 1; $i <= $numberofPages; $i++){  
            //     if($page != $i){  
            //         echo '<li><a href="index.php?module=buku&page='.$i.'">'.$i.'</a></li>';  
            //     } else{  
            //         echo '<li><a href="index.php?module=buku&page='.$i.'">'.$i.'</a></li>';  
            //     }  
            // }
            // echo '</ul>'; 
        ?> 
    </fieldset>
</body>
</html>