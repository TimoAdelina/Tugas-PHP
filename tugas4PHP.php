<style>
button {
    background-color: bisque;
}

button:hover {
    background-color: red;
    border-radius: 30%;
}
</style><?php
$ar_prodi = ["SI" => "sistem informasi", "TI" => "teknik informatika", "ilkom" => "ilmu komputer", "TE" => "teknik elektro"];
$ar_skill = ["HTML" => 10, "CSS" => 20, "JAVASCRIPT" => 20, "RWD_BOOOSTRAP" => 40, "PHP" => 30, "MYSQL" => 20, "LARAVEL" => 10];
$domisili = ["medan", "bali", "depok", "banten"];
?>

<fieldset>
    <legend>FORM PEMBAGIAN KELOMPOK BELAJAR</legend>
    <table style="background-color:lightgrey ;width:100%">
        <thead>
            <tr style="font-size:24px">
                <th colspan=" 2"><u>Form Registrasi</u></th>
            </tr>
        </thead>
        <tbody>
            <form method="post">
                <tr>
                    <td>nim :</td>
                    <td>
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td>nama:</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td name="jk">jenis kelamin :</td>
                    <td>
                        <input type="radio" name="jk" value="laki-laki">laki-laki &nbsp;
                        <input type="radio" name="jk" value="perempuan">perempuan
                    </td>
                </tr>
                <td>program studi</td>
                <td>
                    <select name="prodi">
                        <?php foreach ($ar_prodi as $prodi => $v) { ?>
                        <option name="<?= $prodi; ?> " value="<?= $prodi; ?>">
                            <?= $v ?>
                        </option>

                        <?php } ?>
                    </select>
                </td>
                <tr>
                    <td>skill programming:</td>
                    <td>
                        <?php foreach ($ar_skill as $skill => $skl) { ?>
                        <input type="checkbox" name="skill[]" value="<?= $skill ?>">
                        <?= $skill ?>
                        <?php  } ?>
                    </td>
                </tr>
                <td>domisili</td>
                <td>
                    <select name="domisili">
                        <?php foreach ($domisili as $dom) { ?>
                        <option name="<?= $dom ?>">
                            <?= $dom ?>
                        </option>
                        <?php } ?>
                    </select>
                </td>
                <tr>
                    <td>email: </td>
                    <td><input type="email" name="email"> </td>
                </tr>
        </tbody>

        <tfoot>
            <tr>
                <th colspan="2"> <button name="proses">submit</button> </th>
            </tr>
        </tfoot>
        </form>
    </table>
</fieldset>
<?php
error_reporting(0);

if (isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $skor = 0;
    foreach ($skill as $skl) {
        if (isset($ar_skill[$skl])) {
            $skor = $skor + $ar_skill[$skl];
        }
    }
    // FUNCTION
    function kategori($skor)
    {
        if ($skor >= 100 && $skor <= 150) $kategori = 'sangat baik';
        else if ($skor >= 60 && $skor < 100) $kategori = 'baik';
        else if ($skor >= 40 && $skor < 60) $kategori = 'cukup';
        else if ($skor >= 1 && $skor < 40) $kategori = 'kurang';
        else if ($skor == 0) $kategori = 'tidak memadai';
        else $kategori = '';
        return $kategori;
    }
    $kategori_skill = kategori($skor);
}
?>
<div style=" background-color:salmon;width:50%;margin:auto">
    <b>nim:<?= $nim ?><br>
        nama :<?= $nama ?><br>
        jenis kelamin:<?= $jk ?><br>
        program studi:<?= $prodi ?><br>
        domisili :<?=$domisili ?><br>
        skill:<?php
            foreach ($skill as $skl) { ?>
        <?= $skl ?>,
        <?php } ?><br>
        skor skill :
        <?= $skor ?><br>
        kategori skill:
        <?= $kategori_skill ?><br>
        email :<?= $email ?>
</div>
