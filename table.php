<?php include("problemSusan.php") ?>
<?php foreach ($normalProducts as $Item) : ?>
			<?php $sum += $Item->volume; ?> <!-- the sum of all volumes -->
<?php endforeach; ?>
<table>
	<thead>
		<tr>
			<th>The werehouse volume (cubic meters)</th>
			<th>The werehouse sq.m</th>
			<th>The werehouse min width (meters)</th>
			<th>The werehouse min length (meters)</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td> <?php echo $sum; ?> </td>
			<td> <?php echo $sum/3.6; ?> </td>
			<td> <?php echo sqrt($sum/3.6); ?> </td>
			<td> <?php echo sqrt($sum/3.6); ?> </td>
		</tr>
	</tbody>
</table>