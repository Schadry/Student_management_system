<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];

    $sql = "INSERT INTO students (name, age, grade) VALUES ('$name', '$age', '$grade')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_students.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php include 'header.php'; ?>
<h2>Add Student</h2>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="form-group">
        <label for="grade">Grade</label>
        <input type="text" class="form-control" id="grade" name="grade" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
</form>