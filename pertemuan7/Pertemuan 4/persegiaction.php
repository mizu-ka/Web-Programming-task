<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>
    <?php
    $sisi=$_POST['sisi'];
    $luas=$sisi*$sisi;
    $keliling=4*$sisi;
    $pilih = $_POST['pilih']
    ?>

<a href="index.php">Home</a>
    <h1>Persegi</h1>
    <h4>Luas = sisi x sisi = <?php echo $luas;?></h4>
    <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4>
    <img src="th.jpeg" alt="ilang">
</body>
</html>