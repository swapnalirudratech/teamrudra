

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// header('Content-Type: application/json'); // Ensure JSON response

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // print_r($_POST);
    // die();


    function is_valid_name($name)
    {
        return preg_match("/^[a-zA-Z\s]{2,50}$/", $name);
    }

    function is_valid_phone($phone)
    {
        return preg_match("/^[0-9]{10}$/", $phone);
    }

    function is_valid_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $company = htmlspecialchars($_POST['company'] ?? '');

    $requirement = htmlspecialchars($_POST['requirement'] ?? '');


    // Validate input
    $errors = [];

    if (!is_valid_name($name)) {
        $errors[] = "Invalid name. Only letters and spaces allowed.";
    }

    if (!is_valid_phone($phone)) {
        $errors[] = "Phone must be exactly 10 digits.";
    }

    if (!is_valid_email($email)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($company) ||  empty($requirement)) {
        $errors[] = "All fields are required.";
    }

    if (empty($errors)) {
        // Proceed to save, email, or process the form
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rudratech.karthik1@gmail.com';
        $mail->Password = 'wcco uwbe zrtp eszg';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('rudratech.karthik1@gmail.com', 'rudratech');
        $mail->addAddress('business@teamrudra.com', 'rudratech');
        $mail->Subject = 'RUDRATECH IT SERVICES';
        $mail->isHTML(true);
        $mail->Body = "
                <div style='max-width: 650px; margin: 0 auto; font-family: \"Segoe UI\", sans-serif; background-color: #f4f4f4; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);'>

                    <!-- Header -->
                    <div style='background: linear-gradient(135deg,#c9ddfc,#d8e7ff); padding: 30px; text-align: center;'>
                       
                        <h2 style='color: #000; font-size: 22px; margin: 0;'>New Website Quote Inquiry</h2>
                    </div>

                    <!-- Main Content -->
                    <div style='background-color: #ffffff; '>
                       
                        <table style='width: 100%;  border-collapse: separate; border-spacing: 0; font-size: 15px;'>
                            <tbody>
                                <tr style='background-color: #f9f9f9;'>
                                    <td style='padding: 14px 16px; font-weight: 600; border-bottom: 1px solid #e5e5e5; color: #444; width: 35%;'>Name</td>
                                    <td style='padding: 14px 16px; border-bottom: 1px solid #e5e5e5; color: #333;'>{$name}</td>
                                </tr>
                                <tr style='background-color: #ffffff;'>
                                    <td style='padding: 14px 16px; font-weight: 600; border-bottom: 1px solid #e5e5e5; color: #444;'>Phone</td>
                                    <td style='padding: 14px 16px; border-bottom: 1px solid #e5e5e5; color: #333;'>{$phone}</td>
                                </tr>
                                <tr style='background-color: #f9f9f9;'>
                                    <td style='padding: 14px 16px; font-weight: 600; border-bottom: 1px solid #e5e5e5; color: #444;'>Email</td>
                                    <td style='padding: 14px 16px; border-bottom: 1px solid #e5e5e5; color: #333;'>{$email}</td>
                                </tr>
                              
                                <tr style='background-color: #f9f9f9;'>
                                    <td style='padding: 14px 16px; font-weight: 600; border-bottom: 1px solid #e5e5e5; color: #444;'>Company</td>
                                    <td style='padding: 14px 16px; border-bottom: 1px solid #e5e5e5; color: #333;'>{$company}</td>
                                </tr>
                                <tr style='background-color: #ffffff;'>
                                    <td style='padding: 14px 16px; font-weight: 600; border-bottom: 1px solid #e5e5e5; color: #444;'>Requirement</td>
                                    <td style='padding: 14px 16px; border-bottom: 1px solid #e5e5e5; color: #333;'>{$requirement}</td>
                                </tr>
                               
                            </tbody>
                        </table>

                    </div>

                    <!-- Footer -->
                    <div style='background-color: #f1f1f1; text-align: center; padding: 20px; font-size: 13px; color: #888;'>
                        &copy; " . date('Y') . " <strong>RudraTech IT Service</strong>. All rights reserved.<br>
                        <span style='font-size: 12px;'>This message was automatically generated by the RudraTech website quote form.</span>
                    </div>
                </div>
                ";

        $mail->send();

        echo "<script>alert('Form submitted successfully!'); window.location.href = '/home.php';</script>";
        exit;
        echo json_encode(["success" => true, "message" => "Message sent successfully!"]);
        // die();
    } catch (Exception $e) {
        error_log("Email Error: " . $mail->ErrorInfo);
        echo json_encode(["success" => false, "message" => $e->getMessage()]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request."]);
}

header("Location: ../home.php");
// die();
