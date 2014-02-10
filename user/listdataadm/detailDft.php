<?
include "../koneksi.php";
$nomorPendf=$_GET['nomorPendf'];
$sql="SELECT nomorPendf,tanggalPendf,biaya,ket,poliklinik.namaPlk,dokter.namaDkt,pasien.namaPsn from dokter,poliklinik,pendaftaran,pasien where pendaftaran.kodePlk=poliklinik.kodePlk and pendaftaran.kodePsn=pasien.kodePsn and pendaftaran.kodeDkt=dokter.kodeDkt and nomorPendf='$nomorPendf'";
	$sql=mysql_query($sql);
	$data=mysql_fetch_array($sql);
	?>
	
	
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=lpendaftaran" class="active">Data Pendaftaran</a></li>
                    	<li><a href="index.php?menu=lpembayaran">Data Pembayaran</a></li>
                    	<li><a href="index.php?menu=lresep">Data Resep</a></li>
                    	<li><a href="index.php?menu=ldetailResep">Data Detail Resep</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data Adm</a> &raquo; <a href="index.php?menu=pendaftaran">Daftar Pendaftaran</a> &raquo; <a  class="active">View Pendaftaran</a></h2>
    
                <div id="main">
					<!-- form -->
					<h3>Detail Pendaftaran</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label><b>Nomor Pendaftaran &nbsp;: </b><?php echo "$data[nomorPendf]"; ?></label></p>
                        	<p><label><b>Tanggal Pendaftaran : </b><?php echo "$data[tanggalPendf]"; ?></label></p>
							<p><label><b>Nama Dokter   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['namaDkt']; ?></label></p>
                        	<p><label><b>Nama Poliklinik      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['namaPlk']; ?></label></p>
                        	<p><label><b>Nama Pasien &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['namaPlk']; ?></label></p>
                        	<p><label><b>Biaya  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['biaya']; ?></label></p>
                        	<p><label><b>Keterangan       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['ket']; ?></label> </p>
							
                            
                            <a href="index.php?menu=lpendaftaran"><< Back</a>
                        </fieldset>
                    </form>
					</div>