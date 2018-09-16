<?php 

	$connect = mysqli_connect('localhost','root','','to_do_list');
		$query = "INSERT INTO to_do_lists (name) VALUES('');";
		mysqli_query($connect,$query);
		header('Location: http://to-do-list.ruby/');
	
 ?>	

