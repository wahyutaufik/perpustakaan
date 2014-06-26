<?php
/**
 * Created by PhpStorm.
 * User: wahyu
 * Date: 6/8/14
 * Time: 11:16 AM
 */
error_reporting(0);
$modul = $_GET['module'];
if (!isset($modul))$modul = 'home';
switch($modul)
{
    case 'home'             : include 'home.php'; break;
    case 'peminjaman'       : include 'list_peminjaman.php'; break;
    case 'pengembalian'     : include 'list_pengembalian.php'; break;
    case 'buku'             : include 'list_buku.php'; break;
    case 'user'             : include 'list_user.php'; break;
    case 'ubah_user'        : include 'update_user.php'; break;
    case 'hapus_user'       : include 'delete_user.php'; break;
    case 'penerbit'         : include 'list_publisher.php'; break;
    case 'ubah_penerbit'    : include 'update_publisher.php'; break;
    case 'hapus_penerbit'   : include 'delete_publisher.php'; break;
    case 'tambah_penerbit'  : include 'create_publisher.php'; break;
    case 'tambah_buku'      : include 'create_buku.php'; break;
    case 'update_buku'      : include 'update_buku.php'; break;
    case 'hapus_buku'       : include 'delete_buku.php'; break;
    case 'kategori_buku'    : include 'list_kategori.php'; break;
    case 'tambah_kategori'  : include 'create_kategori.php'; break;
    case 'ubah_kategori'    : include 'update_kategori.php'; break;
    case 'ubah_pengembalian': include 'pengembalian.php'; break;
    case 'hapus_kategori'   : include 'delete_kategori.php'; break;
    case 'cari_buku'        : include 'book/search.php'; break;
    case 'cari_penerbit'    : include 'publisher/search.php'; break;
    case 'cari_user'        : include 'user/search.php'; break;
    case 'cari_kategori'    : include 'category/search.php'; break;
    case 'cari_peminjam'    : include 'peminjaman/search.php'; break;
}