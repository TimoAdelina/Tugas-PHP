<?php 
$id= $_REQUEST['id'];
$model= new Product();
$produk= $model->getProduk($id);


 ?>

<!-- <div> -->

<!-- <h3> </h3 -->
<!-- </div> -->



<table class="table table-bordered border-primary ">
    <thead>
        <tr>
            <th>#</th>
            <th>
                Kode
            </th>
            <th>Nama</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Minimal Stok</th>
            <th>Jenis Produk ID</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <th>💡</th>
            <td><?=$produk['kode']?></td>
            <td><?=$produk['nama']?></td>
            <td><?=$produk['harga_beli']?></td>
            <td><?=$produk['harga_jual']?>
            </td>
            <td><?=$produk['stok']?></td>
            <td><?=$produk['min_stok']?></td>
            <td><?=$produk['jenis_produk_id']?></td>
        </tr>

    </tbody>
</table>