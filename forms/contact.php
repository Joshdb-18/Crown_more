<?php
if ($_POST) {
	$visitor_name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$email_subject = $_POST['subject'];
	$email_body = ""
	if(isset($_POST['message'])) {
        $visitor_message = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
	$email_body = "</div>";
	$headers = 'MIME-Version: 1.0' . "\r\n"
	.'Content-type: text/html; charset=utf-8' . "\r\n"
	.'From: ' . $visitor_email . "\r\n";
	$recipient = "albertjoshua122@gmail.com";
	if(mail($recipient, $email_body, $headers)) {
		echo "<p> Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
	} else {
		echo '<p>We are sorry but the email did not go through.</p>';
	}
} else {
	echo '<p>Something went wrong</p>';
}
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = 'albertjoshua122@gmail.com';

 // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
   // include( $php_email_form );
  //} else {
   // die( 'Unable to load the "PHP Email Form" Library!');
  //}

 // $contact = new PHP_Email_Form;
 // $contact->ajax = true;

  //$contact->to = $receiving_email_address;
 // $contact->from_name = $_POST['name'];
 // $contact->from_email = $_POST['email'];
 // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  //$contact->add_message( $_POST['name'], 'From');
  //$contact->add_message( $_POST['email'], 'Email');
  //$contact->add_message( $_POST['message'], 'Message', 10);
  //mail($receiving_email_address, $contact->subject, $contact->add_message);
  //echo $contact->send();

?>
