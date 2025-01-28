<?php
$userId = $_GET['id'];
include_once 'userRepository.php';

$userRepository = new UserRepository();
$user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h3>Edit User</h3>
    <div class="form-container">
        <form action="" method="post">
            <label for="id">ID:</label>
            <input type="text" name="id" value="<?= $user['id'] ?>" readonly><br>
            
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?= $user['username'] ?>"><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $user['email'] ?>"><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" value="<?= $user['password'] ?>"><br>
            
            <label for="role">Role:</label>
            <select name="role">
                <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
            </select><br>
            
            <input type="submit" name="editBtn" value="Save"><br>
        </form>
    </div>

    <?php
    if (isset($_POST['editBtn'])) {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $role = isset($_POST['role']) ? $_POST['role'] : '';

        $userRepository->updateUser($id, $username, $email, $password, $role);
        header("Location: dashboard.php");
        exit;
    }
    ?>
</body>
</html>
