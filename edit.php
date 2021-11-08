<!DOCTYPE html>
<html>
<head>
	<title>Edit Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php

    include("connect.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM databuku WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $buku = mysqli_fetch_assoc($query);

?>

</head>
<body>
<div class="container konten">
<form action="edit2.php" method="POST">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $buku['id'] ?>" />
    <label  class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-12">
       <input type="text" class="form-control" name="judul" value="<?php echo $buku['judul'] ?>">
    </div>
  </div>    
  <div class="form-group">
    <label  class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-12">
       <input type="text" class="form-control" name="penerbit" value="<?php echo $buku['penerbit']?>" >
    </div>
  </div> 
  <div class="form-group">
    <label class="col-sm-2 col-form-label">Pengarang</label>
    <div class="col-sm-12">
       <input type="text" class="form-control" name="pengarang" value="<?php echo $buku['pengarang'] ?>">
    </div>
  </div>    
  <div class="form-row">
      <div class="col">
      <label class="col-sm-5 col-form-label">Tanggal Dibuat</label>
          <input class="form-control" type="date" name="tglbuat" value="<?php echo $buku['tglbuat'] ?>">
      </div>
      <div class="col">
      <label class="col-sm-5 col-form-label">Jenis Buku</label>
        <select class="form-control" name="id_jenis" value="<?php echo $buku['jenis']?>">
        <?php include("connect.php"); 
        $sql = "SELECT * FROM kategori";
        $query = mysqli_query($db, $sql);
        while($buku = mysqli_fetch_array($query)){  ?>
            <option value="<?php echo $buku['id_jenis']; ?>"><?php echo $buku['jenis']; ?></option>
        <?php } ?>
        </select>
      </div>
  </div>   
  <br>
  <button type="submit" value= "submit" class="btn btn-primary">Submit </button>
</form>
</div>
</body>
</html>