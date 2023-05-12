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

public function getProduk($id){
        $sql="SELECT product.*,jenis_produk.nama as Kategori FROM product 
        INNER JOIN
            jenis_produk ON jenis_produk.id=product.jenis_produk_id where product.id=?";
            $ps=$this->koneksi->prepare($sql);
            $ps->execute([$id]);
            $rs=$ps->fetch();
            return $rs;
    } 


    public function simpan($data){
        $sql="INSERT INTO product(kode,nama,harga_jual,harga_beli,stok,min_stok,jenis_produk_id)
        VALUES (?,?,?,?,?,?,?)";
        $ps=$this->koneksi->prepare($sql);
        $ps->execute($data);
        }
}
?>