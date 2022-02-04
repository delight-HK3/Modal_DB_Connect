<?
	class Modal_db_connect extends CI_Controller {               
		function __construct(){
			parent::__construct();
			$this->load->database();                     
			$this->load->model("Modal_db_connect_m");    
		}
		public function index()                             
		{
			$data['room'] = $this->Modal_db_connect_m->get();
			$this->load->view("Modal_db_connect_view",$data);
		}
		
		public function select(){
            if(isset($_POST["employee_id"]))  
            {  
                $output = '';  
                $connect = mysqli_connect("<DB IP / localhost>", "<DB id>", "<DB password>", "<DB name>");  
                $query = "SELECT * FROM <추출할 테이블> WHERE <기본키 컬럼 이름> = '".$_POST["employee_id"]."'";  
                $result = mysqli_query($connect, $query);  
                $output .= '  
                        HTML 코드
                        ';  
                    while($row = mysqli_fetch_array($result))  
                    {  
                        $output .= '  
                            <div>HTML 코드
                                .$row["컬럼 이름"].				
                            </div>
                        ';  
                    }  
                    $output .= '  
                        HTML 코드	   
                    ';  
                echo $output;  
            }  		
        }
	}	
?>
