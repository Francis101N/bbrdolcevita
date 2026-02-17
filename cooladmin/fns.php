<?php

// $_SESSION['testing_mode'] = 'yes';

function yesterday()
{
  return date("Y-m-d", strtotime("-1 day", strtotime(today())));
}


function long_date($date)
{
  return date('jS M, Y', strtotime($date));
}

function long_datetime($date)
{
  return date('jS M Y g:i:s A ', strtotime($date));
}

function short_date($date)
{
  return date('d M Y', strtotime($date));
}

function valid_date($date)
{
  $date = str_replace('/', '-', $date);

  return date('Y-m-d', strtotime($date));
}

function mytime()
{
  return date('Y-m-d h:i:s');
}

function now()
{
  return date('U');
}

function test_email()
{
    return 'akerelejohn6@gmail.com';
}

function sender_name()
{
    return 'Gares Place';
}

function organisation()
{
    return 'bbrdolcevita';
}

function host_name()
{
    return 'http://' . $_SERVER['HTTP_HOST'];
}

function sender_email()
{
    return 'domains@aledoy.com';
    // return 'info@garesplace.com';
}

function admin_email()
{
    return 'akerelejohn6@gmail.com';
    // return 'info@garesplace.com';
}

function reply_email()
{
    return 'noreply@' . $_SERVER['HTTP_HOST'];
}

function host()
{
    return 'http://' . $_SERVER['HTTP_HOST'];
}

function root()
{
    return 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);
}

function today()
{
    return date('Y-m-d');
}

function createToken()
{
    $salt = password_hash(random_bytes(16), PASSWORD_BCRYPT);
    return ($salt);
}

function random()
{
    $prefix = 'GARES';
    $randomNumbers = rand(1000, 9999);
    $result = $prefix . $randomNumbers;
    return $result;
}

function send_sms($to, $message)
{

  $msg = str_replace(' ', '+', $message);

  $url = "https://api.ebulksms.com:8080/sendsms?username=lu@aledoy.com&apikey=83c5b4abea17eb254c7531f4dea6543387a638f2&sender=" . organisation() . "&messagetext=$msg&flash=0&recipients=$to";

  $f = @fopen($url, "r");
  $answer = fgets($f, 255);
}

function debitCard($checkIn, $checkOut, $roomType, $noNight, $amount, $email, $firstname, $lastname, $phone)
{
    global $db;
    $reservationNo = random();
    $token = createToken();
    $price = str_replace(',', '', $amount);
    $total = number_format($amount);
   
    $subject = "Confirmation of Room Reservation and Payment - bbrdolcevita";

    $message = "
    Thank you for choosing bbrdolcevita for your upcoming stay! We are delighted to confirm your room reservation and would like to express our appreciation for your prompt payment.<br><br>
    
    Here are the details of your reservation:<br><br>
    
    Reservation Number: $reservationNo<br>

    Check-in Date: ".long_date($checkIn)."<br>
    Check-out Date: ".long_date($checkOut)."<br>
    Room Type: $roomType<br>
    Number of Nights: $noNight<br>
    Total Amount Paid:<b>&#8358;$total</b><br><br>

    Your payment has been successfully processed, and the transaction details are as follows:<br><br>

    Payment Method: Paystack<br>
    Transaction ID: ".$_SESSION['reference']." <br>
    Payment Amount: $total<br>
    Date and Time of Payment: ".today().' '.date('h:i:s')." <br><br>

    Please note that the reservation is subject to our terms and conditions. If you have any special requests or need to make changes to your reservation, please contact our reservations team at +234 803 439 9050 as soon as possible.<br><br>

    Upon your arrival, our dedicated staff will be ready to ensure you have a comfortable and enjoyable stay at bbrdolcevita. If you have any further questions or concerns, feel free to reach out to us via email or phone.<br><br>

    We look forward to welcoming you to bbrdolcevita and hope you have a pleasant and memorable stay with us.<br><br>

    Safe travels!
  
    ";

    $query = (mysqli_query($db, "insert into bookings set firstname =  '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', checkIn = '$checkIn', checkOut = '$checkOut', reserveNo = '$reservationNo', roomType = '$roomType', noNight = '$noNight', price = '$price', paymentType = 'Paystack', dateCreated = '" . today() . "', token = '$token', roomID = '$roomType', status = 'Confirmed', reference = '".$_SESSION['reference']."'   "));

    send_email($email, $firstname, organisation(), $subject, $message);

    send_email(admin_email(), 'Admin', organisation(), 'A reservation was made', 'Log in to the  dashboard to see reservation details');

    // send_sms(admin_email(), 'A reservation was made, log in to the  dashboard to see reservation details');
}

function bankTransfer($checkIn, $checkOut, $roomType, $noNight, $amount, $email, $firstname, $lastname, $phone)
{
    global $db;
    $reservationNo = random();
    $token = createToken();
    $price = str_replace(',', '', $amount);
    $total = number_format($amount);
    $subject = "Confirmation of Room Reservation and Payment - bbrdolcevita";

    $message = "
    Thank you for choosing bbrdolcevita for your upcoming stay! We are delighted to confirm your room reservation.<br><br>

    <span style='color: red;'>If your payments is not confirmed within the next 24 hours, your resevation will be cancelled</span><br><br>

    Here are the details of your reservation:<br><br>
    
    Reservation Number: $reservationNo<br>

    Check-in Date: ".long_date($checkIn)."<br>
    Check-out Date:  ".long_date($checkOut)."<br>
    Room Type: $roomType<br>
    Number of Nights: $noNight<br>
    Total Amount Paid: <b>&#8358;$total</b><br><br>
   
    Please ensure you make payments to <br>
    GTB 20383839839 bbrdolcevita<br><br>

    Please note that the reservation is subject to our terms and conditions. If your payments is not confirmed within the next 24 hours, your resevation will be cancelled<br><br>

    Upon your arrival, our dedicated staff will be ready to ensure you have a comfortable and enjoyable stay at bbrdolcevita. If you have any further questions or concerns, feel free to reach out to us via email or phone.<br><br>

    We look forward to welcoming you to bbrdolcevita and hope you have a pleasant and memorable stay with us.

    Safe travels!
    ";

    $query = (mysqli_query($db, "insert into bookings set firstname =  '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', checkIn = '$checkIn', checkOut = '$checkOut', reserveNo = '$reservationNo', roomType = '$roomType', noNight = '$noNight', price = '$price', paymentType = 'Bank Transfer', dateCreated = '" . today() . "', token = '$token', roomID = '$roomType', status = 'Pending'   "));

    send_email($email, $firstname, organisation(), $subject, $message);

    send_email(admin_email(), 'Admin', organisation(), 'A reservation was made', 'Log in to the  dashboard to see reservation details');
}

function send_email($to, $name, $fromName, $subject, $message, $file = 'nofile')
{
    // Mail Template
    $mailcontent  = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:500,700,400,300" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
</head>

<body style="font-family: Calibri;">
<div style="width:100%; background-color:#FFF; padding:20px;">
	<div style="width:100%; margin:auto; padding:10px; background:#FFFFFF;">
    	 <div style="clear:both"></div>
         
         	<div id="white_area" style="background-color:#FFFFFF; ">
			<div style="font-size:16px; color:#010E42; padding:10px 0px;">
            <img src="' . root() . '/dist/images/logo.png">
			<div>
			<div style="margin-bottom:15px;" id="username">
            
            
				<p>Hello ' . $name . ',</p>
			</div>
			</div>
			
			<div style="font-size:16px;"> <p></p>' . $message . '
			 
			</div>
			
			<br>
            Best Regards,<br><br>
            The Manager<br>
            ' . organisation() . '<br>
            www.garesplacehotel.com

		   </div>
       	   </div><!-- White area ends here -->
    <div style="color:#FFF; margin-top:20px; margin-bottom:20px;">
    	<div style="text-align:center; font-size:36px;"></div>
    </div>

    <div style="clear:both;"></div>
 
    </div>
</div>
</body>
</html>';


    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Port = 2525;
    $mail->SMTPAuth = true;
    //sendgrid
    $mail->Username = 'domains@aledoy.com';
    $mail->Password = 'ADBA19CD382F5E991BCA2F02CA5F461D68D4';  //yahoo app password for noreply email 
    $mail->Host = 'smtp.elasticemail.com';
    $mail->SMTPSecure = 'tls';
    $mail->From = sender_email();
    $mail->FromName = $fromName;
    $mail->AddAddress($to);  
        if (
        $_SESSION['testing_mode'] == 'yes'
    ) {
        $mail->AddAddress(test_email());
    } else {
        $mail->AddAddress($to);
    }

    //  $mail->MsgHTML($body);
    $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
    $mail->Body    = $mailcontent;
    $mail->Subject = $subject;
    $mail->IsHTML(true);
    $mail->Send();

    return $mailcontent;
}

function check_extension($filename)
{
    if ($filename) {
        $file = explode('.', $filename);
        $file2 = array_reverse($file);

        $ext = strtolower($file2[0]);

        if ($ext == 'jpg' || $ext == 'png' || $ext == 'pdf' || $ext == 'jpeg') {
            return 'valid';
        } else {
            return 'invalid';
        }
    }
}