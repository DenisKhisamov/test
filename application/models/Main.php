<?php

namespace application\models;

use application\core\Model;

class Main extends Model{
	
	public function getList(){
		$result['input'] = $this->db->row('SELECT ff.*, fft.type FROM form_fields as ff LEFT JOIN form_field_type as fft ON fft.id = ff.type_id Order by ff.id ASC'); 
		$result['select_value'] = $this->db->row('SELECT * FROM select_option'); 
		//debug($result);
		return $result;
	}
	public function addPerson(){
		
		$fio = $_POST['fio'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$years = stristr($date, '-', true);
		$date = stristr($date, '-');
		$date = substr($date, 1);
		$month = stristr($date, '-', true);
		$date = stristr($date, '-');
		$date = substr($date, 1);
		$day = stristr($date, 'T', true);

		$unix_date = mktime($month, $day, $years);
		$pol = $_POST['pol'];
		$doc_type = $_POST['doc_type'];
		$doc_numb = $_POST['doc_numb'];
		$access_rights = $_POST['access_rights'];
		
		$params = [
		'fio' => $fio,
		'email' => $email,
		'date' => $unix_date,
		'pol' => $pol,
		'doc_type' => $doc_type,
		'doc_numb' => $doc_numb,
		'access_rights' => $access_rights,
		];
		$me = $this->db->query_ins('INSERT INTO list (fio,email,date,pol,doc_type,doc_numb,access_rights) VALUES (:fio,:email,:date,:pol,:doc_type,:doc_numb,:access_rights)', $params);
		return $me;
	}
}