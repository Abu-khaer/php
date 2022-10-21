<?php include 'config/db.php'; ?>

<?php 

if(isset($_POST['submit'])){
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $query = "UPDATE student SET 
    name = '$name',
    email = '$email',
    password = '$password',
    number = '$number',
    gender = '$gender'
    WHERE id = {$update_id}";

    if(mysqli_query($conn, $query)){
        header('Location: read.php');
    }else {
        echo "Something went wrng";
    }


}




//  get data method

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = "SELECT * FROM student WHERE id = ".$id;

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);


?>


<?php include 'layout/header.php';  ?>

<div class="row mt-5 justify-content-center">
					<div class="col-lg-5">
						<div class="card">
							<div class="card-header bg-info">
								<h4 class="card-title bg-info">CREATE FORM</h4>
							</div>
							<div class="card-body">
								<form action="" method="POST">
									<div class="mb-3">
										<input type="text" name="name" placeholder="Write Your full name" class="form-control" value="<?php echo $data['name']; ?>" required>
									</div>
									<div class="mb-3">
										<input type="text" name="email" placeholder="Write Your Email Here" class="form-control" value="<?php echo $data['email']; ?>" required>
									</div>
									<div class="mb-3">
										<input type="number" name="number" placeholder="Input  Number" class="form-control" value="<?php echo $data['number']; ?>" required>
									</div>
									<div class="mb-3">
										<input type="password" name="password" placeholder="Confirm Your password" class="form-control" value="<?php echo $data['password']; ?>" required>
									</div>
									<div class="form-check form-switch mb-3">
										<input type="radio" name="gender" value="M" class="form-check-input" value="<?php echo $data['gender']; ?>"required>Male
									</div>
									<div class="form-check form-switch mb-3">
										<input type="radio" name="gender" value="F" class="form-check-input" value="<?php echo $data['gender']; ?>" required>Female
									</div> 
                                    <div class="mb-3">
                                        <input type="hidden" name="update_id" value="<?php echo $data['id']; ?>">
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