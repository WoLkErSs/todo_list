<?php 
	$error = $_GET['error'];
	$connect = mysqli_connect('localhost','root','','to_do_list');

	$query = "SELECT * FROM to_do_lists;";
	$result = mysqli_query($connect,$query);

	$final_result = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($final_result, $row);
	}
		 	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>to do list</title>
	<link rel="stylesheet" href="node_modules/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="node_modules/jquery/dist/jquery.js"></script>
	</head>
<body>
	<main>
		<div class="container-flued">
			<div class="row">
				<div class="col-xs-1"></div>
				<div class="col-xs-10 text-center pt-70">
					<h1 class="m-0 p-0"><b>SIMPLE TODO LISTS</b></h1>
					<h2 class="fs-20 m-0 p-0 mb-80">FROM RUBY GARAGE</h2>
				</div>
				<div class="col-xs-1"></div>
			</div>
		 	<div class="row">
				<div class="col-xs-1"></div>
				<div class="col-xs-10">
					<div class="text-center">
						<form action="add-todo.php" method="POST">
							<button class="btn btn-add-todo mt-50 mb-80">
								<span class=" glyphicon glyphicon-plus bnt_plus" style="color:#F0F0F0"></span>Add TODO List 
							</button>
						</form>

					</div>
				</div>
				<div class="col-xs-1"></div>
			</div>
		</div>
			<?php 
				foreach ($final_result as $todo_names) {
					$id = $todo_names['id'];
					$name = $todo_names['name'];
					include 'partials/categories.php';
				}
			 ?>
	</main>
	<footer class="text-center ">@ Ruby Garage</footer>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="index.js"></script>


</body>
</html>