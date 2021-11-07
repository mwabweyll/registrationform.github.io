<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clotho Nona</title>

	<!-- bootsrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- bootsrap 5 Js bundle CDN-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div>
	<?php
	?>
</div>
<div class =  "wrapper">
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form.</p>
					<hr class="mb-3">
					<label for="user_ID"><b>ID Number</b></label>
					<input class="form-control" id="user_ID" type="text" name="user_ID" required>

					<label for="fname"><b>First Name</b></label>
					<input class="form-control" id="fname" type="text" name="fname" required>

					<label for="mname"><b>Middle Name</b></label>
					<input class="form-control" id="mname"  type="text" name="mname" required>

					<label for="lname"><b>Last Name</b></label>
					<input class="form-control" id="lname"  type="text" name="lname" required>

					<label for="gender"><b>Gender</b></label>
					<input class="form-control" id="gender"  type="text" name="gender" required>

					<label for="username"><b>Username</b></label>
					<input class="form-control" id="username"  type="text" name="username" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){

			var user_ID    	= $('#user_ID').val();
			var fname    	= $('#fname').val();
			var mname	    = $('#mname').val();
			var lname 	    = $('#lname').val();
			var gender      = $('#gender').val();
			var username    = $('#username').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {user_ID: user_ID,fname: fname,mname: mname,lname: lname,gender: gender,username: username,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>