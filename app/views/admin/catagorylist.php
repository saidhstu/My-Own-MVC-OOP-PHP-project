<h2>Catagory List</h2>

<?php
if (!empty($_GET['msg'])) {
	$msg = unserialize(urldecode($_GET['msg']));
	foreach ($msg as $key => $value) {
		echo "<span style='color:blue;font-size:18px;'>".$value."</span>";
	}
} 

?>

<table class="tblone">

	<tr>
		<th>Serial</th>
		<th>Catagory Name</th>
		<th>Catagory Title</th>
		<th>Action</th>
	</tr>
	<tr>
<?php
$i = 0;
foreach ($cat as $key => $value) {
	$i++;
?>
		<td><?php echo $i;?></td>
		<td><?php echo $value['name'];?></td>
		<td><?php echo $value['title'];?></td>
		<td>
			<a href="<?php echo BASE_URL;?>/admin/editCatagory/<?php echo $value['id'];?>">Edite</a> ||
			<a onclick="return confirm('Are you Sure to Delete ?')" href="<?php echo BASE_URL;?>/admin/deleteCatagory/<?php echo $value['id'];?>">Delete</a>
		</td>
	</tr>
<?php } ?>
</table>