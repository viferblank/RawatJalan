<?php
include "../koneksi.php";
$kodePlk=$_GET['kodePlk'];
if(isset($_POST['submit'])){
	$namaPlk=$_POST['namaPlk'];
	
	$set="UPDATE poliklinik SET namaPlk='$namaPlk' WHERE kodePlk='$kodePlk'";
	//echo $set;
	if($sukses=mysql_query($set)){
	
	?>
<script language="javascript">document.location="index.php?menu=poliklinik"</script>
		
		<?php
	}else{
	$err=mysql_error();
	echo "$err";
	}
}else{ 

$sql="select * from poliklinik where kodePlk='$kodePlk'";
$sql = mysql_query($sql);
$data = mysql_fetch_array($sql);
}
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=dokter">Daftar Dokter</a></li>
                    	<li><a href="index.php?menu=pasien">Daftar Pasien</a></li>
                    	<li><a href="index.php?menu=poliklinik" class="active">Daftar Poliklinik</a></li>
                    	<li><a href="index.php?menu=obat">Daftar Obat</a></li>
                    </ul>
                    <!-- // .skodePlkeNav -->
                </div>    
                <!-- // #skodePlkebar -->

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=poliklinik" >Daftar Poliklinik</a> &raquo; <a class="active"> Edit Poliklinik</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Edit Poliklinik</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Poliklinik:</label><p><label><b><?php echo $data['kodePlk']; ?></b></label></p>
                        	<p><label>Nama Poliklinik:</label><input type="text" name="namaPlk" class="text-long" value="<?php echo $data['namaPlk']; ?>" /></p>
                            
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>
					