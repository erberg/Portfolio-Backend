<?php
class Api_SendMail_Controller extends Base_Controller {
	public $restful = true;
	
	public function post_index(){
		$mailstuff = new SendMail();
		return ($mailstuff -> inputIsValid());
	}

}
?>