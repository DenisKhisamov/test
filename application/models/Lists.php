<?php

namespace application\models;

use application\core\Model;

class Lists extends Model{
	
	public function getList($id){
		
		
		$params = [
		'id' => $id,
		];
		$result = $this->db->row('SELECT l.*, so.text as doc_types, so1.text as access_right FROM list as l LEFT JOIN select_option as so ON l.doc_type = so.id LEFT JOIN select_option as so1 ON l.access_rights = so1.id Where l.id = :id', $params);
		return $result;
	}
	
}
?>