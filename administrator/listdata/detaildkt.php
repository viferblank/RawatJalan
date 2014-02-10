<?
include "../koneksi.php";
$kodeDkt=$_GET['kodeDkt'];
$sql="SELECT kodeDkt,namaDkt,spesialis,alamatDkt,telponDkt,tarif,poliklinik.namaPlk from dokter,poliklinik where dokter.kodePlk=poliklinik.kodePlk and kodeDkt='$kodeDkt'";
	$sql=mysql_query($sql);
	$data=mysql_fetch_array($sql);
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

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=dokter">Daftar Dokter</a> &raquo; <a  class="active">View Dokter</a></h2>
    
                <div id="main">
					<!-- form -->
					<h3>Detail Dokter</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label><b>Kode Dokter &nbsp;: </b><?php echo "$data[kodeDkt]"; ?></label></p>
                        	<p><label><b>Nama Dokter : </b><?php echo "$data[namaDkt]"; ?></label></p>
							<p><label><b>Spesialis   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['spesialis']; ?></label></p>
                        	<p><label><b>Alamat      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['alamatDkt']; ?></label></p>
                        	<p><label><b>No. Telepon &nbsp;&nbsp;&nbsp;: </b><?php echo $data['telponDkt']; ?></label></p>
                        	<p><label><b>Poliklinik  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['namaPlk']; ?></label></p>
                        	<p><label><b>Tarif       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $data['tarif']; ?></label> </p>
							
                            
                            <a href="index.php?menu=dokter"><< Back</a>
                        </fieldset>
                    </form>
					</div>