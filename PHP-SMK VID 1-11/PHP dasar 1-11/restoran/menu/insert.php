<?php

$row=$db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");



?>

<h1>Insert Menu</h1>
<div class="form-group">
     <form action="" method="post" enctype="multipart/form-data">
	      <div class="form-group w-50">
		       <label for="">Kategori</label><br>
			    <select name="idkategori" id="">
				<?php foreach($row as $r): ?>
		            <option value="<?php echo $r['idkategori'] ?>"><?php echo $r['kategori'] ?></option>
		        <?php endforeach ?>
				</select>
		  </div>
	      <div class="form-group w-50">
		       <label for="">Nama menu</label>
			   <input type="text" name="menu" required placeholder="isi menu" class="form-control">
		  </div>
		    <div class="form-group w-50">
		       <label for="">harga</label>
			   <input type="text" name="harga" required placeholder="isi menu" class="form-control">
		  </div>
		  <div class="form-group w-50">
		       <label for="">gambar</label><br>
			   <input type="file" name="gambar">
		  </div>
		  <div>
		    <input type="submit" name="simpan" number required placeholder="isi harga" value="simpan" class="btn btn-primary">
		  </div>
	 </form>
</div>
<?php

    if (isset($_POST['simpan'])){
		$idkategori = $_POST['idkategori'];
		$menu = $_POST['menu'];
		$harga = $_POST['harga'];
		$gambar = $_FILES['gambar']['name'];
		$temp = $_FILES['gambar']['tmp_name'];
		
		if(empty($gambar)){
			echo "<h3> GAMBAR KOSONG </h3>";
		}else{
			$sql = "INSERT INTO tblmenu VALUES ('',$idkategori,'$menu','$gambar','$harga')";
		    
			move_uploaded_file($temp,'../upload/'.$gambar);
		    
			$db->runSQL($sql);
		
		    header("location:?f=menu&m=select");
		}
		
		$sql = "INSERT INTO tblmenu VALUES ('','$menu')";
		
		
	}



?>