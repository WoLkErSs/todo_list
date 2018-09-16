 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Change to do list</title>
 </head>
 <body style="background: linear-gradient(#CDCDCD, #D8B032, darkorange);
	background-repeat: no-repeat;height: 600px;">
	<div style="width: 400px;
	height: 300px;
	background-color: white; text-align: center;margin:0 auto;">
			<h1>Change title of to do list</h1>
		<form action="list_todo_names.php" method="POST" >
			<input type="hidden" name="id" value="<?= $_POST['id_todo'];?>">
			<input type="text" name="todo-name" value="<?= $_POST['title_todo'];?>">
			<button>
				<a href="http://to-do-list.ruby/" style="text-decoration: none;">close</a>
			</button>
			<button type="submit">edit</button>
		</form>
	</div>
 </body>
 </html>
