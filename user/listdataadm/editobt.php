<?php
include "../koneksi.php";
$kodeObat=$_GET['kodeObat'];
if(isset($_POST['submit'])){
	$namaObat=$_POST['namaObat'];
	$jenisObat=$_POST['jenisObat'];
	$kategori=$_POST['kategori'];
	$hargaObat=$_POST['hargaObat'];
	$jumlahObat=$_POST['jumlahObat'];
	
	$set="UPDATE obat SET namaObat='$namaObat',jenisObat='$jenisObat',kategori='$kategori',hargaObat='$hargaObat',jumlahObat='$jumlahObat' WHERE kodeObat='$kodeObat'";
	//echo $set;
	if($sukses=mysql_query($set)){
	
	?>
<script language="javascript">document.location="index.php?menu=obat"</script>
		
		<?php
	}else{
	$err=mysql_error();
	echo "$err";
	}
}else{ 

$sql="select * from obat where kodeObat='$kodeObat'";
$sql = mysql_query($sql);
$data = mysql_fetch_array($sql);
}
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=lpendaftaran">Data Pendaftaran</a></li>
                    	<li><a href="index.php?menu=lpembayaran">Data Pembayaran</a></li>
                    	<li><a href="index.php?menu=lresep">Data Resep</a></li>
                    	<li><a href="index.php?menu=obat" class="active">Daftar Obat</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data Adm</a> &raquo; <a href="index.php?menu=obat">Daftar Obat</a> &raquo; <a  class="active">Edit Obat</a></h2>
              
                <div id="main">
					<!-- form -->
					<h3>Edit Obat</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Obat:</label><p><label><b><?php echo $data['kodeObat']; ?></b></label></p>
                        	<p><label>Nama Obat:</label><input type="text" name="namaObat" class="text-long" value="<?php echo $data['namaObat']; ?>" /></p>
                        	<p><label>Jenis:</label><input type="text" name="jenisObat" class="text-long" value="<?php echo $data['jenisObat']; ?>" /></p>
                        	<p><label>Kategori:</label><input type="text" name="kategori" class="text-long" value="<?php echo $data['kategori']; ?>" /></p>
                        	<p><label>Harga:</label><input type="text" name="hargaObat" class="text-medium" value="<?php echo $data['hargaObat']; ?>" /></p>
                        	<p><label>Jumlah:</label><input type="text" name="jumlahObat" class="text-medium" value="<?php echo $data['jumlahObat']; ?>" /></p>
                            
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>
					