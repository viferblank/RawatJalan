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
	$nomorByr=$_POST['nomorByr'];
	$kodePsn=$_POST['kodePsn'];
	$tanggalByr=$_POST['tanggalByr'];
	$jumlahByr=$_POST['jumlahByr'];
	
	$sql = "INSERT INTO pembayaran values('$nomorByr','$kodePsn','$tanggalByr','$jumlahByr')";
		//echo $sql;
			if( mysql_query($sql))
			{
			?>
			<script language="javascript">
alert("Data Berhasil ditambahkan ! ");
document.location="index.php?menu=pembayaran";
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
                    	<li><a href="index.php?menu=detailResep">Create Detail Resep</a></li>
                    	<li><a href="index.php?menu=pembayaran" class="active">Create Pembayaran</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="#">Administrasi</a> &raquo; <a href="#" class="active">Create Pembayaran</a></h2>
                <div id="main">
				<h3>Create Pembayaran</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Nomor Pembayaran:</label>
							<?
							include "../koneksi.php";
							$sql    = "SELECT nomorByr from pembayaran order by nomorByr desc limit 0,1";
							$sql = mysql_query($sql);
							$oto = mysql_fetch_row($sql);
							//echo $oto[0];
							$matis    = explode("-", $oto[0]);
							//echo $matis[1];
							$baru = $matis[1]+1;
							echo "<b>B - ".$baru."</b>";
							?>
							<input type="hidden" name="nomorByr" value="<?php echo "B-".$baru; ?>"></p>
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
                        	<p><label>Tanggal Pembayaran:</label><input type="text" name="tanggalByr" id="tanggal1" class="text-medium" /></p>
                        	<p><label>Jumlah Bayar:</label><input type="text" name="jumlahByr" class="text-medium" /></p>
							
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
						<!-- form -->
						</div>