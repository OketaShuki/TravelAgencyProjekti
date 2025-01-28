<?php


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $contactId = $_GET['id']; 
    include_once 'contactRepository.php';

    
    $contactRepository = new contactRepository();

    
    $contactRepository->deleteContact($contactId);

    
    header("Location: nakontaktotabela.php"); 
    exit();
} else {
    
    echo "Invalid Contact ID.";
    exit();
}

?>
