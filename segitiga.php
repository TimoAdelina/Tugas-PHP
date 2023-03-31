<?php 
require_once 'abstrak1.php';
class Segitiga extends Bentuk2D{
public $alas;
public $tinggi;
public $sisimiring;

public function __construct($alas,$tinggi,$sisimiring){
   $this->alas=$alas;
   $this->tinggi=$tinggi;
   $this->sisimiring=$sisimiring;
}
public function Namabidang(){
    echo"segitiga";
}
public function Luasbidang(){
    $Luas= 0.5*$this->alas*$this->tinggi;
    return $Luas;
}
 public function Kelilingbidang(){
    $Keliling= $this->alas+$this->tinggi+$this->sisimiring;
    return $Keliling;
 }   
}

?>