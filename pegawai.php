<?php 
class Pegawai{
protected $nip;
public $nama;
private $jabatan;
private $agama;
private $status;
static $jml=0;
const PT ='PT.HTP Indonesia';


public function __construct($nip,$nama,$jabatan,$agama,$status){
   $this->nip=$nip;
    $this->nama=$nama;
   $this->jabatan=$jabatan;
   $this->agama=$agama;
   $this->status=$status;
   self::$jml++; 
} 
public function Setgajipokok($jabatan){
    $this->jabatan=$jabatan;
    switch($jabatan){
        case "Manager": $gapok=12000000; break;
        case "Asisten Manager": $gapok=8000000; break;
        case "Kepala Bagian": $gapok=5000000; break;
        case "Staff":$gapok=3000000;break;
        default: $gapok='';
    }
    return $gapok;
}

public function Settunjab($gapok){
$gapok=$this->Setgajipokok($this->jabatan);
$Tunjab=$gapok *0.2;
return $Tunjab;

}
public function Settunkel($status,$gapok){
$this->status=$status;
$gapok=$this->Setgajipokok($this->jabatan);
$Settunkel=($status=="Menikah" ? 0.1*$gapok : 0);
return $Settunkel;
}
public function Gajikotor(){
$gakot=$this->setGajiPokok($this->jabatan) + $this->setTunJab($this->Setgajipokok($this->jabatan)) + $this->Settunkel($this->status,$this->Setgajipokok($this->jabatan));
return $gakot;
}
public function Setzakat($agama,$gakot){
    $this->agama=$agama;
    $gakot=$this->setGajiPokok($this->jabatan) + $this->setTunJab($this->Setgajipokok($this->jabatan)) + $this->Settunkel($this->status,$this->Setgajipokok($this->jabatan));
    if($agama=="Islam" && $gakot>6000000){
        $Zakat=0.025*$this->Setgajipokok($this->jabatan);
    }else {$Zakat= 0 ;
    }
     return $Zakat; 
        
}
public function Gajibersih(){
$gakot=$gakot=$this->setGajiPokok($this->jabatan) + $this->setTunJab($this->Setgajipokok($this->jabatan)) + $this->Settunkel($this->status,$this->Setgajipokok($this->jabatan));
$Zakat=$this->Setzakat($this->agama,$this->setGajiPokok($this->jabatan) + $this->setTunJab($this->Setgajipokok($this->jabatan)) + $this->Settunkel($this->status,$this->Setgajipokok($this->jabatan)));
    
 $Gajibersihh=$gakot-$Zakat;
 return $Gajibersihh;
    
}

public function cetak(){
echo "Nip Pegawai :".$this->nip;
echo "<br>Nama Pegawai :".$this->nama;
echo "<br>Jabatan :".$this->jabatan;    
echo "<br>Agama :".$this->agama;
echo "<br>Status :".$this->status;
echo "<br>gaji Pokok :Rp.".number_format($this->Setgajipokok($this->jabatan),0,',','.');
echo "<br>TUNJAB :Rp.".number_format($this->Settunjab($this->Setgajipokok($this->jabatan)),0,',','.');
echo "<br>TUNKEL:Rp.".number_format($this->Settunkel($this->status,$this->Setgajipokok($this->jabatan)),0,',','.');
echo"<br>gakot :Rp.".number_format($this->Gajikotor(),0,',','.');
echo "<br>Zakat :Rp.".number_format($this->Setzakat($this->agama,$this->setGajiPokok($this->jabatan) + $this->setTunJab($this->Setgajipokok($this->jabatan)) + $this->Settunkel($this->status,$this->Setgajipokok($this->jabatan))),0,',','.');
echo "<br>gaji bersih : Rp.".number_format($this->Gajibersih(),0,',','.');
echo "<hr>";
}

    





    
}



?>
