<table class="table" class="style6.css">
  <thead>
    <tr>
      <th>nama barang</th>
      <th>jenis barang</th>
      <th>waktu pengambilan</th>
    </tr>
  </thead>

  <tbody>
    <?php

      $conn = mysqli_connect("localhost", "root", "", "jasa titip"); 
      $result = mysqli_query($conn, "SELECT nama_barang, nama_jenis, lama_waktu FROM barang_titip,jenis WHERE barang_titip.id_jenis=jenis.id_jenis ");

      while ($row = mysqli_fetch_assoc($result)):
      
      ?>

      <tr>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['nama_jenis']; ?></td>
        <td><?php echo $row['lama_waktu']; ?></td>
      </tr>

    <?php endwhile; ?>
  </tbody>
</table>

<link rel="stylesheet" href="bootstrap.css" >
<script src="tables/js/jquery.js" ></script>
<script src="tables/js/dataTables.bootstrap.js" ></script>
<script src="tables/js/jquery.dataTables.js" ></script>

<script >
  $(".table").DataTable();
</script>