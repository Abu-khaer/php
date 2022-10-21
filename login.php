<?php include 'config/db.php';
 session_start();

if(isset($_POST['username'])){
    $email = stripslashes($_POST['email']);
    $password = stripslashes($_POST['password']);

    $query = "SELECT * FROM student WHERE email = '$email' and password = '$password'";

    $result = mysqli_query($conn, $query);

    $rows = mysqli_num_rows($result);

if ($rows === 1){
    $_SESSION['username'] = $email;
    header('Location: dashboard.php');
}

}

?>

<?php include 'layout/header.php'; ?>
				<div class="row mt-5 justify-content-center">
					<div class="col-lg-5">
						<div class="card">
							<div class="card-header bg-info">
								<h4 class="card-title bg-info">LOGIN FORM</h4>
							</div>
							<div class="card-body">
								<form action="" method="POST">
									
									<div class="mb-3">
										<input type="text" name="email" placeholder="Write Your Email Here" class="form-control" required>
									</div>
									
									<div class="mb-3">
										<input type="password" name="password" placeholder="Confirm Your password" class="form-control"required>
									</div>
									
									
                                    <div class="mb-3">
                                        <input type="submit" name="username" value="Registation" class="btn btn-info form-control">
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