
<?php 
    require 'rumus.php'; 

    $bola = new Bola;
    $bola->setJari(7);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101106</title>
</head>
<body>
    <h2>Putri Regita Saptaningtias</h2>
    <h1> Bangun Ruang : Bola </h1>

    <ul>
        <li> Panjang jari - jari : <?php echo ($bola-> getJari())?></li>
        <li> Luas : <?php echo ($bola-> getLuas())?></li>
        <li> Volume : <?php echo ($bola-> getVolume())?></li>
    </ul>
</body>
</html>