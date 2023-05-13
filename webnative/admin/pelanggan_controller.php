<?php 
include_once 'koneksi.php';
include_once 'models/Pelanggan.php';

// step pertama yaitu menangkap request from
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$email=$_POST['email'];
$kartu_id=$_POST['kartu_id'];

// menangkap form diatas dan dijadikan array

$data=[
    $kode,
    $nama,
    $jk,
    $tmp_lahir,
    $tgl_lahir,
    $email,
    $kartu_id
];

$model= new Pelanggan();
$tombol= $_REQUEST["proces"];

switch($tombol){
    case 'save': $model->save($data);break;
    
        case 'ubah':
            $data[] = $_POST['idx'];
            $model->ubah($data);break;

            case 'hapus':
                unset ($data);$model->hapus($_POST['idx']);
                break;
                
    default:
    header('Location:index.php?url=pelanggan');
    break;
}
header('Location:index.php?url=pelanggan');