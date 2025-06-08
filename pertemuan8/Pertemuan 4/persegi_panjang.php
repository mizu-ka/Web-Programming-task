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
                <td><input type="number" name="panjang" id="" required> <br></td>
            </tr>
            <tr>
                <td>Masukkan lebar</td>
                <td>:</td>
                <td><input type="number" name="lebar" id="" required></td>
            </tr>
             <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="Luas" required>
                <label for="html">Luas</label><br>
                <input type="radio" name="pilih" value="Keliling" required>
                <label for="html">Keliling</label><br>
                <input type="radio" name="pilih" value="Semua" required>
                <label for="html">Semua</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="submit"></td>
            </tr>
    
        </table>
    </form>
</body>
</html>