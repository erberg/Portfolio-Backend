<?php
class SendMail extends BaseModel {

	public static $mailTo = "berg.ericr@gmail.com";
    
    public function inputIsValid(){
    	$validationRules=array(
    		'From' => 'required|email',
    		'Message' => 'required',
    		'Subject' => 'required'
    		);

    	$input=Input::json();

    	$headers = 	'From: ' . "contactform@ericrberg.com" . "\r\n" .
    				'Reply-To: ' . $input->From . "\r\n" .
    				'X-Mailer: PHP/' . phpversion();


    	$validation = Validator::make($input, $validationRules);
	
		if ($validation -> fails()){ return json_encode($validation -> errors -> all()); }
		else {return mail(self::$mailTo, $input->Subject, $input->Message, $headers);}
    }
}
?>