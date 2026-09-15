<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard-container">
    <h2>Please find your registered information as follows:</h2>
    <ul>
        <strong>Name:</strong> <?= $_SESSION['name'] ?><br>
        <strong>Email:</strong> <?= $_SESSION['email'] ?>
    </ul>
    <a class="logout-btn" href="logout.php">Logout</a>
</div>
</body>
</html>