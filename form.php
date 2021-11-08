<!DOCTYPE html>
<html>
<head>
    <title>Form Buku Perpus</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
<div class="fixed-header">  </div>
<div class="container isi">
<form action="input.php" method="POST">
  <div class="form-group">
    <label  class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-12">
       <input type="text" class="form-control" name="judul">
    </div>
  </div>    
  <div class="form-group">
    <label  class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-12">
       <input type="text" class="form-control" name="penerbit">
    </div>
  </div> 
  <div class="form-group">
    <label class="col-sm-2 col-form-label">Pengarang</label>
    <div class="col-sm-12">
       <input type="text" class="form-control" name="pengarang">
    </div>
  </div>    
  <div class="form-row">
      <div class="col">
      <label class="col-sm-5 col-form-label">Tanggal Dibuat</label>
          <input class="form-control" type="date" name="tglbuat" >
      </div>
      <div class="col">
      <label class="col-sm-5 col-form-label">Jenis Buku</label>
        <select class="form-control" name="id_jenis">
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
  <button type="submit" class="btn btn-primary">Submit </button>
</form>
</div>
<footer class="fixed-footer"></footer>

</body>
</html>
