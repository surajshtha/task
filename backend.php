<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
	 	.error {
	 		color: red;
	 	}
	 	body {
	 		background: #5CDB95;
	 	}
	 	section {
	 		background: #8EE4AF;
	 	}
	 	input[type=radio] {
		    border: 0px;
		    width: 50%;
		    height: 1.5em;
		}
		input[type=checkbox] {
		    border: 0px;
		    width: 50%;
		    height: 1.5em;
		}

	 </style>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
	<section class="content">
	 	<div class="container-fluid">
	 		<div class="block-header">
	 			<h2>Create Form</h2>
	 		</div>
	 	</div>

		<form role="form" action="#" method="post" method="post" class="form-horizontal">
	 		<div style="margin-bottom:4px; border:1px #CCC solid; padding:10px">
	 			<div class="row clearfix">
		 			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
		 				<label for="name">Name *</label> 
		 			</div>
		 			<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
		 				<div class="form-group">
		 					<div class="form-line" id="name_req">
		 						<input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Name"/>
		 						<!-- Must be required and at least 5 characters -->
		 					</div>
		 				</div>
		 			</div>
		 		</div>
	 			<div class="row clearfix">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
	 					<label for="title">Email *</label>
	 				</div>
	 				<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
	 					<div class="form-group">
	 						<div class="form-line" id="email_req">
	 							<input type="text" class="form-control required" name="email" id="email" placeholder="Enter your Email"/>
	 							<!-- Must be required and invalid email format -->
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="row clearfix">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
	 					<div><label for="title">Number *</label>
	 					</div>
	 				</div>
	 				<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
	 					<div class="form-group">
	 						<div class="form-line" id="number_req">
	 							<input type="text" class="form-control required" name="number" id="number" placeholder="Enter your Number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
	 							<!-- Must be required and numeric -->
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="row clearfix">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
	 					<div><label for="title">Gender</label>
	 					</div>
	 				</div>
	 				<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
	 					<div class="form-line">
	 						<div>
	 							<input type="radio" class="form-control" name="gender" id="male" value="male">Male
								<input type="radio" class="form-control" name="gender" id="female" value="female">Female
								<input type="radio" class="form-control" name="gender" id="others" value="others">Others
	 							<!-- Must be Male/Female/Others -->
	 						</div>
	 					</div>
	 				</div>
	 			</div>	
	 			<div class="row clearfix">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
	 					<div><label for="title">Hobbies</label>
	 					</div>
	 				</div>
	 				<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
	 					<div class="form-line">
	 						<div>
	 							<input type="checkbox" class="form-control" name="hobbies" id="reading" value="reading">Reading
								<input type="checkbox" class="form-control" name="hobbies" id="travelling" value="traveling">Travelling
								<input type="checkbox" class="form-control" name="hobbies" id="listening" value="Listening">Listening
	 							<!-- Hobbies (Checkbox) eg. Reading, Traveling, Listening to music, etc. -->
	 						</div>
	 					</div>
	 				</div>
	 			</div>				
	 		</div>
	 		<div class="modal-footer">
	 			<button type="button" class="btn btn-primary" onclick="validation()" >Submit</button>
	 		</div>
 		</form>
 	</section>
</body>
<script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
<script type="text/javascript">
	// Form validation
	function validation() {
		clear();
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var number = document.getElementById("number").value;
		var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

		if (name === '') { // check if name is empty
			document.getElementById('name_req').innerHTML += '<span class="error">Please enter a name</span>';
			// return false;
		} else if (name.length < 5) { // check if name is less than 5 characters long
			document.getElementById('name_req').innerHTML += '<span class="error">Name must be at least 5 characters</span>';
		}
		if (email === '') { // check if email is empty
			document.getElementById('email_req').innerHTML += '<span class="error">Please enter email</span>';
		} else if (!(email).match(emailReg)) { // check if email format is not valid
			document.getElementById('email_req').innerHTML += '<span class="error">Please enter valid email</span>';
		}
		if (number === '') { // check if number field is empty
			document.getElementById('number_req').innerHTML += '<span class="error">Please enter a number</span>';
		}
	}
	// clear error message
	function clear() {
        $(".error").remove();
    }
</script>
</html>