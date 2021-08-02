<?php
	require_once("/home/remotebi/public_html/member/smtp/src/PHPMailer.php");
	require_once("/home/remotebi/public_html/member/smtp/src/SMTP.php");

	function kirimEmail($paramNamaPenerima,$emailpengirim,$namapengirim,$emailpenerima,$judulemail,$konten){

		$mail = new PHPMailer\PHPMailer\PHPMailer();
		// $mail->SMTPDebug = 3;                               
		$namaPenerima='';
		if (!empty($paramNamaPenerima)) {
			$namaPenerima = $_POST['namaPenerima'];
		}

		$mail->isSMTP();                                   
		$mail->Host = 'mail.remotebisnis.com';
		$mail->SMTPAuth = true;
		$mail->Username = $emailpengirim;
		$mail->Password = 'Nckh*0318#';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;       

		$mail->From = $emailpengirim;
		$mail->FromName = $namapengirim;
		
		$mail->addAddress($emailpenerima, $namaPenerima);
		$mail->isHTML(true);
		$mail->Subject = $judulemail;
		$mail->Body = $konten;
		// $mail->AltBody = "This is the plain text version of the email content";

		if(!$mail->send()) {
		    echo "Opps, terdapat kesalahan, mohon hubungi admain Rebi !";
		    // echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}