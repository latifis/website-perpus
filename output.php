<?php include("connect.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Perpustakaan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;   
        height: 10%;      
        background: coral;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    .isi{
        margin-top: 65px;
    }
    </style>
</head>
<body>

<div class="fixed-header"><h3 align="center">Daftar Buku</h3> </div> <br>
<div class="container isi">
<table class="table table-hover">

  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Tanggal Dibuat</th>
      <th scope="col">Jenis Buku</th>
      <th scope="col">Edit/Hapus</th>
    </tr>
  </thead>
  <tbody>
        <?php
        $sql = "SELECT * FROM databuku JOIN kategori on databuku.id_jenis = kategori.id_jenis";
        $query = mysqli_query($db, $sql);
        $no=1;

        while ($buku = mysqli_fetch_array($query)) { ?>
            <tbody>	
                <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $buku['judul']; ?> </td>
                    <td> <?php echo $buku['penerbit']; ?> </td>
                    <td> <?php echo $buku['pengarang']; ?> </td>
                    <td> <?php echo $buku['tglbuat']; ?> </td>
                    <td> <?php echo $buku['jenis']; ?> </td>
                    <?php
                    echo "<td>";
                    echo "<button><a href='edit.php?id=".$buku['id']."'>Edit</a> </button> | ";
                    echo "<button><a href='hapus.php?id=".$buku['id']."'>Hapus</a></button>";
                    echo "</td>";
                    echo "</tr>";?>
                    <?php $no++; ?>
       <?php } ?>
  </tbody>
</table>
</div>
<footer class="fixed-footer"> <center> <a href="form.php">  <button type="button" class="btn btn-primary" href='form.php'>Tambah</button> </a></center></footer>
</body>
</html>