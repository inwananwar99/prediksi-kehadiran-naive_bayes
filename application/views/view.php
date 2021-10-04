<table border="1" cellpadding="8">
  <tr>
    <th>KTP</th>
    <th>Status Perkawinan</th>
    <th>Jenis Kelamin</th>
    <th>Status Kehadiran</th>
    <th>Alamat</th>
  </tr>
  <?php
  if( ! empty($hadir)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($hadir as $data){ // Lakukan looping pada variabel siswa dari controller
      echo "<tr>";
      echo "<td>".$data->ktp."</td>";
      echo "<td>".$data->status_perkawinan."</td>";
      echo "<td>".$data->jenis_kelamin."</td>";
      echo "<td>".$data->stts_kehadiran."</td>";
      echo "<td>".$data->alamat."</td>";
      echo "</tr>";
    }
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
  }
  ?>
</table>