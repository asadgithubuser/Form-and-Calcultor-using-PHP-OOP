<?php
include 'name.php';
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
			<input type="number" class="form-control" name="num1" value="<?php echo $_POST['num1'] ?>" >
			
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">address</label>
			<input type="number" class="form-control" name="num2" value="<?php echo $_POST['num2'] ?>">
		  </div>
		  <br>
		  
		  <button type="submit" name="submit" value="1">add</button>
		  <button type="submit" name="submit" value="2">multiple</button>
		  <button type="submit" name="submit" value="3">susb</button>
		  <button type="submit" name="submit" value="4">div</button>
		</form>
		
		
	</div>
	</div>
	
	<?php
		echo $fuull;
	?>

  
  </body>
  </html>