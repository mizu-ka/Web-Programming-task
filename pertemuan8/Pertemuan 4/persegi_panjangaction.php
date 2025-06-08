<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>
<?php
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);
    $pilih=$_POST['pilih']
    ?>
<a href="index.php">Home</a>
    <h1>Persegi Panjang</h1>
    <?php
    if ($pilih=='Keliling') { ?>
        <h4>Keliling = 2 x (panjang x lebar) = <?php echo $keliling;?></h4>
    <?php }elseif ($pilih=='Luas') { ?>
        <h4>Luas = lebar x lebar = <?php echo $luas;?></h4>
    <?php }else { ?>
        <h4>Luas = lebar x lebar = <?php echo $luas;?></h4>
        <h4>Keliling = 2 x (panjang x lebar) = <?php echo $keliling;?></h4>
    <?php }
    
    ?>

    <img src="th (1).jpeg" alt="ilang">
    
</body>
</html>