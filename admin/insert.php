<div class="middle">
	<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$model = $_POST['model'];
		$manu = $_POST['manu'];

		mysqli_query($conn,"insert into products values (null,'$model','$manu')");

		header("location: index.php");
	}
	?>
	<form action="" method="post">
		<p>Model: <br><input type="text" name="model" required></p>
		<p>Manu: <br><input type="text" name="manu" required></p>
		<div class="form-actions">
			<input type="submit" name="submit" class="insert-new submit-inline" value="Insert New">
			<a href="./" class="back-link">Back to the cars list</a>
		</div>
	</form> 
</div>
