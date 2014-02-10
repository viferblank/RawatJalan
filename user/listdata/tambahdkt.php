<?php
include "../koneksi.php";

if(isset($_POST['submit'])){
	$kodeDkt=$_POST['kodeDkt'];
	$namaDkt=$_POST['namaDkt'];
	$spesialis=$_POST['spesialis'];
	$alamatDkt=$_POST['alamatDkt'];
	$telponDkt=$_POST['telponDkt'];
	$kodePlk=$_POST['kodePlk'];
	$tarif=$_POST['tarif'];
	
	$sql = "INSERT INTO Dokter values('$kodeDkt','$namaDkt','$spesialis','$alamatDkt','$telponDkt','$kodePlk','$tarif')";
		echo $sql;
			if( mysql_query($sql))
			{
?>
<script language="javascript">document.location="index.php?menu=dokter"</script>
<?php
 			}else{
			$pesan="Error Insert Data ";
			
}
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

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=dokter">Daftar Dokter</a> &raquo; <a  class="active">Create Dokter</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Create Dokter</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Dokter:</label><input type="text" name="kodeDkt" class="text-medium" /></p>
                        	<p><label>Nama Dokter:</label><input type="text" name="namaDkt" class="text-long" /></p>
                        	<p><label>Spesialis:</label><input type="text" name="spesialis" class="text-long" /></p>
                        	<p><label>Alamat:</label><input type="text" name="alamatDkt" class="text-long" /></p>
                        	<p><label>No. Telepon:</label><input type="text" name="telepon" class="text-medium" /></p>
							<p><label>Poliklinik:</label>
							<select name="kodePlk">
							<option value="<?=$kodePlk?>">Pilih Salah Satu</option>
							<?php
							include "../koneksi.php";
							$get="SELECT * FROM poliklinik";
							$get=mysql_query($get);
							while($data=mysql_fetch_array($get)){
							print("<option value=\"$data[kodePlk]\">$data[namaPlk]</option>");
							}
							?>
							</select>
                        	<p><label>Tarif:</label><input type="text" name="tarif" class="text-medium" /></p>

                            
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>