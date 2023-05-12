<?php
include_once 'koneksi.php';
include_once 'models/produk.php';

// step perrtama yaitu menangkap request from
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok = $_POST['stok'];
$min_stok = $_POST['min_stok'];
$jenis_produk_id = $_POST['jenis_produk_id'];

// menangkap form diatas dan dijadikan array

$data = [
    $kode,
    $nama,
    $harga_jual,
    $harga_beli,
    $stok,
    $min_stok,
    $jenis_produk_id
];

$model = new Product();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;

    default:
        header('Location:index.php?url=product');
        break;
}
header('Location:index.php?url=product');