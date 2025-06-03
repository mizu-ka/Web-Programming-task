<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
<?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
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