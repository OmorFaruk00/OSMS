$(document).ready(function(){
	// Signup Code
	$("#signup").on("click", function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var role = $("#role").val();			
		if(name == "" || email == "" || password == ""){
			$("#signin_alert").html("<div class='alert alert-danger mr-5'>Please Fill All The Field</div>");
			setTimeout(function(){ $("#signin_alert").html("");	},2000);
		}else{				
			$.ajax({
				url : 'PHP_FILES/user_all.php',
				type : "POST",
				data : {signup:"1", name:name, email:email, password:password, role:role},					
				success: function(data){
					if(data == "error"){
						$("#signUp_form").trigger("reset");
						$("#signin_alert").html("<div class='alert alert-danger mr-5'>Email Already Exits</div>");
						setTimeout(function(){ $("#signin_alert").html("");	},2000);
					}
					else if(data == "success"){
						$("#signUp_form").trigger("reset");
						$("#signin_alert").html("<div class='alert alert-success mr-5'>Account Created Successfully</div>");
						setTimeout(function(){ $("#signin_alert").html("");	},2000);
					}
				}
			});
		}
	});

	// Login Code 

	$("#login").on("click", function(){
		var email = $("#useremail").val();
		var password = $("#userpassword").val();
		if(email == "" || password == ""){
			$("#login_alert").html("<div class='alert alert-danger mr-5'>Please Fill All The Field</div>");
			setTimeout(function(){ $("#login_alert").html("");	},2000);
		}else{				
			$.ajax({
				url : 'PHP_FILES/user_all.php',
				type : "POST",
				data : {login:"1",email:email, password:password},					
				success: function(data){
					
					if($.trim(data) == "user"){
						$("#signUp_form").trigger("reset");
						$("#login_alert").html('<div class="spinner-border text-success" role="status"></div>');                	
						setTimeout(function(){window.location.href ='user_profile.php'; },1000);
					}
					else if($.trim(data) == "admin"){
						$("#signUp_form").trigger("reset");
						$("#login_alert").html('<div class="spinner-border text-success" role="status"></div>');                	
						setTimeout(function(){window.location.replace('http://localhost/OSMS/Admin/dashboard.php'); },1000);
					}
					else{
						$("#login_form").trigger("reset");
						$("#login_alert").html("<div class='alert alert-danger mr-5'>Email And Password Are Not Match</div>");
						setTimeout(function(){ $("#login_alert").html("");	},2000);
					}
				}				
			});
		}
	});
	// change user password
	
	$("#changeUser_password").on("click", function(){
		var oldpass = $("#oldpass").val();
		var newpass = $("#newpass").val();
		var conpass = $("#conpass").val();
		if(oldpass == '' || newpass == '' || conpass == ''){
			 $("#change_alert").html("<div class='alert alert-danger mr-5'>Please Fill All The Field</div>");
			setTimeout(function(){ $("#change_alert").html("");	},2000);

		}else{
			$.ajax({
			url : 'PHP_FILES/user_all.php',
			type : "POST",
			data: {changepass:"1", oldpass:oldpass, newpass:newpass, conpass:conpass},
			success: function(data){
				console.log(data);
				if($.trim(data) == "success"){
			   	$("#change_alert").html("<div class='alert alert-success mt-3'>Password Change Successfully..</div>");
			   	setTimeout(function(){ $("#change_alert").html("");	},2000);
			   } 			   
			   else if($.trim(data) == "notmatch"){			   		
			   	$("#change_alert").html("<div class='alert alert-danger mt-3'>New Password And Old password Are Not Match? Try Again ..</div>");
			   	setTimeout(function(){ $("#change_alert").html("");	},2000);
			   }
			   else{			   	
			   	$("#change_alert").html("<div class='alert alert-danger mt-3'>Old Password Are Not Match? Try Again ..</div>");
			   	setTimeout(function(){ $("#change_alert").html("");	},2000);
			   }			   
			}
		});

		}
		
	});




$(document).on("click", "#deletebtn", function(){
  var getid = $(this).data("id"); 
  if(confirm("Do you really want to delete this record.. ? ")){  
  $.ajax({
    url : 'PHP_FILES/user_all.php',
    type : 'POST',
    data : {delete:'1', deleteid:getid},
    success : function(data){
           
    }

  });
}
});

});