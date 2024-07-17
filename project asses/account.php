<!-- account.php -->
<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $old_password = $_POST['old_password'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    
    // Fetch user from database
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->execute([$_SESSION['userId']]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($old_password, $user['password'])) {
        $stmt = $pdo->prepare('UPDATE users SET password = ? WHERE id = ?');
        $stmt->execute([$new_password, $user['id']]);
    
    } else {
        echo 'Invalid old password';
    }
}
?>

<?php include 'header.php'; ?>

<main>
    <div class="wel-txt">
        <h1>Change Password</h1>
        <p>Ensure your account is secure by regularly updating your password.</p>
    </div>
        <form class="account-form"action="account.php" method="post">
            <div class="account-input-box">
                <label for="oldPassword">Old Password:</label>
                <input type="password" id="oldPassword" name="oldPassword" required>
            </div>
            <div class="account-input-box">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <div>
            <button type="submit">Change Password</button>
             </div>
        </form>
</main>

<?php include 'footer.php'; ?>
