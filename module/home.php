<style type="text/css">
    .content{ margin: 0; padding: 100px;}
    .images{
        text-align: center;
    }
    .image {
        top: 50%;
        left: 50%;
        -webkit-animation:spin 9s linear infinite;
        -moz-animation:spin 10s linear infinite;
        animation:spin 10s linear infinite;
    }
    @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
    @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
    @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
</style>

<title>PERPUSTAKAAN</title>

<?php
session_start();
$user = $_SESSION['username'];
$code = $_SESSION['code'];
// var_dump($code);exit;
$alert= "<div class='alert alert-success' style='text-align: center;'>Selamat Datang $user</div>";
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo $alert;
}
if ($_SESSION['username']=="admin") {
    echo '
        <div>
            <marquee><h1><b>SISTEM PERPUSTAKAAN ONLINE</b></h1></marquee></td>
        </div>
        <div class="images">
            <img class="image" src="../templates/library/img/apple-logo-png-transparent.png" width="300px">
        </div>
        <div>
            <marquee><h3><font color="blue" style="font-weight:bold;">Buku Adalah Jendela Dunia</font></h3></marquee></td>
        </div>
    ';
} else {
    echo "
        <div>
            <marquee><h1><b>SISTEM PERPUSTAKAAN ONLINE</b></h1></marquee></td>
        </div>
        <div class='images'>
            <img class='image' src='../templates/library/img/apple-logo-png-transparent.png' width='300px'>
        </div>
        <div>
            <marquee><h3><font color='red' style='font-weight:bold;'>Pin Anda adalah '$code'</font></h3></marquee></td>
        </div>
    ";
}
?>