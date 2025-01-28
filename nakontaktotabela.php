<?php
include_once 'contactRepository.php'; 
$contactRepository = new contactRepository();


$generalMessages = $contactRepository->getAllContacts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Na kontakto Dashboard</title>
    <link rel="stylesheet" href="nakontakto.css">
</head>
<body>
    <h2>MESAZHE</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Email</th>
            <th>Titulli</th>
            <th>Mesazhi</th>
            <th>Delete</th> 
        </tr>
        <?php
        if (!empty($generalMessages)) {
            foreach ($generalMessages as $message) {
                echo "
                <tr>
                    <td>{$message['id']}</td>
                    <td>{$message['emri']}</td>
                    <td>{$message['email']}</td>
                    <td>{$message['titulli']}</td>
                    <td>{$message['mesazhi']}</td>
                    <td><a href='deletetabela.php?id={$message['id']}'>Delete</a></td> <!-- Delete link -->
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='6'>No messages found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
