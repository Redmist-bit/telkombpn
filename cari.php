<?php 
$conn = mysqli_connect("localhost","root","","telkom");

if (isset($_POST['kota'], $_POST['nama'])){
	$data = mysqli_query($conn,"SELECT * FROM customer WHERE city LIKE '%$_POST[kota]%' AND name LIKE '%$_POST[nama]%'");

}else {
		
	$data = mysqli_query($conn,"SELECT * FROM customer");
	}


if (mysqli_num_rows($data) > 0) {
	$i = 1;
	while ($a = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $a['id']; ?></td>
				<td><?php echo $a['name']; ?></td>
				<td><?php echo $a['gender']; ?></td>
				<td><?php echo $a['address']; ?></td>
				<td><?php echo $a['city']; ?></td>
				<td><?php echo $a['phone']; ?></td>
				<td><?php echo $a['provins']; ?></td>
			</tr>
		<?php
		$i++;
	}
} else {
	echo "<tr>";
	echo "<td><center><h2>Data tidak ada..</h2></center></td>";
	echo "<tr>";
}
?>