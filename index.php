<?php 
    session_start();
    require "./config/connect_db.php";
    require "./layout/header.php"; 
?>

<div class="container p-3">
    <div class="form">
        <form action="./controllers/process_login.php" method="POST">
            <table>
                <tbody>
                    <tr>
                        <h2>Sign In</h2>
                    </tr>
                    <?php if(isset($_SESSION['loginError']) && $_SESSION['loginError']): ?>
                    <tr>
                        <p style="color: red;font-size: 12px">Invalid credentials.</p>
                    </tr>
                    <?php endif; ?>
                    <tr style="text-align:right">
                        <td>
                            <label>Email Address</label>
                        </td>
                        <td>
                            <input type="email" name="email" required/>
                        </td>
                    </tr>
                    <tr style="text-align:right">
                        <td>
                            <label>Password</label>
                        </td>
                        <td>
                        <input type="password" name="password" required/>
                        </td>
                    </tr> 
                    <tr style="text-align:right">
                        <td colspan="2">
                            <button class="btn btn-primary" name="login">Sign in</button>
                        </td>
                    </tr>
                    <tr style="text-align:center">
                        <td colspan="2">
                            <label>Don't have an account? <a href="./views/register.php">Register</a></label>
                        </td>
                    </tr>
                <tbody>
            </table>
        </form>
    </div>
</div>

<?php require "./layout/footer.php" ?>