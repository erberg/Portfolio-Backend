<?php
class BaseModel extends Eloquent {
public function toJson() {
	return json_encode($this->to_array(),JSON_UNESCAPED_SLASHES);
}

public static function alltoJson($array) {
	$temp=array();
	foreach($array as $t) {
		$temp[]=$t->to_array();
	}
	return json_encode($temp,JSON_UNESCAPED_SLASHES);
}

}
?>