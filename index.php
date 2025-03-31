<?php
include 'config.php';

$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
</head>
<body>
    <h2>Users List</h2>
    <a href="create.php">Add New User</a>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="update.php?id=<?= $user['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $user['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
