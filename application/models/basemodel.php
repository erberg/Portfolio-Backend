<?php
class BaseModel extends Eloquent {

public function toJson() {
	$start=Input::get("start","1");
	return json_encode($this->to_array(),JSON_UNESCAPED_SLASHES) . " " . $start;
}

public static function alltoJson($array) {
	$start=Input::get("start","1");
	$temp=array();
	foreach($array as $t) {
		$temp[]=$t->to_array();
	}
	return json_encode($temp,JSON_UNESCAPED_SLASHES) . " " . $start;
}

}
?>