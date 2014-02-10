<script type="text/javascript" src="../../tanggal/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../../tanggal/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="../../tanggal/jquery.ui.datepicker-id.js"></script>
<link rel="stylesheet" type="text/css"
href="../../tanggal/jquery-ui-1.8.11.custom.css" />
   <script type="text/javascript">
 $(document).ready(function() {
 $("#tanggal1").datepicker({
   dateFormat : "dd-mm-yy",
   changeMonth: true,
   changeYear: true,
   yearRange: "-100:+0",
   showon: "button",
   buttonText: "menampilkan date picker",
   buttonImage: "calendar.gif",
   buttonImageonly: true
   });
   });
   </script>
<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
	$nomorPendf=$_POST['nomorPendf'];
	$tanggalPendf=$_POST['tanggalPendf'];
	$kodeDkt=$_POST['kodeDkt'];
	$kodePsn=$_POST['kodePsn'];
	$kodePlk=$_POST['kodePlk'];
	$biaya=$_POST['biaya'];
	$ket=$_POST['ket'];
	
	$sql = "INSERT INTO pendaftaran values('$nomorPendf','$tanggalPendf','$kodeDkt','$kodePsn','$kodePlk','$biaya','$ket')";
		//echo $sql;
			if( mysql_query($sql))
			{
			?>
			<script language="javascript">
alert("Data Berhasil ditambahkan ! ");
document.location="index.php?menu=pendaftaran";
</script><?
			}else{
			$pesan="Error Insert Data ";
			
}
}		
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php">Create Pasien</a></li>
                    	<li><a href="index.php?menu=pendaftaran"class="active" >Create Pendaftaran</a></li>
                    	<li><a href="index.php?menu=resep">Create Resep</a></li>
                    	<li><a href="index.php?menu=detailResep">Create Detail Resep</a></li>
                    	<li><a href="index.php?menu=pembayaran">Create Pembayaran</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="#">Administrasi</a> &raquo; <a href="#" class="active">Create Pendaftaran</a></h2>
                <div id="main">
				<h3>Create Pendaftaran</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Nomor Pendaftaran:</label>
							<?
							include "../koneksi.php";
							$sql    = "SELECT nomorPendf from pendaftaran order by nomorPendf desc limit 0,1";
							$sql = mysql_query($sql);
							$oto = mysql_fetch_row($sql);
							//echo $oto[0];
							$matis    = explode("-", $oto[0]);
							//echo $matis[1];
							$baru = $matis[1]+1;
							echo "<b>D - ".$baru."</b>";
							?>
							<input type="hidden" name="nomorPendf" value="<?php echo "D-".$baru; ?>"></p>
                        	<p><label>Tanggal Pendaftaran:</label><input type="text" name="tanggalPendf" id="tanggal1" class="text-medium" /></p>
							<p><label>Nama Dokter:</label>
							<select name="kodeDkt">
							<option value="<?=$kodeDkt?>">Pilih Salah Satu</option>
							<?php
							include "../koneksi.php";
							$get="SELECT * FROM dokter";
							$get=mysql_query($get);
							while($data=mysql_fetch_array($get)){
							print("<option value=\"$data[kodeDkt]\">$data[namaDkt]</option>");
							}
							?>
							</select></p>
							<p><label>Nama Pasien:</label>
							<select name="kodePsn">
							<option value="<?=$kodePsn?>">Pilih Salah Satu</option>
							<?php
							include "../koneksi.php";
							$get="SELECT * FROM pasien";
							$get=mysql_query($get);
							while($data=mysql_fetch_array($get)){
							print("<option value=\"$data[kodePsn]\">$data[namaPsn]</option>");
							}
							?>
							</select></p>
							<p><label>Nama Poliklinik:</label>
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
							</select></p></p>
                        	<p><label>Biaya:</label><input type="text" name="biaya" class="text-medium" /></p>
							<p><label>Keterangan:</label><input type="text" name="ket" class="text-medium" /></p>
							
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
						<!-- form -->
						</div>