<h1 style="color:red; text-align:center"><u>FORM</u></h1>
<?php 
require_once __DIR__."/models/Pelanggan.php";
$obj_pelanggan=new Pelanggan();
$data_pelanggan=$obj_pelanggan->datapelanggan();
$idedit = isset($_REQUEST['idedit']) ? $_REQUEST['idedit'] : null;

$plgn=!empty($idedit)? $obj_pelanggan->getpelanggan($idedit) : array();

?>
<form action="pelanggan_controller.php" method="POST">
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control"
                value="<?php if(isset($plgn['kode'])) echo $plgn['kode']; ?>">
        </div>

    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control"
                value="<?php if(isset($plgn['kode'])) echo $plgn['nama']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <input id="jk" name="jk" type="text" class="form-control"
                value="<?php if(isset($plgn['kode'])) echo $plgn['jk']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control"
                value="<?php if(isset($plgn['kode'])) echo $plgn['tmp_lahir']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <!-- <label for="text3" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
        </div> -->
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir:</label>
        <div class="col-8">
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                value="<?php if(isset($plgn['kode'])) echo $plgn['tgl_lahir']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <input id="email" name="email" type="text" class="form-control"
                value="<?php if(isset($plgn['kode'])) echo $plgn['email']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Kartu ID</label>
        <div class="col-8">
            <input id="kartu_id" name="kartu_id" type="text" class="form-control"
                value="<?php if(isset($plgn['kode'])) echo $plgn['kartu_id']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php if (empty ($idedit))  {?>
            <button name="proces" type="submit" value="save" class=" btn btn-primary">Submit</button>
            <?php }
                else{
                 ?>
            <button name="proces" type="submit" value="ubah" class="btn btn-primary">Update</button>
            <input type="hidden" name="idx" value="<?=$idedit?>">
            <?php
                }?>
            <button name="proses" type="submit" value="batal" class="btn btn-primary">cancel</button>
        </div>
    </div>
</form>