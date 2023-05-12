<h1 style="color:red; text-align:center"><u>FORM</u></h1>
<?php
require_once __DIR__ .'/models/Pesanan.php';
$obj_pesanan = new Pesanan();
$data_pesanan = $obj_pesanan->datapesanan();

?>
<form action="pesanan_controller.php" method="POST">
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <input type="date" id="tanggal" name="tanggal" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Total</label>
        <div class="col-8">
            <input id="total" name="total" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Pelanggan ID</label>
        <div class="col-8">
            <input id="pelanggan_id" name="pelanggan_id" type="text" class="form-control">
        </div>
    </div>


    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="prosess" type="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>