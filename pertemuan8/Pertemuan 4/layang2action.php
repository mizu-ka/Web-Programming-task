<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanng Layang</title>
</head>
<body>
<?php
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $a=$_POST['a'];
    $b=$_POST['b'];
    $luas=1/2*$d1*$d2;
    $keliling=2*($a+$b);
    $pilih=$_POST['pilih'];
    ?>
<a href="index.php">Home</a>
    <h1>Layang Layang</h1>
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
    <img src="th (6).jpeg" alt="ilang">
    
</body>
</html>