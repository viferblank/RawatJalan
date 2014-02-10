<?php
include "../koneksi.php";
$kodePsn=$_GET['kodePsn'];
if(isset($_POST['submit'])){
	$namaPsn=$_POST['namaPsn'];
	$genderPsn=$_POST['genderPsn'];
	$alamatPsn=$_POST['alamatPsn'];
	$umurPsn=$_POST['umurPsn'];
	$teleponPsn=$_POST['teleponPsn'];
	
	$set="UPDATE pasien SET namaPsn='$namaPsn', alamatPsn='$alamatPsn', genderPsn='$genderPsn', umurPsn='$umurPsn', teleponPsn='$teleponPsn' WHERE kodePsn='$kodePsn'";
	echo $set;
	if($sukses=mysql_query($set)){
	
	?>
<script language="javascript">document.location="index.php?menu=pasien"</script>
		
		<?php
	}else{
	$err=mysql_error();
	echo "$err";
	}
}else{ 

$sql="select * from pasien where kodePsn='$kodePsn'";
$sql = mysql_query($sql);
$data = mysql_fetch_array($sql);
}
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=dokter">Daftar Dokter</a></li>
                    	<li><a href="index.php?menu=pasien" class="active">Daftar Pasien</a></li>
                    	<li><a href="index.php?menu=poliklinik">Daftar Poliklinik</a></li>
                    	<li><a href="index.php?menu=obat">Daftar Obat</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=pasien">Daftar Pasien</a> &raquo; <a  class="active">Edit Pasien</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Edit Dokter</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Pasien:</label><p><label><b><?php echo $data['kodePsn']; ?></b></label></p>
                        	<p><label>Nama Pasien:</label><input type="text" name="namaPsn" class="text-long" value="<?php echo $data['namaPsn']; ?>" /></p>
                            <p><label>Alamat:</label><input type="text" name="alamatPsn" class="text-long" value="<?php echo $data['alamatPsn']; ?>"/></p>
                        	<p><label>Gender:</label><input type="text" name="genderPsn" class="text-long" value="<?php echo $data['genderPsn']; ?>"/></p>
                        	<p><label>Umur:</label><input type="text" name="umurPsn" class="text-medium" value="<?php echo $data['umurPsn']; ?>"/></p>
							<p><label>No. Telepon:</label><input type="text" name="teleponPsn" class="text-medium" value="<?php echo $data['teleponPsn']; ?>"/></p>

                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>
					