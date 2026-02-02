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
    // 🔹 Collect form fields
    // -----------------------

    $domain_name = sanitize($_POST['domain_name'] ?? '');
    $extra_requirement = sanitize($_POST['extra_requirement'] ?? '');

    // Checkboxes / Radio groups
    $looking_for = isset($_POST['looking_for']) ? implode(', ', (array)$_POST['looking_for']) : '';
    $number_of_pages = sanitize($_POST['pages'] ?? '');
    $want_domain = isset($_POST['want_domain']) ? 'Yes' : 'No';
    $want_hosting = isset($_POST['want_hosting']) ? 'Yes' : 'No';
    $want_emailids = isset($_POST['want_emailids']) ? 'Yes' : 'No';
    $pages_selected = isset($_POST['pages_name']) ? implode(', ', (array)$_POST['pages_name']) : '';
    $special_requirements = isset($_POST['special_req']) ? implode(', ', (array)$_POST['special_req']) : '';

    $technology = isset($_POST['technology']) ? implode(', ', (array)$_POST['technology']) : '';

    // -----------------------
    // 🔹 Validation
    // -----------------------
    $errors = [];



    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    // -----------------------
    // 🔹 Handle file upload (if any)
    // -----------------------
    $attachment_path = '';
    if (!empty($_FILES['attachment']['name'])) {
        $upload_dir = __DIR__ . '/uploads/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        $filename = time() . '_' . basename($_FILES['attachment']['name']);
        $target_file = $upload_dir . $filename;
        if (move_uploaded_file($_FILES['attachment']['tmp_name'], $target_file)) {
            $attachment_path = $target_file;
        }
    }

    // -----------------------
    // 🔹 Send Email via PHPMailer
    // -----------------------
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rudratech.karthik1@gmail.com';
        $mail->Password = 'wcco uwbe zrtp eszg'; // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('rudratech.karthik1@gmail.com', 'RudraTech - Website Requirement');
        $mail->addAddress('business@teamrudra.com', 'RudraTech Team');
        $mail->isHTML(true);
        $mail->Subject = 'New Website Requirement Submission';

        // Add attachment if uploaded
        if ($attachment_path) {
            $mail->addAttachment($attachment_path);
        }

        // -----------------------
        // 🔹 Email Body (HTML)
        // -----------------------
        $mail->Body = "
<div style='font-family: Arial, sans-serif; max-width:700px; margin:auto; border:1px solid #e5e7eb; border-radius:8px; overflow:hidden;'>
  <div style='background:#2563eb; color:#fff; padding:16px 24px;'>
    <h2 style='margin:0; font-size:20px;'>New Website Requirement Form Submission</h2>
  </div>

  <div style='padding:24px; background:#ffffff;'>
    <table style='width:100%; border-collapse:collapse; font-size:14px;'>
      <tbody>
        <tr style='background:#f9fafb;'>
          <td style='padding:10px 12px; font-weight:bold; width:40%; border:1px solid #e5e7eb;'>Are You Looking For</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$looking_for}</td>
        </tr>
        <tr>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Number Of Pages</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$number_of_pages}</td>
        </tr>
        <tr style='background:#f9fafb;'>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Want Domain</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$want_domain}</td>
        </tr>
        <tr>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Want Hosting</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$want_hosting}</td>
        </tr>
        <tr style='background:#f9fafb;'>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Want Official Email IDs</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$want_emailids}</td>
        </tr>
        <tr>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Domain Name</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$domain_name}</td>
        </tr>
        <tr style='background:#f9fafb;'>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Selected Pages</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$pages_selected}</td>
        </tr>
        <tr>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Special Requirements</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$special_requirements}</td>
        </tr>
        <tr style='background:#f9fafb;'>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Technology</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$technology}</td>
        </tr>
        <tr>
          <td style='padding:10px 12px; font-weight:bold; border:1px solid #e5e7eb;'>Extra Requirement</td>
          <td style='padding:10px 12px; border:1px solid #e5e7eb;'>{$extra_requirement}</td>
        </tr>
      </tbody>
    </table>

    <p style='color:#6b7280; font-size:12px; margin-top:20px; text-align:right;'>
      Submitted on " . date('Y-m-d H:i:s') . "
    </p>
  </div>
</div>";



        $mail->send();

        // ✅ Return a JSON response (not HTML)
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => 'Your website requirement form has been submitted successfully!'
        ]);
        exit;
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        echo "<p style='color:red;'>Mailer Error: {$mail->ErrorInfo}</p>";
    }
} else {
    echo "<p style='color:red;'>Invalid Request Method</p>";
}
