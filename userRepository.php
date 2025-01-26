<?php

include_once 'DatabaseConnection.php';

class UserRepository {
    private $connection;

    public function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role = $user->getRole();

        $sql = "INSERT INTO users (id, username, email, password, role) VALUES (?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        try {
            $statement->execute([$id, $username, $email, $password, $role]);
            return true; 
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage(); 
        }
    }

    public function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT id, username, email, password, role FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    function getUserById($id) {
        $conn = $this->connection;

        $sql = "SELECT id, username, email, password, role FROM users WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    function updateUser($id, $username, $email, $password, $role) {
        try {
            $conn = $this->connection;

            $sql = "UPDATE users SET username=?, email=?, password=?, role=? WHERE id=?";

            $statement = $conn->prepare($sql);

            if (!$statement) {
                throw new Exception("Error preparing statement: " . $conn->errorInfo()[2]);
            }

            $statement->execute([$username, $email, $password, $role, $id]);

            return "Update was successful";
        } catch (PDOException $e) {
            return "Error updating user: " . $e->getMessage();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function deleteUser($id) {
        try {
            $conn = $this->connection;

            $sql = "DELETE FROM users WHERE id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$id]);

            return "Delete was successful";
        } catch (PDOException $e) {
            return "Error deleting user: " . $e->getMessage();
        }
    }

    function getAllUsersByRole($role) {
        $conn = $this->connection;

        $sql = "SELECT id, username, email, password, role FROM users WHERE role = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$role]);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }
}

?>
