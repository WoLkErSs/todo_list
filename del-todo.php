<?php 

	$connect = mysqli_connect('localhost','root','','to_do_list');
	$id = $_POST['id'];
	if (isset($_POST['id'])) {
		$query = "DELETE FROM to_do_lists WHERE id = '$id'";
		mysqli_query($connect,$query);
		header('Location: http://to-do-list.ruby/');
	}
 ?>