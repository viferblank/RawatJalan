<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=dokter">Daftar Dokter</a></li>
                    	<li><a href="index.php?menu=pasien">Daftar Pasien</a></li>
                    	<li><a href="index.php?menu=poliklinik">Daftar Poliklinik</a></li>
                    	<li><a href="index.php?menu=obat" class="active">Daftar Obat</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=listdata">List Data</a> &raquo; <a href="index.php?menu=obat" class="active">Daftar Obat</a></h2>
                
                <div id="main">
				<!-- tabel -->
				<?php
include "../koneksi.php";
$query  = "SELECT * FROM obat ";
$cari=(isset($_POST['cari'])?$_POST['cari']:'');
if($cari!="") {
	$query.=" Where namaObat LIKE '%$cari%' "; 
	//tanda .= adalah fungsi untuk mengambil nilai sebelumnya dari variabel yang sama
}

// deklarasi variabel - variabel untuk pagging
$total=mysql_num_rows(mysql_query($query));
$perHal=20; // jumlah data per halaman

$awal=(((isset($_GET['hal'])?$_GET['hal']:1)-1)*$perHal);
$totalHalaman=ceil($total/$perHal);
$query.="order by kodeObat asc LIMIT $awal,$perHal   "; // fungsi sql untuk membatasi dari data ke berapa sebanyak berapa data

//echo $query;
$query=mysql_query($query);
?>
<h3>Daftar Obat</h3>
<form action="index.php?menu=obat" method="post">
	<div width="300" align="right" cellpadding="0" cellspacing="0" border="0" style="border:0px;">
	<tr>
	<td width="236" align="right"></td>
	<td> <input type="text" name="cari" value=" Search Obat" class="search-form"  onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"  /></td>
	<td><input type="submit" name="submit" value="search" style="border: 1px solid #ccc; padding:5px; vertical-align:middle;" />
	</td>
	</tr>
	</div>
	</form>
                	<form action="" class="jNice">
                    	<table cellpadding="0" cellspacing="0">
							<tr>
								<td><b>No.</b></td>
                                <td><b>Kode Obat</b></td>
                                <td><b>Nama Obat</b></td>
                                <td><b>Jenis</b></td>
                                <td><b>Kategori</b></td>
								<td align=center><b>Action</b></td>
                            </tr>
							<?
							$no=1;
							while($data = mysql_fetch_array($query)){
								?>
								<tr <?php if ($no % 2 == 1) {  }else { echo 'class=alternate-row'; } ?> >
								<?
										echo "<td>$no</td>";
										echo "<td>$data[kodeObat]</td>";
										echo "<td>$data[namaObat]</td>";
										echo "<td>$data[jenisObat]</td>";
										echo "<td>$data[kategori]</td>";
                                echo "<td class=\"action\"><a href=\"index.php?menu=detailObt&kodeObat=$data[kodeObat]\" class=\"view\">View</a>
														   <a href=\"index.php?menu=editObt&kodeObat=$data[kodeObat]\" class=\"edit\">Edit</a>
														   <a href=\"index.php?menu=deleteObt&kodeObat=$data[kodeObat]\" onclick=\"return confirm('Anda yakin akan menghapus Data ini?')\" class=\"delete\">Delete</a>
														   </td>
                            </tr>";
							$no++;
						}
						?>
							<tr>
							<td colspan=6 align=right><a href="index.php?menu=tambahObt">Create</a></td>
							</tr>
                        </table>
						<!--  start paging..................................................... -->
			
			<div align="right" id="pag" class="pagination" style="height:100px;">
			<?php
		for($halaman=1; $halaman<=$totalHalaman; $halaman++) {
			if($totalHalaman<2){
			echo"";
			}else{
			echo "<font color=blue size=3> <a href=index.php?menu=obat&hal=".$halaman.">".$halaman." </a> </font>  ";
			}
		}
		?></div>
			
			<!--  end paging................ -->
                    </form>
					<br>
					<br>
                </div>
                <!-- // #main -->