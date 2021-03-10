<!-- switch sama kayak if namun gabisa memberi ekspresi terlalu banyak -->
<!-- switch : lebih spesifik ke satu variabel aja
case : untuk ngecek ekspresinya aja -->

<?php
    $arr = [
        [
            'nama' => 'tit',
            'nim' => '192410101106',
            'usia' => '40'
        ],
        [
            'nama' => 'gatau',
            'nim' => '192410101002',
            'usia' => '76'
        ],
        [
            'nama' => 'baba',
            'nim' => '192410101010',
            'usia' => '12'
        ]
    ];

    $arr2 = ['tit', '192410101106', '40']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>