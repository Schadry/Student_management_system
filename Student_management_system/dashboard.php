<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include 'header.php'; ?>
<h2>Welcome to the Student Management System, <?php echo $_SESSION['username']; ?>!</h2>
