<!-- profile.php -->
<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $city = $_POST['city'];
    
    $stmt = $pdo->prepare('UPDATE users SET email = ?, fullname = ?, city = ? WHERE id = ?');
    $stmt->execute([$email, $fullname, $city, $_SESSION['userId']]);
    
}
?>

<?php include 'header.php'; ?>

<main>
    <div class="welcome-txt">
        <h1>Update Profile</h1>
        <p>Manage your personal information and update your profile details.</p>
    </div>    
        <form class="profile-form" action="profile.php" method="post">
            <div class="profile-input-box">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" .>
            </div>
            <div class="profile-input-box">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" >
            </div>
            <div class="profile-input-box">
                <label for="city">City:</label>
                <select id="city" required>
                    <option value=""></option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Trincomalee">Trincomalee</option>
                </select>
            </div>
             <div>
                <button type="submit">Update Profile</button>
            </div>
       </form>
</main>

<?php include 'footer.php'; ?>
