<?php

class MailController extends BaseController {
	
	public function sendMail() {

		$user_name = $_POST['name'];
		$user_email = $_POST['email'];
		$user_comments = $_POST['comments'];

		$data = array(
			'detail'	=> 'Thank you for contacting us. We will be in touch with you very soon.'
		);

		Mail::send('emails.welcome', $data, function($message) use ($user)
		{
			$message->from($user_email, $user_name);
			$message->to('service@beginhq.com', 'beginHQ')->subject('Contact Us');
		});
	}

	public function getSend() {
		return View::make('emails.send');
	}
}