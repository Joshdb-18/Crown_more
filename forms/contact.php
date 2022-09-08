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
	mail($recipient, $email_body, $headers)
} else {
	echo '<p>Something went wrong</p>';
}

?>
