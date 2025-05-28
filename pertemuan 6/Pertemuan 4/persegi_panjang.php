<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>

<a href="index.php">Home</a>
    <h1>Persegi Panjang</h1>
    <form action="persegi_panjangaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan panjang</td>
                <td>:</td>
                <td><input type="number" name="panjang" id=""> <br></td>
            </tr>
            <tr>
                <td>Masukkan lebar</td>
                <td>:</td>
                <td><input type="number" name="lebar" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="hitung luas dan keliling"></td>
            </tr>
    
        </table>
    </form>
</body>
</html>