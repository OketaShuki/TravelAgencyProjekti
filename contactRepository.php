<?php

include_once 'DatabaseConnection.php';

class contactRepository {
    private $connection;

    public function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    // Insert a new contact
    public function insertContact($contact){
        $conn = $this->connection;

        $id = $contact->getId();
        $emri = $contact->getEmri();
        $email = $contact->getEmail();
        $titulli = $contact->getTitulli();
        $mesazhi = $contact->getMesazhi();

        $sql = "INSERT INTO contactus (id, emri, email, titulli, mesazhi) VALUES (?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        try {
            $statement->execute([$id, $emri, $email, $titulli, $mesazhi]);
            return true; 
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage(); 
        }
    }

    // Get all contacts
    public function getAllContacts(){
        $conn = $this->connection;
        $sql = "SELECT id, emri, email, titulli, mesazhi FROM contactus";
    
        try {
            $statement = $conn->query($sql);
            $contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
    
            return $contacts;
        } catch (PDOException $e) {
            echo "SQL Error: " . $e->getMessage(); // Show SQL error if query fails
            return [];
        }
    }
    

   
    public function getContactById($id) {
        $conn = $this->connection;

        $sql = "SELECT id, emri, email, titulli, mesazhi FROM contactus WHERE id = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $contact = $statement->fetch(PDO::FETCH_ASSOC);

        return $contact;
    }

    
    public function deleteContact($id) {
        try {
            $conn = $this->connection;
    
            
            $sql = "DELETE FROM contactus WHERE id = ?";
            $statement = $conn->prepare($sql);
    
            
            $statement->execute([$id]);
    
            return true;
        } catch (PDOException $e) {
            echo 'Error deleting contact: ' . $e->getMessage();
            return false;
        }
    }
    


    
    public function getAllContactsByTitulli($titulli) {
        $conn = $this->connection;

        $sql = "SELECT id, emri, email, titulli, mesazhi FROM contactus WHERE titulli = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$titulli]);
        $contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $contacts;
    }
}

?>
