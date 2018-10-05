<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<h2> Article List</h2>

<?php
/*if (!empty($_GET['msg'])) {
	$msg = unserialize(urldecode($_GET['msg']));
	foreach ($msg as $key => $value) {
		echo "<span style='color:blue;font-size:18px;'>".$value."</span>";
	}
} else{
	header("location:".BASE_URL."/admin");
}
*/
?>

<table id="table_id" class="display" data-page-Length='5'>
 <thead>
	<tr>
		<th width="5%">No</th>
		<th width="20%">Title</th>
		<th width="35%">Content</th>
		<th width="15%">Catagory</th>
		<th width="25%">Action</th>
	</tr>
 </thead>
<tbody>
<?php
$i = 0;
	foreach ($listPost as $key => $value) {
		$i++;
?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $value['title'];?></td>
		<td>
			<?php 
			$text = $value['content'];
			if (strlen($text)>40) {
				$text = substr($text, 0, 40);
				echo $text;
			}

		?>...
		 </td>
		<td>	
			<?php 
			foreach ($catlist as $key => $cat) {
				if ($cat['id'] == $value['cat']) {
					echo $cat['name'];
				}
			}
				
			?>
		</td>
		<td>
			<a href="">Edite</a> || 

			<a href="">Delete</a>
		</td>
	</tr>
<?php } ?>
</tbody>
</table>
<script>
	$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>