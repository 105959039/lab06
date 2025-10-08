<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: welcome.php");
    exit();
}
?>
<?php include 'header.inc'; ?>

<div class="container">
    <div class="main-content">
        <div class="card">
            <h2>Login Form</h2>
            
            <?php if (isset($_GET['error'])): ?>
                <div class="message error">
                    Invalid username or password. Please try again.
                </div>
            <?php endif; ?>
            
            <?php if (isset($_GET['logout'])): ?>
                <div class="message success">
                    You have been successfully logged out.
                </div>
            <?php endif; ?>
            
            <form id="loginForm" action="process.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <!-- Hidden field for user token -->
                <input type="hidden" id="userToken" name="userToken" value="Y123456">
                
                <button type="submit">Login</button>
            </form>
            
            <div class="user-info" style="margin-top: 1.5rem;">
                <p><strong>Demo Credentials:</strong></p>
                <p>Username: YourName</p>
                <p>Password: YourStudentID</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.inc'; ?>