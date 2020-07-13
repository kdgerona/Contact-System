<?php require "../layout/header.php" ?>

<div class="container p-3">
    <form action="../controllers/process_contact.php" method="POST">
        <table>
            <tr>
                <td>
                    <h2>Contacts</h2>
                </td>
                <td></td>
                <td style="text-align: center">
                    <button class="btn btn-primary" name="add">Add Contact</button>
                </td>
                <td></td>
                <td style="text-align: center">
                    <button class="btn btn-secondary" name="logout">Logout</button>
                </td>
            </tr>
        </table>
        <table class="table">
            <thead style="text-align: center">
                <th>Name</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </thead>
            <tbody style="text-align: center">
                <tr>
                    <td>Contact Name</td>
                    <td>Contact Company</td>
                    <td>Contact phone</td>
                    <td>Contact Email</td>
                    <td>
                        <button class="btn btn-danger" name="delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

<?php require "../layout/footer.php" ?>