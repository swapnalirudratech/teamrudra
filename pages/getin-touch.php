<?php
$page_title = "getin-touch";
?>





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
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $projectdetails = htmlspecialchars($_POST['projectdetails'] ?? '');


    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rudratech.karthik1@gmail.com';
        $mail->Password = 'wcco uwbe zrtp eszg';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // $mail->addEmbeddedImage('../asset/logo.png', 'logo_cid');

        $mail->setFrom('rudratech.karthik1@gmail.com', 'rudratech');
        $mail->addAddress('business@teamrudra.com', 'rudratech');
        $mail->Subject = 'RUDRATECH IT SERVICES';
        $mail->isHTML(true);
        $mail->Body = "
                <div style='max-width: 650px; margin: 0 auto; font-family: \"Segoe UI\", sans-serif; background-color: #f4f6f8; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 14px rgba(0,0,0,0.1);'>

                    <!-- Header -->
                    <div style='background: linear-gradient(135deg, #0d6efd, #0a58ca); padding: 30px; text-align: center;'>
                    
                        <h2 style='color: #ffffff; margin: 0; font-size: 20px;'>New Inquiry Notification</h2>
                    </div>

                    <!-- Main Content -->
                    <div style='background-color: #ffffff; padding: 30px;'>
                        <p style='font-size: 16px; color: #333333; margin: 0 0 15px;'>Dear Team,</p>
                        <p style='font-size: 15px; color: #555555;'>A new inquiry has been submitted through the RudraTech IT Service website. Below are the details:</p>

                        <table style='width: 100%; margin-top: 20px; border-collapse: collapse; font-size: 15px;'>
                            <tbody>
                                <tr>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0; background-color: #f1f3f5; font-weight: 600; width: 30%;'>Name</td>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0;'>{$name}</td>
                                </tr>
                                <tr>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0; background-color: #f1f3f5; font-weight: 600;'>Phone</td>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0;'>{$phone}</td>
                                </tr>
                                <tr>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0; background-color: #f1f3f5; font-weight: 600;'>Email</td>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0;'>{$email}</td>
                                </tr>
                                <tr>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0; background-color: #f1f3f5; font-weight: 600;'>Project Details</td>
                                    <td style='padding: 12px; border: 1px solid #e0e0e0;'>{$projectdetails}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p style='margin-top: 30px; font-size: 14px; color: #666666;'>Please reach out to the prospect as soon as possible to follow up on their request.</p>
                    </div>

                    <!-- Footer -->
                    <div style='background-color: #f0f0f0; text-align: center; padding: 20px; font-size: 13px; color: #888888;'>
                        &copy; " . date('Y') . " <strong>RudraTech IT Service</strong>. All rights reserved.<br>
                        <span style='font-size: 12px;'>This message was automatically generated from the RudraTech IT Service website inquiry form.</span>
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

    <style>
        .custom-pink-circle {
            background-color: #FFD6D6;
            border-radius: 50%;
        }

        .custom-green-circle {
            background-color: #2E8B57;
            border-radius: 50%;
        }

        .status-bubble {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="container mx-auto   py-16  max-md:py-8">
        <div class="overflow-hidden w-[90%] mx-auto">


            <div class="w-full flex gap-20 max-lg:flex-col max-lg:gap-8">
                <!-- Left Section -->
                <div class="w-1/2 max-lg:w-full">
                    <h2 class="text-5xl max-md:text-3xl max-lg:text-4xl font-bold mb-6 max-md:mb-3">Get in Touch!</h2>
                    <p class="text-black mb-10 text-xl max-md:text-base max-lg:w-3/4 max-md:w-full ">
                        Have questions or need IT assistance? Connect with our team — we’ll respond promptly to support your needs.
                    </p>

                    <div class="space-y-5 font-sans text-gray-800">

                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-clock text-blue-600"></i>
                            <p class="font-normal">We’re open Mon–Sun, 24 hours </p>
                        </div>

                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-location-dot text-blue-600"></i>
                            <p class="font-normal">RudraTech IT Services, Office No. 331, Globe Business Park, Ambernath (W),
                                Thane – 421501, Maharashtra, India</p>
                        </div>

                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-blue-600"></i>
                            <p class="font-normal">+91-720 834 4434 </p>
                        </div>

                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-blue-600"></i>
                            <p class="font-normal">business@teamrudra.com</p>
                        </div>
                    </div>
                </div>


                <div class="w-1/2 max-lg:w-full mx-auto p-6 border border-gray-200 shadow-lg rounded-lg bg-white text-sm">
                    <form action="/pages/send-contact-form.php" method="POST" class="space-y-3">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <input type="text" name="first_name" placeholder="First Name*" required class="p-2 border rounded w-full" />
                            <input type="text" name="last_name" placeholder="Last Name*" required class="p-2 border rounded w-full" />
                            <input type="text" name="company" placeholder="Company/Organization*" required class="p-2 border rounded w-full" />
                            <input type="url" name="website" placeholder="Website" class="p-2 border rounded w-full" />
                            <input type="email" name="email" placeholder="Email Address*" required class="p-2 border rounded w-full" />
                            <input type="tel" name="phone" placeholder="+91 81234 56789" class="p-2 border rounded w-full" />

                            <input type="text" name="referral" placeholder="How did you hear about us?" class="p-2 border rounded w-full col-span-2" />
                        </div>

                        <!-- <div>
                            <label class="block font-medium mb-1">Services*</label>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-x-2 gap-y-1 max-h-32 overflow-y-auto border rounded p-2 text-xs">
                                <label><input type="checkbox" name="services[]" value="SEO" class="mr-1">SEO</label>
                                <label><input type="checkbox" name="services[]" value="PPC" class="mr-1">PPC</label>
                                <label><input type="checkbox" name="services[]" value="Social Media Organic" class="mr-1">Social Organic</label>
                                <label><input type="checkbox" name="services[]" value="Social Media Ads" class="mr-1">Social Ads</label>
                                <label><input type="checkbox" name="services[]" value="Web Design" class="mr-1">Web Design</label>
                                <label><input type="checkbox" name="services[]" value="CRO" class="mr-1">CRO</label>
                                <label><input type="checkbox" name="services[]" value="Reputation" class="mr-1">Reputation</label>
                                <label><input type="checkbox" name="services[]" value="Local SEO" class="mr-1">Local SEO</label>
                                <label><input type="checkbox" name="services[]" value="Content Writing" class="mr-1">Content Writing</label>
                                <label><input type="checkbox" name="services[]" value="Photography" class="mr-1">Photo/Video</label>
                                <label><input type="checkbox" name="services[]" value="Web Hosting" class="mr-1">Web Hosting</label>
                                <label><input type="checkbox" name="services[]" value="Amazon Marketing" class="mr-1">Amazon Marketing</label>
                                <label><input type="checkbox" name="services[]" value="Email Marketing" class="mr-1">Email Marketing</label>
                                <label><input type="checkbox" name="services[]" value="ADA Compliance" class="mr-1">ADA Compliance</label>
                                <label><input type="checkbox" name="services[]" value="Link Building" class="mr-1">Link Building</label>
                            </div>
                        </div> -->
                        <div>
                            <label class="block font-medium mb-1">Which service do you want? *</label>
                            <textarea
                                name="services[]"
                                rows="3"
                                placeholder="e.g. SEO, PPC, Web Design"
                                class="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required></textarea>
                        </div>



                        <textarea name="business_description" rows="3" placeholder="Tell us about your business" class="w-full p-2 border rounded"></textarea>

                        <div class="flex items-start space-x-2">
                            <input type="checkbox" name="consent" id="consent" class="mt-1" />
                            <label for="consent">I consent to receive notifications and promotional messages</label>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white py-2 rounded uppercase text-xs tracking-wide">Submit</button>

                        <p class="text-center text-xs mt-3">
                            In a hurry? <a href="tel:+918123456789" class="text-blue-600 font-semibold">Call us at +91-720 834 4434</a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </div>




    <?php include "include/footer.php"; ?>
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