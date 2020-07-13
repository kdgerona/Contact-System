<?php require "../layout/header.php" ?>

<div class="container p-3">
    <div class="form">
        <form action="../controllers/process_registration.php" method="POST">
            <table>
                <tbody>
                    <tr>
                        <h2>Register</h2>
                    </tr>
                    <tr style="text-align:right">
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" required/>
                        </td>
                    </tr>
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
                        <td>
                            <label>Confirm Password</label>
                        </td>
                        <td>
                        <input type="password" name="cpassword" required/>
                        </td>
                    </tr> 
                    <tr style="text-align:right">
                        <td colspan="2">
                            <button class="btn btn-primary" name="register">Submit</button>
                        </td>
                    </tr>
                <tbody>
            </table>
        </form>
    </div>
</div>

<?php require "../layout/footer.php" ?>