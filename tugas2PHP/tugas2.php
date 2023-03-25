<form method="post" style="color:red ;font-size:20px;background-color:bisque">

    <fieldset>
        <legend>REGISTRASI</legend>
        <table style="font-size:20px">
            <tr>
                <td><label> nama:</label></td>
                <td><input type=" text" placeholder="masukkan nama anda" name="nama" required>
                </td>
            </tr>
            <tr>
                <td><label> jabatan:</label></td>
                <td><input type="text" placeholder="masukkan jabatan anda" name="jabatan" required></td>
            </tr>
            <tr>
                <td><label> jumlah anak:</label></td>
                <td> <input type="text" placeholder="masukkan jumlah anak anda" name="anak"></td>

            </tr>
            <tr>
                <td><label>Agama:</label></td>
                <td> <select name="agama" value="region" required>
                        <option value=" islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                    </select>
                </td>
            </tr>
            <th colspan="1">
            <td>
                <input type="submit" name="submit" value="submit" />
            </td>
            </th>
        </table>
    </fieldset>
</form>
<?php 
// prose form
error_reporting(0);
$nama=$_POST['nama'];
$jabatan=$_POST['jabatan'];
$jmlhAnak=$_POST['anak'];
$agama=$_POST['agama'];
$kirim=$_POST['submit'];
// HITUNG GAJI POKOK dengan SWITCH CASE
$gaji="" ; 
switch ($jabatan){ case "manager":$gaji=20000000;
break;
case "asisten":$gaji=12000000;
 break;
case "kabag" :$gaji=10000000;
break;
case "staff":$gaji=4000000; 
break;
default:"";
}
$tunjangan_Jabatan=0.2*$gaji;
// HITUNG TUNJANGAN dengan IF MULTIKONDISI

$tunjangan_Keluarga="";
if ($jmlhAnak="1" || "2"){
    $tunjangan_Keluarga=0.05*$gaji;}
    else if ($jmlhAnak="3"||"4"||"5"){
        $tunjangan_Keluarga=0.1*$gaji;}
        else{
            $tunjangan_Keluarga=0;}
            // // HITUNG GAJI KOTOR
$gajiKotor=$gaji + $tunjangan_Jabatan+$tunjangan_Keluarga;
// HITUNG ZAKAT PROFESI dengan TERNARY
$zakat="";
$agama=("muslim"&& $gajiKotor>=6000000)?$zakat=0.025*$gajiKotor:$zakat=0;
// // HITUNG TAKE HOME PAY(GAJI BERSIH)
$gajiBersih=$gajiKotor-$zakat;
if(isset($kirim)){
    echo"gaji:$gaji<br>";
    echo"tunjangan Jabatan:$tunjangan_Jabatan<br>";
    echo"tunjangan_Keluarga:$tunjangan_Keluarga<br>";
    echo"gajiKotor:$gajiKotor<br>";
    echo"zakat:$zakat<br>";
    echo"gajiBersih:$gajiBersih<br>";
    
}


 ?>