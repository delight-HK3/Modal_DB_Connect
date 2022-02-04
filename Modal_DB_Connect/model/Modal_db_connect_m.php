<?
    class Modal_db_connect_m extends CI_Model     // 모델 클래스 선언
    {
        public function get(){
			$sql="select * <table name>";   
			return $this->db->query($sql)->result();
		}
    }
?>
