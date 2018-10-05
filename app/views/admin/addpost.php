<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<h2>Add new article</h2>

<form action="<?php echo BASE_URL;?>/Admin/addNewPost" method="post">
	<table class="">
		<tr>
			<td>Title</td>
			<td><input id="postinput" type="text" name="title" required="1"></td>
		</tr>
		<tr>
	        <td style="vertical-align: top; padding-top: 9px;">
	            <label>Content</label>
	        </td>
	        <td>
	            <textarea name="content"></textarea>
				<script>CKEDITOR.replace( 'content' );</script>
	        </td>
    	</tr>
		<tr>
			<td>Catagory</td>
			<td>
				<select name="cat" class="cat">
					<option>Select One</option>
					<?php 
						foreach ($catlist as $key => $cat) {

					?>
					<option value="<?php echo $cat['id'];?>"><?php echo $cat['name'];?></option>
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save Article"></td>
		</tr>
	</table>
</form>
