<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
	$nomorResep=$_POST['nomorResep'];
	$kodeObat=$_POST['kodeObat'];
	$harga=$_POST['harga'];
	$dosis=$_POST['dosis'];
	$subTotal=$_POST['subTotal'];
	
	$sql = "INSERT INTO detail values('$nomorResep','$kodeObat','$harga','$dosis','$subTotal')";
		//echo $sql;
			if( mysql_query($sql))
			{
			?>
			<script language="javascript">
alert("Data Berhasil ditambahkan ! ");
document.location="index.php?menu=detailResep";
</script><?
			}else{
			$pesan="Error Insert Data ";
			
}
}		
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php">Create Pasien</a></li>
                    	<li><a href="index.php?menu=pendaftaran">Create Pendaftaran</a></li>
                    	<li><a href="index.php?menu=resep">Create Resep</a></li>
                    	<li><a href="index.php?menu=detailResep" class="active">Create Detail Resep</a></li>
                    	<li><a href="index.php?menu=pembayaran">Create Pembayaran</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="#">Administrasi</a> &raquo; <a href="#" class="active">Create Detail Resep</a></h2>
                <div id="main">
				<h3>Create Detail Resep</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Nomor Resep:</label>
							<select name="nomorResep">
							<option value="<?=$nomorResep?>">Pilih Salah Satu</option>
							<?php
							include "../koneksi.php";
							$get="SELECT * FROM resep";
							$get=mysql_query($get);
							while($data=mysql_fetch_array($get)){
							print("<option value=\"$data[nomorResep]\">$data[nomorResep]</option>");
							}
							?></select></p>
							
							<p><label>Nama Obat:</label>
							<select name="kodeObat">
							<option value="<?=$kodeObat?>">Pilih Salah Satu</option>
							<?php
							include "../koneksi.php";
							$get="SELECT * FROM obat";
							$get=mysql_query($get);
							while($data=mysql_fetch_array($get)){
							print("<option value=\"$data[kodeObat]\">$data[namaObat]</option>");
							}
							?></select></p>
							
							
                        	<p><label>Harga:</label><input type="text" name="harga" class="text-medium" /></p>
                        	<p><label>Dosis:</label><input type="text" name="dosis" class="text-medium" /></p>
							<p><label>Sub Total:</label><input type="text" name="subTotal" class="text-medium" /></p>
							
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
						<!-- form -->
						</div>