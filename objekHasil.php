<body>
    <?php $judul=["NAMA BIDANG" ," KELILING BIDANG","LUAS BIDANG"] ?>
    <table border="1" cellpadding="10px" width="100%">
        <thead border="1" cellpadding="10px" width="100%">

            <tr bgcolor=" salmon">
                <?php  foreach($judul as $j) {?>

                <th><?= $j ?></th>
                <?php } ?>
            <tr>

        </thead>

        <tbody style="background-color:blanchedalmond">

            <?php
            require_once 'lingkaran.php';
            require_once 'persegipanjang.php';
            require_once 'segitiga.php';

            $lingkaran = new Lingkaran(6);
            $Ppanjang = new Persegipanjang(5, 2);
            $segitiga = new Segitiga(1, 2, 3);

                $arr_2D=[$lingkaran, $Ppanjang, $segitiga];?>
            <?php foreach ($arr_2D as $arr) {?>
            <tr style="text-align:center">
                <td><?=$arr->Namabidang();?> </td>
                <td><?=$arr->KelilingBidang() . '&nbsp cm';?></td>

                <td> <?= $arr->Luasbidang() . '&nbsp cm2';?></td>


            </tr>
            <?php } ?>

        </tbody>
    </table>