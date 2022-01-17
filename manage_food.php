<?php require_once("partials/menu.php"); ?>

<div class="wrapper">
	<h1 class="text-center">Food</h1>
	<br>
	<br>
	<br>
	<div class="text-center">
		<a href="add_admin.php" class="btn-primary "> Add Admin</a>
	</div>
	<br>
	<br>
	<table class="tb_full">
		<tr>
			<th>S.N</th>
			<th>Full Name</th>
			<th>Username </th>
			<th>Action </th>
		</tr>
		<tr>
			<?php 
				$sql = " SELECT * FROM tbl_admin ";

				$query = mysqli_query($conn, $sql);

				$fetch = mysqli_fetch_assoc($query);



			 ?>
			 <?php 
			 while ($fetch) {
					# code...
			?>
			<td>1</td>
			<td>Md Sohel Mia</td>
			<td>Sohel Mia</td>
			<td>
				<a href="#" class="btn-primary">Update Admin</a>
				<a href="#" class="btn-secondary">Delete Admin</a>
				
			</td>
		</tr>
		<?php }  ?>
		<tr>
			<td>2</td>
			<td>Md Sohel Mia</td>
			<td>Sohel Mia</td>
			<td>
				<a href="#" class="btn-primary">Update Admin</a>
				<a href="#" class="btn-secondary">Delete Admin</a>
				
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Md Sohel Mia</td>
			<td>Sohel Mia</td>
			<td>
				<a href="#" class="btn-primary">Update Admin</a>
				<a href="#" class="btn-secondary">Delete Admin</a>
				
			</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Md Sohel Mia</td>
			<td>Sohel Mia</td>
			<td>
				<a href="#" class="btn-primary">Update Admin</a>
				<a href="#" class="btn-secondary">Delete Admin</a>
				
			</td>
		</tr>
	</table>
</div>

<?php require_once("partials/footer.php"); ?>