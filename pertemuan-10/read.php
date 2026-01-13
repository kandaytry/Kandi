<?php
require 'koneksi.php';

$sql = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
$q = mysqli_querry($conn, $sql);
?>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</TH>
        <th>NAMA</th>
        <th>Email</th>
        <th>pesan</th>
   </tr>

   <?php while ($row = mysqli_fetch_assoc($q)): ?>
        <tr>
            <td><?= $row['cnama']); ?></td>
            <td><?= htmlspecialchars($row['cemail']); ?></td>
            <td><?= n12br(htmlspecialchars($row['cpesan'])); ?></td>
        </tr>
    <?php endwhile; ?>
   </table>
