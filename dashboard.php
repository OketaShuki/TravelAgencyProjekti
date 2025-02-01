<?php
include_once 'userRepository.php';

$userRepository = new UserRepository();
$users = $userRepository->getAllUsers();

// Separate users by role
$admins = array_filter($users, function ($user) {
    return $user['role'] === 'admin';
});

$regularUsers = array_filter($users, function ($user) {
    return $user['role'] === 'user';
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAJESTIC TRAVEL AGENCY </title>
    <link rel="stylesheet" href="style.css">
    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>
</head>
<body>
<nav>
    <ul class="sidebar">
        <li onclick="hideSidebar()"><a href="#"><img src="fototprojekt/close.png" alt="close" height="26" width="26"></a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="rrethnesh.php">Rrethnesh</a></li>
        <li><a href="ofertat.php">Ofertat</a></li>
        <li><a href="contactus.php">Kontakti</a></li>
        <li><a href="shembull.php">Destinacionet</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li class="hideOnMobile"><a href="dashboard.php">Dashboard</a></li>
        <li class="hideOnMobile"><a href="nakontaktotabela.php">Mesazhet</a></li>
        <li class="hideOnMobile"><a href="dashboardcontent.php">Contenti</a></li>
        <?php endif; ?>
    </ul> 
    <ul>
        <li class=""><a class="logo-1" href="index.php"><img src="fototprojekt/LogoProjektit.png" alt="LogoProjektit" height="80" width="80"></a></li>
        <li class="hideOnMobile"><a href="index.php">Home</a></li>
        <li class="hideOnMobile"><a href="rrethnesh.php">Rrethnesh</a></li>
        <li class="hideOnMobile"><a href="ofertat.php">Ofertat</a></li>
        <li class="hideOnMobile"><a href="contactus.php">Kontakti</a></li>
        <li class="hideOnMobile"><a href="shembull.php">Destinacionet</a></li>
        <li class="hideOnMobile"><a href="login.php">Login</a></li>
        <li class="hideOnMobile"><a href="feedback.php">Feedback</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li class="hideOnMobile"><a href="dashboard.php">Dashboard</a></li>
        <li class="hideOnMobile"><a href="nakontaktotabela.php">Mesazhet</a></li>
        <li class="hideOnMobile"><a href="dashboardcontent.php">Contenti</a></li>
        <?php endif; ?>
        <li onclick=showSidebar()><a class="menu-button" href="#"><img src="fototprojekt/threebars.png" alt="threebars" height="80" width="80"></a></li>
    </ul>
</nav>
<body>
    <h2>Admins</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($admins as $admin) {
            echo "
               <tr>
                   <td>{$admin['id']}</td>
                   <td>{$admin['username']}</td>
                   <td>{$admin['email']}</td>
                   <td>{$admin['role']}</td>
                   <td><a href='edit.php?id={$admin['id']}'>Edit</a></td>
                   <td><a href='delete.php?id={$admin['id']}'>Delete</a></td>
               </tr>
               ";
        }
        ?>
    </table>

    <h2>Regular Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($regularUsers as $user) {
            echo "
               <tr>
                   <td>{$user['id']}</td>
                   <td>{$user['username']}</td>
                   <td>{$user['email']}</td>
                   <td>{$user['role']}</td>
                   <td><a href='edit.php?id={$user['id']}'>Edit</a></td>
                   <td><a href='delete.php?id={$user['id']}'>Delete</a></td>
               </tr>
               ";
        }
        ?>
    </table>
</body>
</html>
