<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
<?php
    $phi=3.14;
    $r=$_POST['r'];
    $d=$_POST['d'];
    $luas=$phi*$r*$r;
    $keliling=2*$phi*$r;
    $pilih=$_POST['pilih'];
    ?>
<a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <?php
    if ($pilih=='Keliling') { ?>
        <h4>Keliling = 2 (a + b) = <?php echo $keliling;?></h4>
    <?php }elseif ($pilih=='Luas') { ?>
        <h4>Luas = 1/2 d1 x d2 = <?php echo $luas;?></h4>
    <?php }else { ?>
        <h4>Luas = 1/2 d1 x d2 = <?php echo $luas;?></h4>
        <h4>Keliling = 2 (a + b) = <?php echo $keliling;?></h4>
    <?php }
    
    ?>
    
    <img src="th (7).jpeg" alt="ilang">
    
</body>
</html>