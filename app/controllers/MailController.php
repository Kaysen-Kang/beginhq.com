<?php

class MailController extends BaseController {
	
	public function send() {

		//basic rule for an email
		$rules = array(
			'name'		=> 'required|min:2',
			'email'	    => 'required|email',
			'content'	=> 'required|min:10'
		);

		$validator = Validator::make(Input::all(), $rules);

		//no good, back to contact
		if ($validator->fails())
		{
			return Redirect::route('contact')->withInput()->withErrors($validator);
		}

		//ready to send
		$data = array(
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'content' => Input::get('content'),
		);

		//put it to the queue
		Mail::send('home.email', $data, function($message) use ($data)
		{
			$message->from($data['email'], $data['name']);
			$message->to('team@beginhq.com', 'Begin* Team');
			$message->subject('Contact Form');
		});

		Notification::error("Thanks for your feedback, we will be contacting you in 2 business days.");
		return Redirect::route('contact');

	}

}