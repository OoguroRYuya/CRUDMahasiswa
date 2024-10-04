<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="radio"] + label {
            margin-right: 20px;
            color: #555;
        }

        h2:last-of-type {
            color: #4CAF50;
            font-size: 22px;
            margin-top: 30px;
        }

        .result {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .result h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .result p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 5px;
        }

        .result p span {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <h2>Input Data</h2>

    <form method="POST" action="">
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label>

        <label for="hobi">Hobi:</label>
        <input type="text" id="hobi" name="hobi" required>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = htmlspecialchars($_POST['npm']);
        $nama = strtoupper(htmlspecialchars($_POST['nama']));
        $alamat = strtoupper(htmlspecialchars($_POST['alamat']));
        $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
        $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $hobi = htmlspecialchars($_POST['hobi']);

        echo "<div class='result'>";
        echo "<h2>Hasil Input:</h2>";
        echo "<p><span>NPM:</span> $npm</p>";
        echo "<p><span>Nama:</span> $nama</p>";
        echo "<p><span>Alamat:</span> $alamat</p>";
        echo "<p><span>Tempat Lahir:</span> $tempat_lahir</p>";
        echo "<p><span>Tanggal Lahir:</span> $tanggal_lahir</p>";
        echo "<p><span>Jenis Kelamin:</span> $jenis_kelamin</p>";
        echo "<p><span>Hobi:</span> $hobi</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
