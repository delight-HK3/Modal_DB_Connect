<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modal_db_connect_m extends CI_Model{
    public function get(){
		$sql="select * <table name>"; // 테이블 전체의 내용을 가져오는 쿼리 실행   
		return $this->db->query($sql)->result(); // 결과를 리턴
	}
}
?>