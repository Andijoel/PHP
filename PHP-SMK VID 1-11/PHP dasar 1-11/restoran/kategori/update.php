<?php

    if (isset($_GET['id'])){
		$id=$_GET['id'];
		
		$sql = "SELeCT * FROM tblkategori WHERE idkategori=$id";
		
		$row=$db->getITEM($sql);
	}

?>
<h3>Update Kategori</h3>
<div class="form-group">
     <form action="" method="post">
	      <div class="form-group w-50">
		       <label for="">Kategori</label>
			   <input type="text" name="kategori" required value="<?php echo $row['kategori']?>" class="form-control">
		  </div>
		  <div>
		    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
		  </div>
	 </form>
</div>
<?php

    if (isset($_POST['simpan'])){
		$kategori = $_POST['kategori'];
		
		$sql = "UPDATE INTO tblkategori SET kategori='$kategori' WHEre idkategori=$id";
		
		$db->runSQL($sql);
		
		header("location:?f=kategori&m=select");
	}



?>