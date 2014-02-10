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

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=dokter" class="active">Daftar Dokter</a></h2>
                
            <div id="main">
				<!-- tabel -->
				<?php
include "../koneksi.php";
$query  = "SELECT * FROM dokter ";
$cari=(isset($_POST['cari'])?$_POST['cari']:'');
if($cari!="") {
	$query.=" Where namaDkt LIKE '%$cari%' "; 
	//tanda .= adalah fungsi untuk mengambil nilai sebelumnya dari variabel yang sama
}

// deklarasi variabel - variabel untuk pagging
$total=mysql_num_rows(mysql_query($query));
$perHal=20; // jumlah data per halaman

$awal=(((isset($_GET['hal'])?$_GET['hal']:1)-1)*$perHal);
$totalHalaman=ceil($total/$perHal);
$query.="order by kodeDkt asc LIMIT $awal,$perHal   "; // fungsi sql untuk membatasi dari data ke berapa sebanyak berapa data

//echo $query;
$query=mysql_query($query);
?>
<h3>Daftar dokter</h3>
<form action="index.php?menu=dokter" method="post">
	<div width="300" align="right" cellpadding="0" cellspacing="0" border="0" style="border:0px;">
	<tr>
	<td width="236" align="right"></td>
	<td> <input type="text" name="cari" value=" Search dokter" class="search-form"  onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"  /></td>
	<td><input type="submit" name="submit" value="search" style="border: 1px solid #ccc; padding:5px; vertical-align:middle;" />
	</td>
	</tr>
	</div>
	</form>
                	<form action="" class="jNice">
                    	<table cellpadding="0" cellspacing="0">
							<tr>
								<td align=center><b>No.</b></td>
                               <td><b>Kode</b></td>
                               <td><b>Nama</b></td>
                               <td><b>Spesialis</b></td>
                               <td><b>Alamat</b></td>
							   <td align=center><b>Action</b></td>
                            </tr>
							<?
							$no=1;
							while($data = mysql_fetch_array($query)){
								?>
								<tr <?php if ($no % 2 == 1) {  }else { echo 'class=alternate-row'; } ?> >
								<?
										echo "<td>$no</td>";
										echo "<td>$data[kodeDkt]</td>";
										echo "<td>$data[namaDkt]</td>";
										echo "<td>$data[spesialis]</td>";
										echo "<td>$data[alamatDkt]</td>";
                                echo "<td class=\"action\"><a href=\"index.php?menu=detailDkt&kodeDkt=$data[kodeDkt]\" class=\"view\">View</a>
														   <a href=\"index.php?menu=editDkt&kodeDkt=$data[kodeDkt]\" class=\"edit\">Edit</a>
														   <a href=\"index.php?menu=deleteDkt&kodeDkt=$data[kodeDkt]\" onclick=\"return confirm('Anda yakin akan menghapus Data ini?')\" class=\"delete\">Delete</a>
														   </td>
                            </tr>";
							$no++;
						}
						?>
							<tr>
							<td colspan=8 align=right><a href="index.php?menu=tambahDkt">Create</a></td>
							</tr>               
                        </table>
						</form>
						<!--  start paging..................................................... -->
			
			<div align="right" id="pag" class="pagination" style="height:100px;">
			<?php
		for($halaman=1; $halaman<=$totalHalaman; $halaman++) {
			if($totalHalaman<2){
			echo"";
			}else{
			echo "<font color=blue size=3> <a href=index.php?menu=dokter&hal=".$halaman.">".$halaman." </a> </font>  ";
			}
		}
		?></div>
			
			<!--  end paging................ -->
					<br>
					<br>
                </div>
                <!-- // #main -->