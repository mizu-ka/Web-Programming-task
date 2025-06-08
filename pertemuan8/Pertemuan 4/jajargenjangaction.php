<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
<?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisi=$_POST['sisi'];
    $luas=$alas*$tinggi;
    $keliling=2*($alas+$sisi);
    $pilih=$_POST['pilih'];
    ?>
<a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>
    <?php
    if ($pilih=='Keliling') { ?>
        <h4>Keliling = 2(alas + sisi) = <?php echo $keliling;?></h4>
    <?php }elseif ($pilih=='Luas') { ?>
        <h4>Luas = alas x tinggi = <?php echo $luas;?></h4>
    <?php } else { ?>
        <h4>Luas = alas x tinggi = <?php echo $luas;?></h4>
        <h4>Keliling = 2(alas + sisi) = <?php echo $keliling;?></h4>
    <?php }
    
    ?>
    
    <img src="th (5).jpeg" alt="ilang">
    
</body>
</html>