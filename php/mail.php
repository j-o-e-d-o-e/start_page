<?php
	if(!isset($_GET["subject"])){
?>
<div id="modal">
	<div class="modal_content">
		<div class="modal_header">
			<span id="x">&times;</span>
			<h2>mailto: joedoe</h2>
		</div>
		<div class="modal_body">
			<form id="modal_form" method="get" enctype="text/plain" onsubmit="return false">
				<br>
				<input type="text" id="subject" placeholder="subject*"><br>
				<br>
				<textarea id="message" placeholder="message*"></textarea><br>
				<br>
				<input type="email" id = "email" placeholder="your email address*"><br><br>
				<input id="send" type="submit" value="send">
			</form>
			<div id="modal_note"></div>
		</div>
	</div>
</div>
<?php
	}else {
		$subject = "MAIL FROM JOEDOE.NET: " . htmlspecialchars($_GET["subject"]);
		$message = htmlspecialchars($_GET["message"]);
		$email = htmlspecialchars($_GET["email"]);
		$subject = $subject . " (by " . $email . ")";
		$headers = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=utf-8";
		$headers[] = "From: {$email}";
		//$header = "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n" . "X-Mailer: PHP/" . phpversion();
		mail("d_joe@gmx.net", $subject, $message, implode("\r\n",$headers));
	}
?>