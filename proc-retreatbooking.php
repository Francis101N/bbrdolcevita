<?php
session_start();
require_once('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<script>
            alert('Invalid access.');
            window.location.href='index.php';
          </script>";
    exit;
}


$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$address = trim($_POST['address']);
$email = trim($_POST['email']);
$city = trim($_POST['city']);
$postcode = isset($_POST['postcode']) ? trim($_POST['postcode']) : '';
$country = trim($_POST['country']);

$skillLevel = isset($_POST['skillLevel']) ? $_POST['skillLevel'] : "Not specified";

$manicure = isset($_POST['manicure']) ? "Yes" : "No";
$pedicure = isset($_POST['pedicure']) ? "Yes" : "No";
$tissue_massage = isset($_POST['tissue-massage']) ? "Yes" : "No";
$facial = isset($_POST['facial']) ? "Yes" : "No";

$fullname = $firstname . " " . $lastname;


if (empty($firstname) || empty($lastname) || empty($email)) {

    echo "<script>
            alert('Please fill all required fields.');
            window.history.back();
          </script>";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "<script>
            alert('Invalid email address.');
            window.history.back();
          </script>";
    exit;
}



$treatments = [];

if ($manicure == "Yes") $treatments[] = "Manicure";
if ($pedicure == "Yes") $treatments[] = "Pedicure";
if ($tissue_massage == "Yes") $treatments[] = "Deep Tissue Massage";
if ($facial == "Yes") $treatments[] = "Facial";

$treatment_list = !empty($treatments) ? implode(", ", $treatments) : "None Selected";


$userSubject = "Retreat Booking Confirmation - BBR Dolce Vita";

$userBody = "
<div style='font-family:Arial,sans-serif;color:#333;'>

<h2 style='color:#1f95d2;'>Hello {$fullname},</h2>

<p>Thank you for securing your place at the <strong>BBR Dolce Vita Retreat</strong>.</p>

<p><strong>Your Booking Details</strong></p>

<p>
<strong>Name:</strong> {$fullname}<br>
<strong>Email:</strong> {$email}<br>
<strong>Address:</strong> {$address}<br>
<strong>City:</strong> {$city}<br>
<strong>Postcode:</strong> {$postcode}<br>
<strong>Country:</strong> {$country}<br>
<strong>Skill Level:</strong> {$skillLevel}<br>
<strong>Additional Treatments:</strong> {$treatment_list}
</p>

<p>
Our team will contact you shortly with more information about the retreat.
</p>

<br>

<p>
We look forward to welcoming you.
</p>

<p><strong>BBR Dolce Vita Team</strong></p>

</div>
";


$adminSubject = "New Retreat Booking from {$fullname}";

$adminBody = "
<div style='font-family:Arial,sans-serif;color:#333;'>

<h2 style='color:#0d6efd;'>New Retreat Booking</h2>

<p><strong>Customer Information</strong></p>

<p>
<strong>Name:</strong> {$fullname}<br>
<strong>Email:</strong> {$email}<br>
<strong>Address:</strong> {$address}<br>
<strong>City:</strong> {$city}<br>
<strong>Postcode:</strong> {$postcode}<br>
<strong>Country:</strong> {$country}
</p>

<p>
<strong>Skill Level:</strong> {$skillLevel}
</p>

<p>
<strong>Additional Treatments:</strong> {$treatment_list}
</p>

</div>
";


$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'mail.bbrdolcevita.net';
$mail->SMTPAuth = true;
$mail->Username = 'info@bbrdolcevita.net';
$mail->Password = 'INFO@bbrdolcevita';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('info@bbrdolcevita.net', 'BBR Dolce Vita Retreat');
$mail->isHTML(true);


/* SEND TO ADMIN */

$mail->addAddress('francisnwankwo1972@gmail.com');
$mail->Subject = $adminSubject;
$mail->Body = $adminBody;
$mail->send();


/* SEND TO USER */

$mail->clearAddresses();
$mail->addAddress($email);
$mail->Subject = $userSubject;
$mail->Body = $userBody;
$mail->send();


echo "<script>
alert('Booking submitted successfully! Please check your email for confirmation.');
window.location.href='index';
</script>";
?>