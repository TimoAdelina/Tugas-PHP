<?php 
$id= $_REQUEST['id'];
$model=new Pelanggan;
$pelanggan=$model->getPelanggan($id);

?>

<table class="table table-bordered border-primary " style=" text-align:center;">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Kartu ID</th>

        </tr>
    </thead>
    <tbody>
        <tr style="text-align:center">
            <td><?=$pelanggan['kode']?></td>
            <td><?=$pelanggan['nama']?></td>
            <td><?=$pelanggan['jk']?></td>
            <td><?=$pelanggan['tmp_lahir']?></td>
            <td><?=$pelanggan['tgl_lahir']?></td>
            <td><?=$pelanggan['email']?></td>
            <td><?=$pelanggan['kartu_id']?></td>
        </tr>
    </tbody>
</table>