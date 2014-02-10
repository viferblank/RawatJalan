<?php
include "../koneksi.php";

if(isset($_POST['submit'])){
	$kodeObat=$_POST['kodeObat'];
	$namaObat=$_POST['namaObat'];
	$jenisObat=$_POST['jenisObat'];
	$kategori=$_POST['kategori'];
	$hargaObat=$_POST['hargaObat'];
	$jumlahObat=$_POST['jumlahObat'];
	
	$sql = "INSERT INTO obat values('$kodeObat','$namaObat','$jenisObat','$kategori','$hargaObat','$jumlahObat')";
		//echo $sql;
			if( mysql_query($sql))
			{
?>
<script language="javascript">document.location="index.php?menu=obat"</script>
<?php
 			}else{
			$pesan="Error Insert Data ";
			
}
}		
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=dokter">Daftar Dokter</a></li>
                    	<li><a href="index.php?menu=pasien">Daftar Pasien</a></li>
                    	<li><a href="index.php?menu=poliklinik">Daftar Poliklinik</a></li>
                    	<li><a href="index.php?menu=obat" class="active">Daftar Obat</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=obat">Daftar Obat</a> &raquo; <a  class="active">Create Obat</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Create Obat</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Obat:</label><input type="text" name="kodeObat" class="text-medium" /></p>
                        	<p><label>Nama Obat:</label><input type="text" name="namaObat" class="text-long" /></p>
                        	<p><label>Jenis:</label><input type="text" name="jenisObat" class="text-long" /></p>
                        	<p><label>Kategori:</label><input type="text" name="kategori" class="text-long" /></p>
                        	<p><label>Harga:</label><input type="text" name="hargaObat" class="text-medium" /></p>
                        	<p><label>Jumlah:</label><input type="text" name="jumlahObat" class="text-medium" /></p>
                            
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>