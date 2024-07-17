<!-- login_process.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Assuming you have a connection established in conn.php
    include 'conn.php';

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "User found.<br>";
        if (password_verify($password, $user['password'])) {
            echo "Password verified.<br>";

            $_SESSION['user_id'] = $user['userId'];
            $_SESSION['city'] = $user['city'];
            $_SESSION['fullName'] = $user['fullName'];

        if (isset($_POST['remember_me'])) {
            setcookie('user_id', $user['userId'], time() + (86400 * 30), "/", "", true, true);
            setcookie('email', $user['email'], time() + (86400 * 30), "/", "", true, true);
        }

        // Redirect to protected page
        header("Location: protected-home.php");
        exit();
    } else {
        // Handle invalid login
        echo "Invalid username or password";
    }
} else {
    echo "User not found.<br>";
}
}
?>
