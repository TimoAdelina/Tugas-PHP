<?php 
include_once 'koneksi.php';
include_once 'models/Pesanan.php';

// step pertama yaitu menangkap request from
$tanggal=$_POST['tanggal'];
$total=$_POST['total'];
$pelanggan_id=$_POST['pelanggan_id'];


$data=[
    $tanggal,$total,$pelanggan_id
];

$model=new Pesanan();
$tombol= $_REQUEST["prosess"];

switch ($tombol){
case 'submit': $model->simpan($data);break;

case 'ubah':
    $data[] = $_POST['idx'];
    $model->ubah($data);
    break;

default:
    header('Location:index.php?url=pesanan');
    break;
}
header('Location:index.php?url=pesanan');










?>