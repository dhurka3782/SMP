<!-- index.php -->
<?php
include 'conn.php';
$stmt = $conn->prepare("SELECT * FROM tbl_users");
$stmt->execute();
$users = $stmt->fetchAll();
?>

<?php include 'header.php'; ?>

<main class="center-content">
    <div class="centered-content">
        <h1>WELCOME TO MY WEBSITE</h1>
        <p>This is the main content area.</p>
    </div>
</main>
<?php include 'footer.php'; ?>

