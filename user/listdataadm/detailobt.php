<?
include "../koneksi.php";
$kodeObat=$_GET['kodeObat'];
$sql="SELECT * from obat where kodeObat='$kodeObat'";
	$sql=mysql_query($sql);
	$data=mysql_fetch_array($sql);
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

<h2><a href="index.php?menu=listdata">List Data Adm</a> &raquo; <a href="index.php?menu=obat" class="active">Daftar Obat</a> &raquo; Detail Obat</h2>
                
                <div id="main">
					<!-- form -->
					<h3>Detail Obat</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label><b>Kode Obat &nbsp;: </b><?php echo "$data[kodeObat]"; ?></label></p>
                        	<p><label><b>Nama Obat : </b><?php echo "$data[namaObat]"; ?></label></p>
                        	<p><label><b>Jenis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[jenisObat]"; ?></label></p>
                        	<p><label><b>Kategori &nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[kategori]"; ?></label></p>
                        	<p><label><b>Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[hargaObat]"; ?></label></p>
                        	<p><label><b>Jumlah  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[jumlahObat]"; ?></label></p>
                            
                            <a href="index.php?menu=obat"><< Back</a>
                        </fieldset>
                    </form>
					</div>