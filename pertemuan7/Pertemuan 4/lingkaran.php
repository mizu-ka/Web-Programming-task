<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>

<a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <form action="lingkaranaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan r</td>
                <td>:</td>
                <td><input type="number" name="r" id=""> <br></td>
            </tr>
            <tr>
                <td>Masukkan d</td>
                <td>:</td>
                <td><input type="number" name="d" id=""></td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="Luas">
                <label for="html">Luas</label><br>
                <input type="radio" name="pilih" value="Keliling">
                <label for="html">Keliling</label><br>
                <input type="radio" name="pilih" value="Semua">
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