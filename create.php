<?php
include 'config/db.php';
 if(isset($_POST['submit'])){

  $name =stripslashes($_POST['name']);
  $name = mysqli_real_escape_string($conn, $name);
  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $password = stripslashes($_POST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  $number = stripslashes($_POST['number']);
  $number = mysqli_real_escape_string($conn, $number);
  $gender = stripslashes($_POST['gender']);
  $gender = mysqli_real_escape_string($conn, $gender);


    $query = "INSERT INTO student (name, email, password, number, gender) VALUES ('$name', '$email', '$number', '$password', '$gender')";

    $result = mysqli_query($conn, $query);

    if(($result)){
      header('Location: login.php');
    }else {
      echo "Something went wrong";
    }

  
 }

?>

<?php include 'layout/header.php'; ?>
				<div class="row mt-5 justify-content-center">
					<div class="col-lg-5">
						<div class="card">
							<div class="card-header bg-info">
								<h4 class="card-title bg-info">CREATE FORM</h4>
							</div>
							<div class="card-body">
								<form action="" method="POST">
									<div class="mb-3">
										<input type="text" name="name" placeholder="Write Your full name" class="form-control" required>
									</div>
									<div class="mb-3">
										<input type="text" name="email" placeholder="Write Your Email Here" class="form-control" required>
									</div>
									<div class="mb-3">
										<input type="number" name="number" placeholder="Input  Number" class="form-control"required>
									</div>
									<div class="mb-3">
										<input type="password" name="password" placeholder="Confirm Your password" class="form-control"required>
									</div>
									<div class="form-check form-switch mb-3">
										<input type="radio" name="gender" value="M" class="form-check-input"required>Male
									</div>
									<div class="form-check form-switch mb-3">
										<input type="radio" name="gender" value="F" class="form-check-input"required>Female
									</div> 
                                    <div class="mb-3">
                                        <input type="submit" name="submit" value="Registation" class="btn btn-info form-control">
                                    </div>
									<div class="mb-3"><a href="#">Forgot password?</a>
									<a href="#" class=" float-end">I have already account</a>
								</div>
									
								</form>
							</div>
							
						</div>
			</div>
    	</div>
	  </div>
<?php include 'layout/footer.php'; ?>