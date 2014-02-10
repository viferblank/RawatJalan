<?
include "../koneksi.php";
$kodePlk=$_GET['kodePlk'];
$sql="SELECT * from poliklinik where kodePlk='$kodePlk'";
	$sql=mysql_query($sql);
	$data=mysql_fetch_array($sql);
	?>
	
	
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=dokter">Daftar Dokter</a></li>
                    	<li><a href="index.php?menu=pasien">Daftar Pasien</a></li>
                    	<li><a href="index.php?menu=poliklinik" class="active">Daftar Poliklinik</a></li>
                    	<li><a href="index.php?menu=obat">Daftar Obat</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=poliklinik" class="active">Daftar Poliklinik</a> &raquo; Detail Poliklinik</h2>
                
                <div id="main">
					<!-- form -->
					<h3>Detail Poliklinik</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label><b>Kode Poliklinik &nbsp;: </b><?php echo "$data[kodePlk]"; ?></label></p>
                        	<p><label><b>Nama Poliklinik : </b><?php echo "$data[namaPlk]"; ?></label></p>
                            
                            <a href="index.php?menu=poliklinik"><< Back</a>
                        </fieldset>
                    </form>
					</div>