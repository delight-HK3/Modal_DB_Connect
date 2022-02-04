$(document).on('click', '.view_data', function(){  
   var employee_id = $(this).attr("id");  
   if(employee_id != '')  
   {  
		$.ajax({  
			 url:"/Modal_db_connect/select",  
			 method:"POST",  
			 data:{employee_id:employee_id},  
			 success:function(data){  
				  $('#employee_detail').html(data);  
				  $('#dataModal').modal('show');  
			 }  
		});  
   }            
});