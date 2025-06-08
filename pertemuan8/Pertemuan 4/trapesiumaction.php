<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
<?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $t=$_POST['t'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $luas=1/2*($a+$b)*$t;
    $keliling=$a+$b+$c+$d;
    $pilih=$_POST['pilih']
    ?>
<a href="index.php">Home</a>
    <h1>Trapesium</h1>
    <?php
    if ($pilih=='Keliling') { ?>
        <h4>Keliling = a+b+c+d = <?php echo $keliling;?></h4>
    <?php }elseif ($pilih=='Luas') { ?>
        <h4>Luas = 1/2 (a+b)xt = <?php echo $luas;?></h4>
    <?php }else { ?>
        <h4>Luas = 1/2 (a+b)xt = <?php echo $luas;?></h4>
        <h4>Keliling = a+b+c+d = <?php echo $keliling;?></h4>
    <?php }
    
    ?>
    
    <img src="th (3).jpeg" alt="ilang">
    
</body>
</html>