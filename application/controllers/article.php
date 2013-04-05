<?php
class Article_Controller extends Base_Controller{
	public $restful = true;

	public function get_index($id=null) {
		echo "get " . $id;
	}

	public function post_index(){
		echo "post";
	}

	public function put_index(){
		echo "put";
	}

	public function delete_index($id=null) {
		echo "delete " . $id;
	}
}
?>