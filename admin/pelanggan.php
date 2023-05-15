<?php
// include_once 'top.php';
// include_once 'models/produk.php'; 
// include_once 'menu.php';
$model = new Pelanggan();
$data_pelanggan = $model->datapelanggan();
// foreach ($data_produk as $row) {
//     print $row['kode'];
?>
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <!-- <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about
        DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a> -->

</div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <!-- DataTable Example -->
        <!-- membuat tombol yang mengarahkan ke file produk_form.php -->
        <a href="index.php?url=pelanggan_form" class="btn btn-info">Tambah</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>kode</th>
                    <th>nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu ID</th>
                    <th>action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>NO</th>
                    <th>kode</th>
                    <th>nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu ID</th>
                    <th>action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $no=1;
                foreach ($data_pelanggan as $row){
                ?>
                <tr>
                    <td><?= $no?></td>
                    <td><?= $row['kode']?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['jk']?></td>
                    <td><?= $row['tmp_lahir']?></td>
                    <td><?= $row['tgl_lahir']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['kartu_id']?></td>
                    <td>
                        <form action="pelanggan_controller.php" method="POST">
                            <a class="btn btn-info btn-sm"
                                href="index.php?url=pelanggan_detail&id=<?= $row['id']?>">Detail</a>
                            <a class="btn btn-warning btn-sm"
                                href="index.php?url=pelanggan_form&idedit=<?=$row['id']?>">
                                Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm" name="proces" value="hapus"
                                onclick="return confirm('anda yakin akan dihapus?')">Hapus</button>
                            <input type="hidden" name="idx" value="<?= $row['id']?>">
                        </form>
                    </td>
                </tr>
                <?php $no++;}
                 ?>
            </tbody>
        </table>
    </div>
</div>


<?php
// include_once 'bottom.php';
?>