<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    $first_name = sanitize($_POST['first_name'] ?? '');
    $last_name = sanitize($_POST['last_name'] ?? '');
    $company = sanitize($_POST['company'] ?? '');
    $website = sanitize($_POST['website'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');
    $company_size = sanitize($_POST['company_size'] ?? '');
    $referral = sanitize($_POST['referral'] ?? '');
    $business_description = sanitize($_POST['business_description'] ?? '');
    $consent = isset($_POST['consent']) ? 'Yes' : 'No';

    $services = isset($_POST['services']) ? (array)$_POST['services'] : [];
    $services_list = implode(', ', $services);

    // Validate
    $errors = [];
    if (!$first_name || !$last_name || !$company || !$email) {
        $errors[] = "Required fields are missing.";
    }

    if (!is_valid_email($email)) {
        $errors[] = "Invalid email.";
    }

    if ($phone && !is_valid_phone($phone)) {
        $errors[] = "Invalid phone number.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    // Send Email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rudratech.karthik1@gmail.com';
        $mail->Password = 'wcco uwbe zrtp eszg';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('rudratech.karthik1@gmail.com', 'RudraTech Inquiry');
        $mail->addAddress('business@teamrudra.com', 'RudraTech');

        $mail->Subject = 'New Contact Form Submission';
        $mail->isHTML(true);

        $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 650px; margin:auto; border:1px solid #ccc; padding:20px;'>
                <h2 style='color:#1a1a1a;'>New Contact Form Submission</h2>
                <table style='width:100%; font-size:14px; border-collapse:collapse;'>
                    <tr><td><strong>First Name:</strong></td><td>{$first_name}</td></tr>
                    <tr><td><strong>Last Name:</strong></td><td>{$last_name}</td></tr>
                    <tr><td><strong>Company:</strong></td><td>{$company}</td></tr>
                    <tr><td><strong>Website:</strong></td><td>{$website}</td></tr>
                    <tr><td><strong>Email:</strong></td><td>{$email}</td></tr>
                    <tr><td><strong>Phone:</strong></td><td>{$phone}</td></tr>
                  
                    <tr><td><strong>Referral:</strong></td><td>{$referral}</td></tr>
                    <tr><td><strong>Services Interested:</strong></td><td>{$services_list}</td></tr>
                    <tr><td><strong>Business Description:</strong></td><td>{$business_description}</td></tr>
                    <tr><td><strong>Consent to Contact:</strong></td><td>{$consent}</td></tr>
                </table>
                <p style='color:gray; font-size:12px;'>Submitted on " . date('Y-m-d H:i:s') . "</p>
            </div>
        ";

        $mail->send();
        // ✅ Return a JSON response (not HTML)
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => ' form has been submitted successfully!'
        ]);
        exit;
        echo json_encode(["success" => true, "message" => "Form submitted successfully!"]);
        // header("Location: thank-you.php"); exit;
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        echo json_encode(["success" => false, "message" => "Mailer Error: " . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid Request Method"]);
}
