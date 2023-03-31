<?php 
require_once'abstrak1.php';
class Lingkaran extends Bentuk2D{
    public $jari2;
    
    public function __construct($jari2){
        $this->jari2=$jari2;
    }
    public function Namabidang(){
        echo "lingkaran";
    }
    public function Luasbidang(){
        $Luas=3.14 *$this ->jari2 * $this->jari2;
        return $Luas;
    }
    public function Kelilingbidang(){
        $Keliling=2*3.14*$this ->jari2;
        return $Keliling;
    }
  
}
?>
