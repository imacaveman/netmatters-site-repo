<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, "company", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

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
        header("Location: ../contact-us.php?error=db_error");
        exit();
    }
} else {
    header("Location: ../contact-us.php");
    exit();
}
