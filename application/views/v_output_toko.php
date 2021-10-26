<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Transaksi</title>
</head>
<style>
fieldset {
    width: 18%;
    margin: 100px auto;
    border-radius: 20px;
    border-style: inset outset;
    font-family: 'Times New Roman', Times, serif;
}

button a {
    text-decoration: none;
    color: black;
}

fieldset th {
    font-weight: normal;
}

legend {
    font-family: lucida handwriting;
}

select {
    width: 100%;

}
</style>

<body>
    <fieldset>
        <legend>Output Transaksi</legend>
        <table>
            <tr>
                <th>Nama Pembeli</th>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>Nomer HP</th>
                <td>:</td>
                <td>
                    <?= $nhp; ?>
                </td>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <th>Ukuran Sepatu</th>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <th>Total Harga</th>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <button><a href="<?= base_url('toko'); ?>">Kembali</a></button>
                </td>
            </tr>
        </table>
    </fieldset>
</body>

</html>