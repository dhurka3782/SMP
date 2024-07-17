<!-- protected-home.php -->
<?php
include 'header.php';
?>
<main>
<div class="welcome-message">
        <h1>Welcome to Your Dashboard Overview</h1>
    </div>

    <div class="dashboard-links">
        <a href="profile.php" class="dashboard-link">
            <div class="icon-container">
                <img src="update-profile.png">
            </div>
            <span>Update Profile</span>
        </a>
        <a href="account.php" class="dashboard-link">
            <div class="icon-container">
                <img src="change-password.png">
            </div>
            <span>Change Password</span>
        </a>
        <a href="holiday.php" class="dashboard-link">
            <div class="icon-container">
                <img src="holiday.png">
            </div>
            <span>Public Holidays</span>
        </a>
        <a href="logout.php" class="dashboard-link">
            <div class="icon-container">
                <img src="Logout.png">
            </div>
            <span>Logout</span>
        </a>
    </div>
</main>
<?php
include 'footer.php';
?>



