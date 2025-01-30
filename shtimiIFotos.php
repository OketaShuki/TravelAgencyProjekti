<?php
session_start(); 
include 'DatabaseConnection.php';

$db = new DatabaseConnection();
$conn = $db->startConnection(); 