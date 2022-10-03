<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
        <?php
        require_once 'lingkaran.php';
        require_once 'PersegiPanjang.php';
        require_once 'segitiga.php';
            $arr_judul = ['No', 'Nama Bidang','Keterangan', 'Luas Bidang','Keliling Bidang'];
            
            foreach ($arr_judul as $judul) { ?>
                <th><?= $judul ?></th>.
           <?php }    ?>
        </thead>
        <tbody>
        <?php 
        $lingkaran = new lingkaran(7);
        $Persegi = new PersegiPanjang(20,30);
        $segitiga = new segitiga(10,15);
        $no = 1;
        $kumpulan_bidang = [$lingkaran,$Persegi,$segitiga];
        foreach ($kumpulan_bidang as $bidang) { ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $bidang->NamaBidang()?></td>
                <td><?= $bidang->keterangan()?></td>
                <td><?= $bidang->LuasBidang()?></td>
                <td><?= $bidang->KelilingBidang()?></td>
            </tr>
        <?php $no++;} ?>
        </tbody>
    </table>
</body>
</html>