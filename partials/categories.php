<div class="container-flued m-50-0">
	<div class="row">
	    <div class="col-xs-0 col-sm-1 col-md-2 col-lg-2"></div>
	    <div id="list" class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
			<div class="row row_title_line tittle-name ">
<!--
				<div class="input-group" id="calendar">
                    <input type="hidden" class="form-control">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                </div> 
                <script>
				    $(function () {
				        $('#calendar').datetimepicker();
				    });
				</script>
-->
				<div class=" col-xs-1  mt-10 glyphicon glyphicon-calendar ">
				</div>
				<div class="m-0 col-xs-8">
					<div class="todo-title">
					<?php echo $name;?>
					</div>
				</div>
				<div class="m-0 col-xs-3 main_icon text-right  text-primary">
					<div class="pencil">
						<form action="listName.php" method="POST">
							<a href="<?=$name?>"></a>
							<input type="hidden" name="id_todo" value='<?=$id?>'>
							<input type="hidden" name="title_todo" value='<?=$name?>'>
							<button type="submit" class="glyphicon glyphicon-pencil"></button>
						</form>
					</div>
					<div class="vbar m-15-0"></div>
					<div class="trash mr-15 p-0" >
						<form action="del-todo.php" method="post">
							<input type="hidden" name="id" value='<?=$id?>'>
							<button type="submit" class="glyphicon glyphicon-trash"></button>
						</form>
					</div>
				</div>
			</div>
			<div class="row create_task">
				<div class=" col-xs-1 text-center mt-10 glyphicon glyphicon-plus text-success">
				</div>
				<div class="m-0  col-xs-11">
					<div class="add_zone mr-15 mt-12 ">
						<input id="titleOfTask" placeholder="  Start typing here to create a task...">
						<button id="addBtn" type="button" class="pull-right add_btn btn btn-success text-center">Add Task</button>

					</div>

				</div>
			</div>
	    <div class="col-xs-0 col-sm-1 col-md-2 col-lg-2"></div>
	</div>
</div>
