<?php 
$m1 = ['NIM'=>'01111021', 'nama'=>'Andi', 'nilai'=>80];
$m2 = ['NIM'=>'01111022', 'nama'=>'Arli', 'nilai'=>70];
$m3 = ['NIM'=>'01111023', 'nama'=>'Ari', 'nilai'=>50];
$m4 = ['NIM'=>'01111024', 'nama'=>'Angel', 'nilai'=>40];
$m5 = ['NIM'=>'01111025', 'nama'=>'Ali', 'nilai'=>90];
$m6 = ['NIM'=>'01111026', 'nama'=>'Ai', 'nilai'=>75];
$m7 = ['NIM'=>'01111027', 'nama'=>'Budi', 'nilai'=>30];
$m8 = ['NIM'=>'01111028', 'nama'=>'Bani', 'nilai'=>85];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$judul=['no','nim','nama','nilai','keterangan','grade','predikat'];
$jml_mhs = count($mahasiswa);
    $total_nilai = array_sum(array_column($mahasiswa, 'nilai'));
    $max_nilai = max(array_column($mahasiswa, 'nilai'));
    $min_nilai = min(array_column($mahasiswa, 'nilai'));
    $avg_nilai = $total_nilai/$jml_mhs;
    $keterangan = [
        'Jumlah Mahasiswa' => $jml_mhs, 
        'Nilai Tertinggi' => $max_nilai, 
        'Nilai Terendah' => $min_nilai, 
        'Nilai Rata-rata' => $avg_nilai
    ];
?>
<table bgcolor="salmon" border="1" cellpadding="7" cellspacing="0" width="100%">
    <thead>

        <tr>
            <?php foreach($judul as $jdl) {
                
                ?>
            <th><?=$jdl;?></th>
            <?php }  ?>
        </tr>
    </thead>


    <tbody>

        <?php $no=1;
    foreach($mahasiswa as $mhs){
        $ket=($mhs['nilai']>=60 ) ? "lulus" :"tidak lulus";
    //grade
    if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade='A' ; 
    else if ($mhs['nilai']>= 75 && $mhs['nilai'] <= 80)
            $grade='B' ;
             else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 74) $grade='C' ; 
             else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 59) $grade='D' ; 
                else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 29) $grade='E' ;
                 else $grade='' ;
                        
     // predikat
     switch($grade){
        case"A":$predikat="Memuaskan";break;
    case"B":$predikat="Baik";break;
        case"C":$predikat="Cukup";break;
        case"D":$predikat="Kurang";break;
        case"E":$predikat="Buruk";break;
    default:$predikat="";break;
     }
     
                        
                        ?>
        <tr style="text-align:center">
            <td><?=$no ?></td>
            <td><?=$mhs["NIM"]?></td>
            <td><?=$mhs["nama"] ?></td>
            <td><?=$mhs["nilai"] ?></td>
            <td><?=$ket; ?></td>
            <td><?=$grade; ?></td>
            <td><?=$predikat ?></td>
        </tr>
        <?php $no++; ?>
        <?php } ?>
    </tbody>
    <tfoot>
        <?php
            foreach ($keterangan as $ket => $val) { ?>
        <tr>
            <th bgcolor="blue" colspan="4" style="text-align:center"><?= $ket ?></th>
            <td bgcolor=" blue" colspan="3" style="text-align:center"><?= $val ?></td>
        </tr>
        <?php } ?>
    </tfoot>
</table>