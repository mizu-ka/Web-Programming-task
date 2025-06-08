<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
<?php
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $sisi=$_POST['sisi'];
    $luas=1/2*$d1*$d2;
    $keliling=4*$sisi;
    $pilih=$_POST['pilih'];
    ?>
    <a href="index.php">Home</a>
    <h1>Belah Ketupat</h1>
    <?php
    if ($pilih=='Keliling') { ?>
        <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4>
    <?php }elseif ($pilih=='Luas') { ?>
        <h4>Luas = 1/2 d1 x d2 = <?php echo $luas;?></h4>
    <?php }else { ?>
        <h4>Luas = 1/2 d1 x d2 = <?php echo $luas;?></h4>
        <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4>
    <?php }
    
    ?>
    
    <img src="th (4).jpeg" alt="ilang">
    
</body>
</html>