<?php

require 'db_config.php';

$data = mysqli_query($con,"select * from registration1");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data View</title>
</head>
<body>
<table border="2">
	<thead>
		<th>Srno</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Status</th>
	</thead>
	<tbody>
		<?php $i = 1; while($d = mysqli_fetch_array($data)) { ?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $d["name"];?></td>
		<td><?php echo $d["mobile"];?></td>
		<td><?php echo $d["email"];?></td>
		<td><?php 
		if($d["is_active"] == 1)
		{
			echo"Acive";
		}
		else
		{
			echo"In-active";
		}
		?>
		</td>
		</tr>
	<?php $i++; } ?>
	</tbody>
</table>
</body>
</html>