<?php 
class Pesanan{
private $koneksi;
public function __construct(){
    global $dbh; // instance object koneksi.php
    $this->koneksi=$dbh;
    
}

public function datapesanan(){
    $sql="SELECT pesanan.*,pelanggan.nama as Kategori FROM pesanan
    INNER JOIN
        pelanggan ON pelanggan.id=pesanan.pelanggan_id";
        $ps=$this->koneksi->prepare($sql);
        $ps->execute();
        $rs=$ps->fetchAll();
        return $rs;
}
public function getPesanan($id){
    $sql="SELECT pesanan.*,pelanggan.nama as Kategori FROM pesanan
    INNER JOIN
        pelanggan ON pelanggan.id=pesanan.pelanggan_id WHERE pesanan.id=?";
        $ps=$this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs=$ps->fetch();
        return $rs;
} 

public function simpan($data){
    $sql="INSERT INTO pesanan(tanggal,total,pelanggan_id)
    VALUES (?,?,?)";
    $ps=$this->koneksi->prepare($sql);
    $ps->execute($data);
    }
    }
    ?>