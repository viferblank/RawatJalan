<?php
include "../koneksi.php";

if(isset($_POST['submit'])){
	$kodePlk=$_POST['kodePlk'];
	$namaPlk=$_POST['namaPlk'];
	
	$sql = "INSERT INTO poliklinik values('$kodePlk','$namaPlk')";
		echo $sql;
			if( mysql_query($sql))
			{
?>
<script language="javascript">document.location="index.php?menu=poliklinik"</script>
<?php
 			}else{
			$pesan="Error Insert Data ";
			
}
}		
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

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=poliklinik">Daftar Poliklinik</a> &raquo; <a  class="active">Create Poliklinik</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Create Poliklinik</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Kode Poliklinik:</label><input type="text" name="kodePlk" class="text-medium" /></p>
                        	<p><label>Nama Poliklinik:</label><input type="text" name="namaPlk" class="text-long" /></p>
                            
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>