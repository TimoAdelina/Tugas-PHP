<?php
class Product{
    private $koneksi;
    public function __construct()
    {
        global $dbh; // instance object koneksi.php
    $this->koneksi=$dbh;
    }

    
    public function dataproduk(){
        $sql="SELECT product.*,jenis_produk.nama as Kategori FROM product 
        INNER JOIN
            jenis_produk ON jenis_produk.id=product.jenis_produk_id";
            $ps=$this->koneksi->prepare($sql);
            $ps->execute();
            $rs=$ps->fetchAll();
            return $rs;
    }
}
?>