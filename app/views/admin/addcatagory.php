<h2>Add new Catagory</h2>

<form action="<?php echo BASE_URL;?>/Admin/insertCatagory" method="post">
	<table class="">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required="1"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" required="1"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>