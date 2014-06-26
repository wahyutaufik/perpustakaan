<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/2/14
 * Time: 2:59 PM
 */
include ("../config/koneksi.php");
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM user WHERE id='$id'");
$data = mysql_fetch_array($query);
$password = base64_decode($data['password']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1 style="font-weight: bold">Update User</h1>
        </legend>
        <div class="row">
            <div class="col-md-3">
                <img src="../templates/library/img/<?php echo $data['photo']?>" class="img-responsive img-thumbnail" alt="Responsive image" width="180">
            </div>
            <div class="col-md-9">
                <form role="form" method="POST" action="user/update.php?id=<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" type="text" name="username" value="<?php echo $data['username']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Kode</label>
                        <input class="form-control" type="text" disabled value="<?php echo $data['code']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input class="form-control" type="password" name="password" value="<?php echo $password; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="full_name" value="<?php echo $data['full_name']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" id="" class="form-control" rows="5"><?php echo $data['address'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input class="form-control" type="text" name="phone" value="<?php echo $data['phone']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Akses Level</label>
                        <?php  
                            if ($data['akses']=='admin') {
                                echo 
                                '<select class="form-control" name="akses">
                                    <option value="admin" selected>admin</option>
                                    <option value="user">user</option>
                                </select>';
                            } else{
                                echo 
                                '<select class="form-control" name="akses">
                                    <option value="admin">admin</option>
                                    <option value="user" selected>user</option>
                                </select>';
                            }
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="index.php?module=user" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </fieldset>
</body>
</html>