<?php
    require 'Tabung.php';

    // $tabung = new Tabung;
    // $tabung->tes()
    #$_POST['nama] = "Putri Regita S"
    #var_dump ($_POST);
    // if (isset($_POST['submit_btn'])){
    //     if (strlen($_POST['diameter']) > 0) {
    //         echo "login !";
    //     }else {
    //         echo "Isi diameter terlebih dahulu";
    //     }
    // }
       # echo 'Form Submitted': #menampilkan form submitted saat sudah submit
       #Ingin menampilkan bahwa orangnya sudah submit, iseet : sudah diperasikan atau tidak

    #Cara yang ketiga untuk menampilkan inputan
    // if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //     if (empty($_POST)){
    //         echo "waduh kosong";
    //     }
    // }
    // $luas = 0;
    // $volume = 0;
    // if (isset($_POST['button_submit'])){
    //     $diameter = $_POST{'diameter'};
    //     $tinggi = $_POST{'tinggi'};
    //     $r = $diameter/2;
    //     $luas = 3.14 * $diameter * $tinggi;
    //     $volume = 3.14 * $r * $r * $tinggi;
    //     echo "Diameter $diameter <br/>";
    //     echo "Tinggi $tinggi <br/>";

    // }
    $tabung = new Tabung;
    #$tabung = null; ---> untuk construct
    if (isset($_POST['button_submit'])){
        // $tabung = new Tabung($_POST['diammeter'], $_POST['tinggi']);
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungLuas();
    }
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
    <!-- <form action="" method="post">
        <input type="text" name="diameter">
        <button name='submit_btn'>submit</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="button_submit">Hitung</button>
    </form>
    <hr>
    <ul>
        <!-- <li>Luas selimut : <?= is_null($tabung) ? 'tabung kosong': $tabung->getLuasSelimut();?></li> -->
        <li>Luas sisi : <?= $tabung->getLuasSelimut(); ?></li>
        <li>Volume : </li>
    </ul>
</body>
</html>