<?
include "../koneksi.php";
$kodePsn=$_GET['kodePsn'];
$sql="SELECT kodePsn,namaPsn,alamatPsn,genderPsn,umurPsn,teleponPsn from pasien where kodePsn='$kodePsn'";
	$sql=mysql_query($sql);
	$data=mysql_fetch_array($sql);
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

<h2><a href="index.php?menu=listdata">List Data Adm</a> &raquo; <a href="index.php?menu=pasien">Daftar Pasien</a> &raquo; <a  class="active">View Pasien</a></h2>
    
                <div id="main">
					<!-- form -->
					<h3>Detail Pasien</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label><b>Kode Pasien &nbsp;: </b><?php echo "$data[kodePsn]"; ?></label></p>
                        	<p><label><b>Nama Pasien : </b><?php echo "$data[namaPsn]"; ?></label></p>
                        	<p><label><b>Alamat      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['alamatPsn']; ?></label></p>
                        	<p><label><b>Gender  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['genderPsn']; ?></label></p>
                        	<p><label><b>Umur       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['umurPsn']; ?></label> </p>
							<p><label><b>No. Telepon &nbsp;&nbsp;&nbsp;: </b><?php echo $data['teleponPsn']; ?></label></p>
                        	
							
                            
                            <a href="index.php?menu=pasien"><< Back</a>
                        </fieldset>
                    </form>
					</div>