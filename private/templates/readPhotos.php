<?php $title = "Le filRouge readPhotos"; ?>
<?php ob_start(); ?>

    <h1>Read Photos</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>path</th>
                <th>Is_enabled</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($photos as $photo): ?>
                <tr>
                    <td><?= $photo['id'] ?></td>
                    <td><?= $photo['name'] ?></td>
                    <td><?= $photo['path'] ?></td>
                    <td><?= $photo['is_enabled'] ?></td>
                    <td>
                        <a href="updateUser.php?id=<?= $photo['id'] ?>">Update</a>
                        <a href="deleteUser.php?id=<?= $photo['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php  $content = ob_clean();?>
<?php require('layout.php') ?> 