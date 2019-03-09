<?php
include 'func.php';
		$name = new Name();
	if(isset($_POST['submit'])){
		$fuull = $name->show($_POST);
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>

  </head>
  <body>
  
	<div class="container">
		<div class="row">
		<form action="" method="POST">
		
		  <div class="form-group">
			<label for="exampleInputEmail1">name</label>
			<input type="text" class="form-control" name="num1" aria-describedby="emailHelp" >
			
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">address</label>
			<input type="text" class="form-control" name="num2" >
		  </div>
		  
		  <button type="submit" name="submit">show full name</button>
		</form>
		
		
	</div>
	</div>
	
	<?php
		echo $fuull;
	?>

  
  </body>
  </html>