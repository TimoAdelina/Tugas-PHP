<?php
        $id = $_REQUEST['id'];
        $model = new Pesanan;
        $pesanan = $model->getpesanan($id);

        ?>

<table class="table table-bordered border-primary " style=" text-align:center;">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Pelanggan ID</th>



        </tr>
    </thead>
    <tbody>
        <tr style="text-align:center">
            <td><?= $pesanan['tanggal'] ?></td>
            <td><?= $pesanan['total'] ?></td>
            <td><?= $pesanan['pelanggan_id'] ?></td>

        </tr>
    </tbody>
</table>