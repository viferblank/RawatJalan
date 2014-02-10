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
		?>
		

              <?
			if( mysql_query($sql))
			{
			?>
			<script language="javascript">
alert("Data Pasien Berhasil ditambahkan, Silahkan mengisi form Pendaftaran ");
document.location="index.php?menu=pendaftaran";
</script><?
			}else{
			$pesan="Error Insert Data ";
			
}
}		
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php" class="active">Create Pasien</a></li>
                    	<li><a href="index.php?menu=pendaftaran">Create Pendaftaran</a></li>
                    	<li><a href="index.php?menu=resep">Create Resep</a></li>
                    	<li><a href="index.php?menu=detailResep">Create Detail Resep</a></li>
                    	<li><a href="index.php?menu=pembayaran">Create Pembayaran</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><?php print("Selamat Datang <i>".$_SESSION['user']."</i>") ; ?> , <?php print("Anda sebagai <i>".$_SESSION['level']."</i>") ; ?></h2>
                <div id="main">
				<h3>Create Pasien</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Pasien:</label>
							<?
							include "../koneksi.php";
							$sql    = "SELECT kodePsn from pasien order by kodePsn desc limit 0,1";
							$sql = mysql_query($sql);
							$oto = mysql_fetch_row($sql);
							//echo $oto[0];
							$matis    = explode("-", $oto[0]);
							//echo $matis[1];
							$baru = $matis[1]+1;
							echo "<b>PS - ".$baru."</b>";
							?>
							<input type="hidden" name="kodePsn" value="<?php echo "PS-".$baru; ?>">
							</p>
                        	<p><label>Nama Pasien:</label><input type="text" name="namaPsn" class="text-long" /></p>
                        	<p><label>Alamat:</label><input type="text" name="alamatPsn" class="text-long" /></p>
							<p><label>Gender Pasien:</label><input type="radio" name="genderPsn" value="Laki-laki"/>Laki - Laki
															<input type="radio" name="genderPsn" value="Perempuan"/>Perempuan</p>
							<p><label>Umur Pasien:</label><input type="text" name="umurPsn" class="text-small" /></p>
                        	<p><label>No. Telepon:</label><input type="text" name="teleponPsn" class="text-medium" /></p>
							
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
						<!-- form -->
						</div>