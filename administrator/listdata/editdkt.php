<?php
include "../koneksi.php";
$kodeDkt=$_GET['kodeDkt'];
if(isset($_POST['submit'])){
	$namaDkt=$_POST['namaDkt'];
	$spesialis=$_POST['spesialis'];
	$alamatDkt=$_POST['alamatDkt'];
	$telponDkt=$_POST['telponDkt'];
	$kodePlk=$_POST['kodePlk'];
	$tarif=$_POST['tarif'];
	
	$set="UPDATE dokter SET namaDkt='$namaDkt', spesialis='$spesialis', alamatDkt='$alamatDkt', telponDkt='$telponDkt', kodePlk='$kodePlk', tarif='$tarif' WHERE kodeDkt='$kodeDkt'";
	//echo $set;
	if($sukses=mysql_query($set)){
	
	?>
<script language="javascript">document.location="index.php?menu=dokter"</script>
		
		<?php
	}else{
	$err=mysql_error();
	echo "$err";
	}
}else{ 

$sql="select * from dokter where kodeDkt='$kodeDkt'";
$sql = mysql_query($sql);
$data = mysql_fetch_array($sql);
}
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=dokter" class="active">Daftar Dokter</a></li>
                    	<li><a href="index.php?menu=pasien">Daftar Pasien</a></li>
                    	<li><a href="index.php?menu=poliklinik">Daftar Poliklinik</a></li>
                    	<li><a href="index.php?menu=obat">Daftar Obat</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=dokter">Daftar Dokter</a> &raquo; <a  class="active">Edit Dokter</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Edit Dokter</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Dokter:</label><p><label><b><input type="hidden" name="kodeDkt"><?php echo $data['kodeDkt']; ?></b></label></p>
                        	<p><label>Nama Dokter:</label><input type="text" name="namaDkt" class="text-long" value="<?php echo $data['namaDkt']; ?>" /></p>
                            <p><label>Spesialis:</label><input type="text" name="spesialis" class="text-long" value="<?php echo $data['spesialis']; ?>"/></p>
                        	<p><label>Alamat:</label><input type="text" name="alamatDkt" class="text-long" value="<?php echo $data['alamatDkt']; ?>"/></p>
                        	<p><label>No. Telepon:</label><input type="text" name="telponDkt" class="text-medium" value="<?php echo $data['telponDkt']; ?>"/></p>
							<p><label>Poliklinik:</label>
							<select name="kodePlk">
								<?php 
								$sql="select * from poliklinik";
								$q=mysql_query($sql); 
								while($rs=mysql_fetch_array($q)) {
								if ($rs['kodePlk']==$rst['kodePlk']) {
								$abc=$rs['kodePlk']."\" selected=\"selected";
								} else {
								$abc=$rs['kodePlk'];
								}
								?>
								<option value="<?=$abc ?>"> <?=$rs['namaPlk'] ?> </option>
								<?php
								}
								?></select>
								<p><label>Tarif:</label><input type="text" name="tarif" class="text-medium" value="<?php echo $data['tarif']; ?>"/></p>

                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>
					