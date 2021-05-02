<?php
echo ' Data Mahasiswa';
echo "<table border='1'>

<tr>

    <td>No</td>
    <td>NIM</td>
    <td>Nama Lengkap</td>
	<td>Jenis Kelamin<td>

</tr>";
$no=0;
foreach ($konten as $rows => $row) {
	echo "<tr>";
	$no++;
	echo "<td>".$no."</td>";
	echo "<td>".$row['NIM']."</td>";
	echo "<td>".$row['Nama_Depan']." ".$row['Nama_Belakang']."</td>";
	echo "<td>".$row['Jenis_Kelamin']."</td>";
	echo "</tr>";
}
echo "</table>";