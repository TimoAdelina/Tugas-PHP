<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    button:hover {
        border-radius: 20%;
        border-color: darkseagreen;
        background: linear-gradient(gold, white, red)
    }
    </style>

</head>

<body>
    <h1 style="color:firebrick">
        <marquee>
            LUAS JAJARGENJANG
        </marquee>
    </h1>
    <table align="center" cellpadding="25">
        <tr>
            <td>
                <form method="post">

                    <table style=" border:1px solid yellow;background-color: coral" <tr>
                        <td>panjang alas:</td>
                        <td><input type=" text" placeholder="input alas!" name="alas" required>
                        </td>
        </tr>
        <tr>
            <td>panjang tinggi:</td>
            <td>
                <input type="text" name="tinggi" placeholder="input tinggi!">
            </td>

        </tr>
        <th colspan="1">
        <td>
            <button><input type="submit" value="luas" name="send">
            </button>
        </td>
        </th>

    </table>
    </form>
    </td>
    <td>


        <form method="post">
            <table align="center" style="border:1px solid yellow;background-color: coral">
                <tr>
                    <td>panjang sisi miring:</td>
                    <td><input type=" text" placeholder="input sisi miring!" name="sisimiring" required>
                    </td>
                </tr>
                <tr>
                    <td>panjang tinggi:</td>
                    <td>
                        <input type="text" name="tinggi" placeholder="input tinggi!">
                    </td>

                </tr>
                <th colspan="1">
                <td>
                    <button><input type="submit" value="keliling" name="kirim">
                    </button>
                </td>
                </th>

            </table>
        </form>
    </td>
    </tr>
    </table>
    <center>
        <?php
        if (isset($_POST['send'])) {
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $luas = $alas * $tinggi;
            echo '<b>luas jajar genjang adalah: ' . $luas;
        }

        if (isset($_POST['kirim'])) {
            $sisi_miring = $_POST['sisimiring'];
            $tinggi = $_POST['tinggi'];
            $keliling = 2 * ($sisi_miring + $tinggi);
            echo '<b>keliling jajar genjang adalah: ' . $keliling;
        }
        ?> </center>
</body>

</html>