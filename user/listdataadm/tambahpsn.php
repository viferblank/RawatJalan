<?php
include "../koneksi.php";

if(isset($_POST['submit'])){
	$kodePsn=$_POST['kodePsn'];
	$namaPsn=$_POST['namaPsn'];
	$alamatPsn=$_POST['alamatPsn'];
	$genderPsn=$_POST['genderPsn'];
	$umurPsn=$_POST['umurPsn'];
	$teleponPsn=$_POST['teleponPsn'];
	
	$sql = "INSERT INTO pasien values('$kodePsn','$namaPsn','$alamatPsn','$genderPsn','$umurPsn','$teleponPsn')";
		//echo $sql;
			if( mysql_query($sql))
			{
?>
<script language="javascript">document.location="index.php?menu=pasien"</script>
<?php
 			}else{
			$pesan="Error Insert Data ";
			
}
}		
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=lpendaftaran">Data Pendaftaran</a></li>
                    	<li><a href="index.php?menu=pasien" class="active">Daftar Pasien</a></li>
                    	<li><a href="index.php?menu=lresep">Data Resep</a></li>
                    	<li><a href="index.php?menu=ldetailResep">Data Detail Resep</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data Adm</a> &raquo; <a href="index.php?menu=pasien">Daftar Pasien</a> &raquo; <a  class="active">Create Pasien</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Create Pasien</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Pasien:</label><input type="text" name="kodePsn" class="text-medium" /></p>
                        	<p><label>Nama Pasien:</label><input type="text" name="namaPsn" class="text-long" /></p>
                        	<p><label>Alamat:</label><input type="text" name="alamatPsn" class="text-long" /></p>
							<p><label>Gender Pasien:</label><input type="radio" name="genderPsn" value="Laki-laki"/>Laki - Laki
															<input type="radio" name="genderPsn" value="Perempuan"/>Perempuan</p>
							<p><label>Umur Pasien:</label><input type="text" name="umurPsn" class="text-small" /></p>
                        	<p><label>No. Telepon:</label><input type="text" name="teleponPsn" class="text-medium" /></p>
							
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>