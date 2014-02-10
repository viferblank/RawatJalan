<?php
include "../koneksi.php";

$kodeObat = $_GET['kodeObat'];
$query = "DELETE FROM obat where kodeObat = '$kodeObat'";
if($query = mysql_query ($query)){
?>
<script language="javascript">document.location="index.php?menu=obat"</script>
<?php
echo"berhasil";
}else{
echo "Gagal menghapus data";}
?>