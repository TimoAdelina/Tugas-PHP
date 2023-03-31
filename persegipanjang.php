<?php 
require_once 'abstrak1.php';

class Persegipanjang extends Bentuk2D{
public  $panjang;
public $lebar;

public function __construct($panjang,$lebar){
$this->panjang=$panjang;
$this->lebar=$lebar;
}
public function Namabidang(){
    echo"Persegi Panjang";
}
public function  Luasbidang(){
$Luas=$this->panjang*$this->lebar;
return $Luas;
}
public function KelilingBidang(){
    $Keliling=2*($this->panjang+$this->lebar);
    return $Keliling;
}
}
    

    




?>