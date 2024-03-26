<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_POST["name"];
    // $company = $_POST["company"];
    // $email = $_POST["email"];
    // $phone = $_POST["phone"];
    // $message = $_POST["message"];
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, "company", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        die("Please make sure to fill in all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email.");
    }

    try {
        require_once "dbhandler.php";

        $query = "INSERT INTO user_enquiries (name, company, email, phone, message) VALUES 
        (?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $company, $email, $phone, $message]);

        $pdo = null;
        $stmt = null;

        header("Location: ../contact-us.php");
        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../contact-us.php");
}
