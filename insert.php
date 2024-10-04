<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $jk = $_POST['jk']; 
    $email = $_POST['email'];

    $sql = "INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email) VALUES (:npm, :nama, :alamat, :tgl_lhr, :jk, :email)";
    
    try {
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':npm', $npm);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':tgl_lhr', $tgl_lhr);
        $stmt->bindParam(':jk', $jk);
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        header("Location: index.php");
        exit;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>
