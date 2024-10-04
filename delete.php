<?php
include 'config.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $sql = "DELETE FROM identitas WHERE npm = :npm";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':npm', $npm);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $conn = null;

    header("Location: index.php");
    exit;
}
?>
