<?php require "../layout/header.php" ?>

<div class="container p-3">
    <div class="form">
        <form action="../controllers/add_contact.php" method="POST">
            <table>
                <tbody>
                    <tr>
                        <h2>Add Contact</h2>
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
                            <label>Company</label>
                        </td>
                        <td>
                            <input type="text" name="company" required/>
                        </td>
                    </tr>
                    <tr style="text-align:right">
                        <td>
                            <label>Phone</label>
                        </td>
                        <td>
                            <input type="number" name="phone" required/>
                        </td>
                    </tr>
                    <tr style="text-align:right">
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" required/>
                        </td>
                    </tr>
                    <tr style="text-align:right">
                        <td colspan="2">
                            <button class="btn btn-primary" name="addContact">Submit</button>
                        </td>
                    </tr>
                <tbody>
            </table>
        </form>
    </div>
</div>

<?php require "../layout/footer.php" ?>