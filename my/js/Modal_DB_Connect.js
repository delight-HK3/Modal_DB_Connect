$(document).on('click', '.view_data', function(){ // 클래스가 view_data인 태그를 클릭한 경우
   var employee_id = $(this).attr("id"); // id에 있는 테이블에서 가져온 값을 가져온다.  
   if(employee_id != '') // 값이 있는 경우
   {  
		$.ajax({  
			url:"/Modal_db_connect/select",
			// Modal_db_connect의 select함수로 이동  
			method:"POST",  
			data:{
				 employee_id:employee_id 
				 // employee_id(view의 아이디 값)을 변수 employee_id에 저장
			},  
			success:function(data){ // 데이터를 가져오는 것이 성공한 경우
				$('#employee_detail').html(data); // 태그 id가 employee_detail인 태그에 출력
				$('#dataModal').modal('show'); // modal창 출력
			}  
		});  
   }            
});