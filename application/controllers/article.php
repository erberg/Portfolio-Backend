<?php
class Article_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index($id = null) {
		if(is_null($id)) {
			$allArticles=Article::all();
			return BaseModel::allToJson($allArticles);
		} else {
			$article = Article::find($id);
			return $article->toJson();
		}
	}

	public function post_index(){
		$article = Input::json();
		$dbArticle = new Article();
		$dbArticle -> title=$article -> title;
		$dbArticle -> subtitle=$article -> subtitle;
		$dbArticle -> img_location=$article -> img_location;
		$dbArticle -> content=$article -> content;
		return $dbArticle -> toJson();
	}

	public function put_index(){
		$article = Input::json();
		$dbArticle = Article::find($article->id);
		$dbArticle -> title=$article -> title;
		$dbArticle -> subtitle=$article -> subtitle;
		$dbArticle -> img_location=$article -> img_location;
		$dbArticle -> content=$article -> content;
		$dbArticle -> save();
		return $dbArticle->toJson();
	}

	public function delete_index($id=null) {
		$dbArticle = Article::find($id);
		$dbArticle -> delete();
	}
}
?>