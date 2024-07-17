<!-- login.php -->
<?php include 'header.php'; ?>

<main>
    <form action="login_process.php" method="post" class="form-login" >
    <div class="input-box">
                <input type="email" name="email" id="email" required>
                <label for="email">Email Id</label>
                <img src="update-profile.png" alt="Email Icon">
            </div>
            
            <div class="input-box">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
                <img src="Password.png" alt="Password Icon">
            </div>
        
        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember Me</label>
        </div>

        <button type="submit">Login</button>
        
        <div class="form-group">
            <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
        </div>
    </form>
</main>

<?php include 'footer.php'; ?>
