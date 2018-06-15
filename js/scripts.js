var wallModule = (function() { 

	var create_event = function() { 
	
		$("#create_event").ajaxForm({
			dataType: 'json',
			forceSync: true,
			beforeSubmit: loading,
			success: success_status
		});      

		function loading() {   

			return true; 
		}       

		function success_status(data) {    

			if(data.status) { 
				console.log("added");
			} else { 
				console.log("failed");
			}     

			angular.element($("#whole_wrapper")).scope().getAllWalls();       
			$("#create_event").trigger("reset");
		}          
	};      

	var create_event_comment = function() { 
		
		$(document).on("submit", ".create_event_comment", function(e){ 
			
			var url = $(this).attr("action");   
			var comment = $(this).find('.comment').val();      
			var event_id = $(this).find('.event_id').val();   
		
			var formData = $(this).serialize();   

			$.ajax({
			    type: 'POST',
			    url: $(this).attr('action'),
			    data: formData,
			    dataType: 'json'
			}).done(function(data){   

				if(data.status) {  
					console.log("added comment");
				} else { 
					console.log("Failed adding comment");
				}  

				angular.element($("#whole_wrapper")).scope().getAllWalls();    
			});   

			
	
			e.preventDefault();
		});   
	};  

	var delete_event_comment = function() {   

		$(document).on('click', '.delete_event_link', function(e){ 
			var event_link = $(this).attr('href'); 
			$.get(event_link, function(data){
				var datas = eval('msg=' + data);
				if(datas.status) { 
					console.log("deleted");
				} else { 
					console.log("Failed delete");
				}  

				angular.element($("#whole_wrapper")).scope().getAllWalls();    
			});   

			e.preventDefault();
		});      

		$(document).on('click', '.delete_event_comment_link', function(e){ 
			var event_link = $(this).attr('href'); 
			$.get(event_link, function(data){
				var datas = eval('msg=' + data);
				if(datas.status) { 
					console.log("deleted");
				} else { 
					console.log("Failed delete");
				}  

				angular.element($("#whole_wrapper")).scope().getAllWalls();    
			});   

			e.preventDefault();
		});   
	};      

	var create_project = function() { 
	
		$("#create_project").ajaxForm({
			dataType: 'json',
			forceSync: true,
			beforeSubmit: loading,
			success: success_status
		});      

		function loading() {   
			//console.log("Trying to submit");
			return true; 
		}       

		function success_status(data) {    

			if(data.status) { 
				console.log("added project");
			} else { 
				console.log("failed project");
			}     

			angular.element($("#whole_wrapper")).scope().getAllWalls();       
			$("#create_project").trigger("reset");
		}          
	};   

	var create_project_comment = function() { 
		
		$(document).on("submit", ".create_project_comment", function(e){ 
			
			var url = $(this).attr("action");   
			var comment = $(this).find('.comment').val();      
			var event_id = $(this).find('.project_id').val();   
		
			var formData = $(this).serialize();   

			$.ajax({
			    type: 'POST',
			    url: $(this).attr('action'),
			    data: formData,
			    dataType: 'json'
			}).done(function(data){   

				if(data.status) {  
					console.log("added project comment");
				} else { 
					console.log("Failed adding project comment");
				}  

				angular.element($("#whole_wrapper")).scope().getAllWalls();    
			});   

			
	
			e.preventDefault();
		});   
	};    

	var delete_project_comment = function() {   

		$(document).on('click', '.delete_project_link', function(e){ 
			var event_link = $(this).attr('href'); 
			$.get(event_link, function(data){
				var datas = eval('msg=' + data);
				if(datas.status) { 
					console.log("deleted");
				} else { 
					console.log("Failed delete");
				}  

				angular.element($("#whole_wrapper")).scope().getAllWalls();    
			});   

			e.preventDefault();
		});      

		$(document).on('click', '.delete_project_comment_link', function(e){ 
			var event_link = $(this).attr('href'); 
			$.get(event_link, function(data){
				var datas = eval('msg=' + data);
				if(datas.status) { 
					console.log("deleted");
				} else { 
					console.log("Failed delete");
				}  

				angular.element($("#whole_wrapper")).scope().getAllWalls();    
			});   

			e.preventDefault();
		});      


	};

	return { 
		create_event: 			create_event, 
		create_event_comment: 	create_event_comment, 
		delete_event_comment: 	delete_event_comment, 
		create_project: 		create_project, 
		create_project_comment: create_project_comment, 
		delete_project_comment: delete_project_comment
	}

})()   

wallModule.create_event();     
wallModule.create_event_comment();   
wallModule.delete_event_comment();   
wallModule.create_project();   
wallModule.create_project_comment();  
wallModule.delete_project_comment();







