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

<h2><a href="index.php?menu=listdata">List Data Adm</a> &raquo; <a href="index.php?menu=pasien" class="active">Daftar Pasien</a></h2>
                
            <div id="main">
				<!-- tabel -->
				<?php
include "../koneksi.php";
$query  = "SELECT * FROM pasien ";
$cari=(isset($_POST['cari'])?$_POST['cari']:'');
if($cari!="") {
	$query.=" Where namaPsn LIKE '%$cari%' "; 
	//tanda .= adalah fungsi untuk mengambil nilai sebelumnya dari variabel yang sama
}

// deklarasi variabel - variabel untuk pagging
$total=mysql_num_rows(mysql_query($query));
$perHal=20; // jumlah data per halaman

$awal=(((isset($_GET['hal'])?$_GET['hal']:1)-1)*$perHal);
$totalHalaman=ceil($total/$perHal);
$query.="order by kodePsn asc LIMIT $awal,$perHal   "; // fungsi sql untuk membatasi dari data ke berapa sebanyak berapa data

//echo $query;
$query=mysql_query($query);
?>
<h3>Daftar Pasien</h3>
<form action="index.php?menu=pasien" method="post">
	<div width="300" align="right" cellpadding="0" cellspacing="0" border="0" style="border:0px;">
	<tr>
	<td width="236" align="right"></td>
	<td> <input type="text" name="cari" value=" Search pasien" class="search-form"  onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"  /></td>
	<td><input type="submit" name="submit" value="search" style="border: 1px solid #ccc; padding:5px; vertical-align:middle;" />
	</td>
	</tr>
	</div>
	</form>
                	<form action="" class="jNice">
                    	<table cellpadding="0" cellspacing="0">
							<tr>
								<td><b>No.</b></td>
                                <td><b>Kode</b></td>
                                <td><b>Nama</b></td>
                                <td><b>Alamat</b></td>
                                <td><b>Gender</b></td>
								<td align=center><b>Action</b></td>
                            </tr>
							<?
							$no=1;
							while($data = mysql_fetch_array($query)){
								?>
								<tr <?php if ($no % 2 == 1) {  }else { echo 'class=alternate-row'; } ?> >
								<?
										echo "<td>$no</td>";
										echo "<td>$data[kodePsn]</td>";
										echo "<td>$data[namaPsn]</td>";
										echo "<td>$data[alamatPsn]</td>";
										echo "<td>$data[genderPsn]</td>";
                                echo "<td class=\"action\"><a href=\"index.php?menu=detailPsn&kodePsn=$data[kodePsn]\" class=\"view\">View</a>
														   <a href=\"index.php?menu=editPsn&kodePsn=$data[kodePsn]\" class=\"edit\">Edit</a>
														   <a href=\"index.php?menu=deletePsn&kodePsn=$data[kodePsn]\" onclick=\"return confirm('Anda yakin akan menghapus Data ini?')\" class=\"delete\">Delete</a>
														   </td>
                            </tr>";
							$no++;
						}
						?>
							<tr>
							<td colspan=8 align=right><a href="index.php?menu=tambahPsn">Create</a></td>
							</tr>                
                        </table>
						<!--  start paging..................................................... -->
			
			<div align="right" id="pag" class="pagination" style="height:100px;">
			<?php
		for($halaman=1; $halaman<=$totalHalaman; $halaman++) {
			if($totalHalaman<2){
			echo"";
			}else{
			echo "<font color=blue size=3> <a href=index.php?menu=pasien&hal=".$halaman.">".$halaman." </a> </font>  ";
			}
		}
		?></div>
			
			<!--  end paging................ -->
						</form>
					<br>
					<br>
                </div>
                <!-- // #main -->