<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modal_db_connect extends CI_Controller {               
	function __construct(){
		parent::__construct();
		$this->load->database(); // DB 연결                     
		$this->load->model("Modal_db_connect_m"); // Modal_db_connect_m 연결    
	}
	public function index()                             
	{
		$data['db_test'] = $this->Modal_db_connect_m->get(); // 테이블내용을 배열로 저장
		$this->load->view("Modal_db_connect_view",$data); 
        // $data 배열을 Modal_db_connect_view 과 함께 전달
	}	
	public function select(){ 
        if(isset($_POST["employee_id"])) // employee_id변수에 값이 있는 경우
        {  
            $output = '';  
            $connect = mysqli_connect("<DB IP / localhost>", "<DB id>", "<DB password>", "<DB name>"); // DB 연결
            $query = "SELECT * FROM db_conn WHERE no = '".$_POST["employee_id"]."'"; 
            // 해당 테이블에  안에 employee_id와 값이 같은 행을 가져오는 쿼리
            $result = mysqli_query($connect, $query); // 쿼리 실행
            $output .= '';  
                while($row = mysqli_fetch_array($result)) // $result의 column을 반환
                {  
                    $output .= '  
                        <div>
                            HTML 코드
                            .$row["table column name"].				
                        </div>
                    ';  
                }  
            $output .= '';  
            echo $output;  
        }  		
    }
}	
?>
