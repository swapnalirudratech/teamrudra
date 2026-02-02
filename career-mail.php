<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function sanitize($data) { return htmlspecialchars(trim($data)); }
    function is_valid_email($email) { return filter_var($email, FILTER_VALIDATE_EMAIL); }
    function is_valid_phone($phone) {
        return preg_match("/^[0-9]{10}$/", preg_replace("/[^0-9]/", "", $phone));
    }

    $name = sanitize($_POST['name'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $message = sanitize($_POST['message'] ?? '');

    $errors = [];
    if (!$name || !$phone || !$email) $errors[] = "Please fill in all required fields.";
    if (!is_valid_email($email)) $errors[] = "Invalid email address.";
    if (!is_valid_phone($phone)) $errors[] = "Invalid phone number. Please enter 10 digits.";
    if ($_FILES['cv']['error'] !== UPLOAD_ERR_OK) $errors[] = "Please upload your CV (PDF only).";

    header('Content-Type: application/json');
    if (!empty($errors)) {
        echo json_encode(['status' => 'error', 'message' => implode(' ', $errors)]);
        exit;
    }

    $cvTmpPath = $_FILES['cv']['tmp_name'];
    $cvName = basename($_FILES['cv']['name']);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rudratech.karthik1@gmail.com';
        $mail->Password = 'wcco uwbe zrtp eszg'; // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('rudratech.karthik1@gmail.com', 'RudraTech - Career Application');
        $mail->addAddress('swapnalirudratech@gmail.com', 'RudraTech HR');
        $mail->addAttachment($cvTmpPath, $cvName);

        $mail->isHTML(true);
        $mail->Subject = "New Job Application from $name";
        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width:700px; margin:auto; border:1px solid #ddd; padding:20px;'>
            <h2 style='color:#1a1a1a;'>New Job Application</h2>
            <table style='width:100%; border-collapse:collapse; font-size:14px;'>
                <tr style='background:#f8f8f8;'><td style='padding:8px; width:40%;'><strong>Name:</strong></td><td style='padding:8px;'>{$name}</td></tr>
                <tr><td style='padding:8px;'><strong>Phone:</strong></td><td style='padding:8px;'>{$phone}</td></tr>
                <tr style='background:#f8f8f8;'><td style='padding:8px;'><strong>Email:</strong></td><td style='padding:8px;'>{$email}</td></tr>
                <tr><td style='padding:8px;'><strong>Message:</strong></td><td style='padding:8px;'>{$message}</td></tr>
            </table>
            <p style='color:gray; font-size:12px; margin-top:20px;'>Submitted on " . date('Y-m-d H:i:s') . "</p>
        </div>";

        $mail->send();

        echo json_encode(['status' => 'success', 'message' => 'Your application has been submitted successfully!']);
    } catch (Exception $e) {
        error_log('Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request Method']);
}
?>
