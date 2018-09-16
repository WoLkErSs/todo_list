<?php
	$connect = mysqli_connect('localhost','root','','to_do_list');
	$id = ($_POST['id']);
	$id_todo = (int)$id;
	$name_todo = $_POST['todo-name'];
	$query = "UPDATE to_do_lists SET name = '$name_todo' WHERE id = $id_todo;"; 
	mysqli_query($connect,$query);
	header('Location: http://to-do-list.ruby/');
 ?>