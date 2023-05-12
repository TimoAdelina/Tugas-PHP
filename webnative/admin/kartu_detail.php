<?php 
$id= $_REQUEST['id'];
$model=new Kartu;
$kartu=$model->getkartu($id);

 ?>

<!-- <div> -->

<!-- <h3> </h3 -->
<!-- </div> -->



<table class="table table-bordered border-primary ">
    <thead>
        <tr>
            <th>kode</th>
            <th>Nama</th>
            <th>Diskon</th>
            <th>Iuran</th>


        </tr>
    </thead>
    <tbody>
        <tr>

            <td><?=$kartu['kode']?></td>
            <td><?=$kartu['nama']?></td>
            <td><?=$kartu['diskon']?></td>
            <td><?=$kartu['iuran']?>
            </td>


        </tr>

    </tbody>
</table>