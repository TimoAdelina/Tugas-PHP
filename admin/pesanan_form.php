<h1 style="color:red; text-align:center"><u>FORM</u></h1>
<?php
require_once __DIR__ .'/models/Pesanan.php';
$obj_pesanan = new Pesanan();
$data_pesanan = $obj_pesanan->datapesanan();
$idedit = isset($_REQUEST['idedit']) ? $_REQUEST['idedit'] : null;

$psn=!empty($idedit)? $obj_pesanan->getPesanan($idedit) : array();
?>
<form action="pesanan_controller.php" method="POST">
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <input type="date" id="tanggal" name="tanggal" class="form-control"
                value="<?php if(isset($psn['kode'])) echo $psn['kode']; ?>">
        </div>
    </div>
    <div class=" form-group row">
        <label for="text" class="col-4 col-form-label">Total</label>
        <div class="col-8">
            <input id="total" name="total" type="text" class="form-control"
                value="<?php if(isset($psn['kode'])) echo $psn['total']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Pelanggan ID</label>
        <div class="col-8">
            <input id="pelanggan_id" name="pelanggan_id" type="text" class="form-control"
                value="<?php if(isset($psn['kode'])) echo $psn['pelanggan_id']; ?>">
        </div>
    </div>


    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php if (empty ($idedit)) { ?>
            <button name="prosess" type="submit" value="submit" class="btn btn-primary">Submit</button>
            <?php }
            else { ?>
            <button name="prosess" type="submit" value="ubah" class="btn btn-primary">Update</button>
            <input type="hidden" name="idx" value="<?=$idedit?>">
            <?php
                }?>
            <button name="prosess" type="submit" value="batal" class="btn btn-primary">cancel</button>


        </div>
    </div>
</form>