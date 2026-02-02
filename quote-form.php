<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // -----------------------
    // 🔹 Sanitize & Validate
    // -----------------------
    function sanitize($data)
    {
        return htmlspecialchars(trim($data));
    }

    function is_valid_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function is_valid_phone($phone)
    {
        return preg_match("/^[0-9]{10}$/", preg_replace("/[^0-9]/", "", $phone));
    }

    // -----------------------
    // 🔹 Collect Fields
    // -----------------------
    $name = sanitize($_POST['name'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $location = sanitize($_POST['location'] ?? '');
    $company = sanitize($_POST['company'] ?? '');
    $requirement = sanitize($_POST['requirement'] ?? '');


    // -----------------------
    // 🔹 Validation
    // -----------------------
    $errors = [];

    if (!$name || !$phone || !$email) {
        $errors[] = "Please fill in all required fields (Name, Phone, Email).";
    }

    if (!is_valid_email($email)) {
        $errors[] = "Invalid email address.";
    }

    if (!is_valid_phone($phone)) {
        $errors[] = "Invalid phone number. Please enter 10 digits.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    // -----------------------
    // 🔹 Send Email via PHPMailer
    // -----------------------
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rudratech.karthik1@gmail.com'; // 🔹 Your Gmail
        $mail->Password = 'wcco uwbe zrtp eszg'; // 🔹 Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('rudratech.karthik1@gmail.com', 'RudraTech - Quote Request');
        $mail->addAddress('business@teamrudra.com', 'RudraTech Team');
        $mail->isHTML(true);
        $mail->Subject = 'New Quote Request Form Submission';

        // -----------------------
        // 🔹 Email Body (Styled)
        // -----------------------
        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width:700px; margin:auto; border:1px solid #ddd; padding:20px;'>
            <h2 style='color:#1a1a1a;'>New Quote Request Submission</h2>
            <table style='width:100%; border-collapse:collapse; font-size:14px;'>
                <tr style='background:#f8f8f8;'><td style='padding:8px; width:40%;'><strong>Name:</strong></td><td style='padding:8px;'>{$name}</td></tr>
                <tr><td style='padding:8px;'><strong>Phone:</strong></td><td style='padding:8px;'>{$phone}</td></tr>
                <tr style='background:#f8f8f8;'><td style='padding:8px;'><strong>Email:</strong></td><td style='padding:8px;'>{$email}</td></tr>
                <tr><td style='padding:8px;'><strong>Location:</strong></td><td style='padding:8px;'>{$location}</td></tr>
                <tr style='background:#f8f8f8;'><td style='padding:8px;'><strong>Company Name:</strong></td><td style='padding:8px;'>{$company}</td></tr>
                <tr><td style='padding:8px;'><strong>Requirement:</strong></td><td style='padding:8px;'>{$requirement}</td></tr>
                
            </table>
            <p style='color:gray; font-size:12px; margin-top:20px;'>Submitted on " . date('Y-m-d H:i:s') . "</p>
        </div>";

        // -----------------------
        // 🔹 Send & Response
        // -----------------------
        $mail->send();

        // ✅ Return a JSON response (not HTML)
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => ' form has been submitted successfully!'
        ]);
        exit;
    } catch (Exception $e) {
        error_log('Mailer Error: ' . $mail->ErrorInfo);
        echo '<p style="color:red;">Mailer Error: ' . $mail->ErrorInfo . '</p>';
    }
} else {
    echo '<p style="color:red;">Invalid Request Method</p>';
}
