<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Belah Ketupat</h1>
    <form action="belah_ketupataction.php" method="post">
        <table>
            <tr>
                <td>Masukkan d1</td>
                <td>:</td>
                <td><input type="number" name="d1" id="" required><br></td>
            </tr>
            <tr>
                <td>Masukkan d2</td>
                <td>:</td>
                <td><input type="number" name="d2" id="" required><br></td>
            </tr>
            <tr>
                <td>Masukkan sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" id="" required></td>
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
                <td><input type="submit" value="Submit"></td>
            </tr>
        
        </table>
    </form>
    
</body>
</html>