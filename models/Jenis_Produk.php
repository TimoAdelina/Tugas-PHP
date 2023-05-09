<?php 
class JenisProduk{
    private $koneksi;
    public function __construct()
    {
      global $dbh;
      $this->koneksi=$dbh;  
    }
    public function Jenis_Produk(){
        $sql ="SELECT * from jenis_produk";
        $ps=$this->koneksi->prepare($sql);
        $ps->execute();
        $rs=$ps->fetchAll();
        return $rs;
    }
} ?>