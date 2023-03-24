<?php $title = "Le filRouge Read Users"; ?>
<?php ob_start(); ?>

    <h1>Read Users</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['role'] ?></td>
                    <td>
                        <a href="updateUser.php?id=<?= $user['id'] ?>">Update</a>
                        <a href="deleteUser.php?id=<?= $user['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $content = ob_clean();?>
<?php require('layout.php') ?> 