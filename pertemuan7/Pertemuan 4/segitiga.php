<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>

<a href="index.php">Home</a>
    <h1>Segitiga</h1>
    <form action="segitigaaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan alas</td>
                <td>:</td>
                <td><input type="number" name="alas" id=""> <br></td>
            </tr>
            <tr>
                <td>Masukkan tinggi</td>
                <td>:</td>
                <td><input type="number" name="tinggi" id=""> <br></td>
            </tr>
            <tr>
                <td>Masukkan a</td>
                <td>:</td>
                <td><input type="number" name="a" id=""> <br></td>
            </tr>
            <tr>
                <td>Masukkan b</td>
                <td>:</td>
                <td><input type="number" name="b" id=""> <br></td>
            </tr>
            <tr>
                <td>Masukkan c</td>
                <td>:</td>
                <td><input type="number" name="c" id=""></td>
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