<?php $title = "Le filRouge homepage"; ?>
<?php ob_start(); ?>

    <h1>Update User</h1>
    <form action="updateUser.php" method="post">
        <!-- <input type="hidden" name="token" value="<?php// echo $token; ?>"> -->
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

<?php ob_clean();?>
<?php require('layout.php') ?>