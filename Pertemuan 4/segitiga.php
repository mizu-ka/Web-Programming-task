<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
<?php
    $alas=10;
    $tinggi=12;
    $a=3;
    $b=4;
    $c=5;
    $luas=1/2*$alas*$tinggi;
    $keliling=$a+$b+$c;
    ?>
<a href="index.php">Home</a>
    <h1>Segitiga</h1>
    <h4>Luas = 1/2 x alas x tinggi = <?php echo $luas;?></h4>
    <h4>Keliling = a + b + c = <?php echo $keliling;?></h4>
    <img src="th (2).jpeg" alt="ilang">

</body>
</html>