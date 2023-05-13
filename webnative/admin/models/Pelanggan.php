<?php
class Pelanggan{
    private $koneksi;
    public function __construct()
    {
     global $dbh; // instance object koneksi.php
    $this->koneksi=$dbh;
    }
    public function datapelanggan(){
        $sql= "SELECT pelanggan.*,kartu.nama as Kategori FROM pelanggan 
        INNER JOIN
            kartu ON kartu.id=pelanggan.kartu_id";
            $ps=$this->koneksi->prepare($sql);
            $ps->execute();
            $rs=$ps->fetchAll();
            return $rs;
    }


    public function getpelanggan($id){
        $sql = "SELECT pelanggan.*, kartu.nama as Kategori FROM pelanggan INNER JOIN
        kartu ON kartu.id = pelanggan.kartu_id where pelanggan.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    
public function save($data){
$sql="INSERT INTO pelanggan(kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id)
VALUES (?,?,?,?,?,?,?)";
$ps=$this->koneksi->prepare($sql);
$ps->execute($data);
}
public function ubah($data){
    $sql = "UPDATE pelanggan SET
    kode=?,nama=?,jk=?,tmp_lahir=?,tgl_lahir=?,
    email=?,kartu_id=? WHERE id =?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
   }
   public function hapus($id){
    $sql="DELETE FROM pelanggan WHERE id=?";
    $ps=$this->koneksi->prepare($sql);
    $ps->execute([$id]);
}


}
?>