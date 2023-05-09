<?php 
class Kartu{
private $koneksi;
public function __construct(){
    global $dbh; // instance object koneksi.php
    $this->koneksi=$dbh;
}

public function datakartu(){
    $sql="SElECT *  from kartu";
    $ps=$this->koneksi->prepare($sql);
        $ps->execute();
        $rs=$ps->fetchAll();
        return $rs;
}
}
?>