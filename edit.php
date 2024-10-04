<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            color: #333;
            padding: 20px;
        }
        h1 {
            color: #e74c3c;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
        }
        input[type="text"],
        input[type="date"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form method="POST" action="update.php">
        <input type="hidden" name="npm" value="<?php echo $row['npm']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required>
        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lhr" value="<?php echo $row['tgl_lhr']; ?>" required>
        <label>Jenis Kelamin:</label>
        <input type="text" name="jk" value="<?php echo $row['jk']; ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>
