<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user'];
$userToken = $_SESSION['token'];
?>
<?php include 'header.inc'; ?>

<div class="container">
    <div class="main-content">
        <div class="card">
            <div class="welcome-message">
                <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
                <p>You have successfully logged in to the system.</p>
            </div>
            
            <div class="user-info">
                <h3>Session Information</h3>
                <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
                <p><strong>User Token:</strong> <?php echo htmlspecialchars($userToken); ?></p>
                <p><strong>Session ID:</strong> <?php echo session_id(); ?></p>
            </div>
            
            <div style="text-align: center;">
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.inc'; ?>


