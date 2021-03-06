<?php
class Api_Articles_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index($id = null) {
		
		if(is_null($id)) {
			$allArticles=Api_Articles_Controller::all();
			return BaseModel::allToJson($allArticles);
		} else {
			$articles = Api_Articles_Controller::find($id);
			return $articles->toJson();
		}
	
	}

	public function post_index(){
		$articles = Input::json();
		$dbArticles = new Article();
		$dbArticles -> title=$articles -> title;
		$dbArticles -> subtitle=$articles -> subtitle;
		$dbArticles -> img_location=$articles -> img_location;
		$dbArticles -> content=$articles -> content;
		return $dbArticles -> toJson();
	}

	public function put_index(){
		$articles = Input::json();
		$dbArticle = Api_Articles_Controller::find($articles->id);
		$dbArticle -> title=$articles -> title;
		$dbArticle -> subtitle=$articles -> subtitle;
		$dbArticle -> img_location=$articles -> img_location;
		$dbArticle -> content=$articles -> content;
		$dbArticle -> save();
		return $dbArticles->toJson();
	}

	
	public function delete_index($id=null) {
		$dbArticles = Api_Articles_Controller::find($id);
		$dbArticles -> delete();
	}
	
}
?>