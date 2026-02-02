<?php
$page_title = "getquote";

?>





<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $location = htmlspecialchars($_POST['location'] ?? '');
    $company = htmlspecialchars($_POST['company'] ?? '');
    $requirement = htmlspecialchars($_POST['requirement'] ?? '');
    $budget = htmlspecialchars($_POST['budget'] ?? '');

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
        $mail->Subject = 'New Get A Quote Submission';
        $mail->isHTML(true);
        $mail->Body = "
                    <div style='max-width: 650px; margin: 0 auto; font-family: \"Segoe UI\", Arial, sans-serif; background-color: #f9fafb; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); overflow: hidden;'>

                        <!-- Header -->
                        <div style='background: linear-gradient(135deg, #0d6efd, #0a58ca); padding: 25px 30px; text-align: center;'>
                            <h2 style='margin: 0; color: #ffffff; font-size: 20px;'>New Website Inquiry</h2>
                        </div>

                        <!-- Main Content -->
                        <div style='padding: 30px; background-color: #ffffff;'>
                            <p style='font-size: 15px; color: #333333; margin-bottom: 20px;'>You have received a new inquiry via the <strong>RudraTech IT Service</strong> website. Below are the details:</p>

                            <table style='width: 100%; border-collapse: collapse; font-size: 15px;'>
                                <tbody>
                                    <tr>
                                        <td style='background-color: #f1f3f5; font-weight: 600; padding: 12px; border: 1px solid #e1e5ea; width: 30%;'>Name</td>
                                        <td style='padding: 12px; border: 1px solid #e1e5ea;'>{$name}</td>
                                    </tr>
                                    <tr>
                                        <td style='background-color: #f1f3f5; font-weight: 600; padding: 12px; border: 1px solid #e1e5ea;'>Phone</td>
                                        <td style='padding: 12px; border: 1px solid #e1e5ea;'>{$phone}</td>
                                    </tr>
                                    <tr>
                                        <td style='background-color: #f1f3f5; font-weight: 600; padding: 12px; border: 1px solid #e1e5ea;'>Email</td>
                                        <td style='padding: 12px; border: 1px solid #e1e5ea;'>{$email}</td>
                                    </tr>
                                    <tr>
                                        <td style='background-color: #f1f3f5; font-weight: 600; padding: 12px; border: 1px solid #e1e5ea;'>Location</td>
                                        <td style='padding: 12px; border: 1px solid #e1e5ea;'>{$location}</td>
                                    </tr>
                                    <tr>
                                        <td style='background-color: #f1f3f5; font-weight: 600; padding: 12px; border: 1px solid #e1e5ea;'>Company</td>
                                        <td style='padding: 12px; border: 1px solid #e1e5ea;'>{$company}</td>
                                    </tr>
                                    <tr>
                                        <td style='background-color: #f1f3f5; font-weight: 600; padding: 12px; border: 1px solid #e1e5ea;'>Requirement</td>
                                        <td style='padding: 12px; border: 1px solid #e1e5ea;'>{$requirement}</td>
                                    </tr>
                                    <tr>
                                        <td style='background-color: #f1f3f5; font-weight: 600; padding: 12px; border: 1px solid #e1e5ea;'>Budget</td>
                                        <td style='padding: 12px; border: 1px solid #e1e5ea;'>{$budget}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style='margin-top: 30px; font-size: 14px; color: #777777;'>Please follow up with the lead as soon as possible.</p>
                        </div>

                        <!-- Footer -->
                        <div style='background-color: #f0f2f5; text-align: center; padding: 20px; font-size: 12px; color: #888888;'>
                            &copy; " . date('Y') . " RudraTech IT Service. All rights reserved.<br>
                            <span>This message was automatically generated from the RudraTech website inquiry form.</span>
                        </div>
                    </div>
                    ";

        try {
            $mail->send();
            echo "<script>alert('Form submitted successfully.'); window.location.href = '../home.php';</script>";
            exit;
        } catch (Exception $e) {
            error_log("Email Error: " . $mail->ErrorInfo);
            echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.location.href = '../home.php';</script>";
            exit;
        }
    } catch (Exception $e) {
        error_log("SMTP Error: " . $mail->ErrorInfo);
        echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.location.href = '../home.php';</script>";
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>



<body>

    <?php include "include/navbar.php" ?>



    <div class="flex flex-col lg:flex-row w-full h-auto lg:h-screen relative">
        <!-- Left Side - Form -->
        <div class="w-full lg:w-[40%] pb-12 pt-16 flex flex-col justify-start items-center px-6 sm:px-10 md:px-12 lg:px-20 z-10 bg-white bg-opacity-95">
            <h1 class="text-2xl md:text-3xl font-semibold mb-6 text-center lg:text-left">Request a FREE Proposal</h1>
            <form action="/quote-form.php" method="POST" class="w-full max-w-md space-y-4 text-xs sm:text-sm">
                <!-- Name and Phone -->
                <div class="flex flex-col md:flex-row md:space-x-4 w-full space-y-4 md:space-y-0">
                    <div class="w-full">
                        <label class="block text-sm mb-1">Name</label>
                        <input type="text" name="name" required
                            class="w-full px-4 py-2 rounded border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Your full name">
                    </div>
                    <div class="w-full">
                        <label class="block text-sm mb-1">Mobile Number</label>
                        <input type="tel" name="phone" required pattern="[0-9]{10}"
                            title="Enter a valid 10-digit number"
                            class="w-full px-4 py-2 rounded border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="1234567890">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 rounded border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="example@email.com">
                </div>

                <!-- Location and Company -->
                <div class="flex flex-col md:flex-row md:space-x-4 w-full space-y-4 md:space-y-0">
                    <div class="w-full">
                        <label class="block text-sm mb-1">Location</label>
                        <input type="text" name="location"
                            class="w-full px-4 py-2 rounded border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="City, Country">
                    </div>
                    <div class="w-full">
                        <label class="block text-sm mb-1">Company Name</label>
                        <input type="text" name="company"
                            class="w-full px-4 py-2 rounded border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Your Company">
                    </div>
                </div>

                <!-- Requirements -->
                <div>
                    <label class="block text-sm mb-1">Requirements</label>
                    <select name="requirement"
                        class="w-full px-4 py-2 rounded border border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Static Website</option>
                        <option>WordPress Website</option>
                        <option>Dynamic Website</option>
                        <option>E-commerce Website</option>
                        <option>Shopify Website</option>
                        <option>Corporate Website</option>
                        <option>Web Portal</option>
                        <option>Mobile Application</option>
                        <option>Digital Marketing</option>
                        <option>Others</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 transition-all py-2 rounded font-semibold text-white">
                    Get My Custom Quote
                </button>
            </form>
        </div>

        <!-- Background image -->
        <div class="absolute lg:static top-0 right-0 w-full lg:w-[60%] h-56 sm:h-64 md:h-80 lg:h-auto">
            <div class="w-full h-full  lg:rounded-bl-[40%] bg-cover bg-center max-lg:rounded-b-[30%]"
                style="background-image:url(/asset/contactimg.jpg)"></div>
        </div>
    </div>




    <?php include "include/footer.php"; ?>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const phoneInput = this.querySelector('input[name="phone"]');
            const phone = phoneInput.value.trim();
            const phoneError = document.getElementById('phone-error');

            // remove old error
            if (phoneError) phoneError.remove();

            // Validate phone: 10 digits only
            if (!/^[0-9]{10}$/.test(phone)) {
                e.preventDefault();

                const errorMsg = document.createElement('p');
                errorMsg.id = 'phone-error';
                errorMsg.textContent = 'Please enter a valid 10-digit mobile number.';
                errorMsg.style.color = 'red';
                errorMsg.style.fontSize = '12px';
                errorMsg.style.marginTop = '4px';

                phoneInput.insertAdjacentElement('afterend', errorMsg);
                phoneInput.focus();
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector('form').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);

            // 🔹 show loader instantly
            Swal.fire({

                text: 'Please wait while we submit your details.',
                allowOutsideClick: false,
                didOpen: () => Swal.showLoading()
            });

            try {
                const response = await fetch(form.action, {
                    method: form.method,
                    body: formData
                });
                const result = await response.json();

                Swal.close(); // close loader

                if (result.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank You!',
                        text: result.message,
                        confirmButtonColor: '#2563eb'
                    }).then(() => {
                        form.reset();
                        window.location.href = '/';
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: result.message || 'Something went wrong. Please try again.',
                        confirmButtonColor: '#e11d48'
                    });
                }
            } catch (error) {
                Swal.close();
                Swal.fire({


                    text: ' Please check your mobile number.',
                    confirmButtonColor: '#e11d48'
                });
            }
        });
    </script>

</body>

</html>