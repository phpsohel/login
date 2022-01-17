<?php require_once("partials/menu.php"); ?>
<main>
	<div class="wrapper">
		<h1 class="text-center"> Add Admin</h1>
		<br>
		<br>
		<br>
		<form action="" method="POST">
			<div class="form-group">
				<label for="full_name">Full Name</label>
				<input type="text" name="full_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Username Name</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" class="form-control">
			</div>
			<input type="submit" value="Add Admin" name="admin" class="btn-secondary">
		</form>
	</div>
</main>
<?php require_once("partials/footer.php"); ?>

<?php 
	if(isset($_POST['admin'])){
		//1. get the data from form
		$full_name = $_POST['full_name'];
		$username = $_POST['username'];
		$password = md5($_POST['password']); //password encryption with md5
		//2. SQL Query to save the data into the database  
		$query = "INSERT INTO tbl_admin (full_name, username, password) VALUE ('$full_name', '$username', '$password')";

		//3. Excutive query and save data in database 
		$res = mysqli_query($conn, $query); //database connect

		if($res == true){
			//Create a session varriable in message
			$SESSION['add'] = 'Admin added successfull';
			//redirect page
			header('location: index.php');
			session_start();


		}else{
			echo "Data not inserted";
		}
	}

 ?>