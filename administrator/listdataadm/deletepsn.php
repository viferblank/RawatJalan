<?php
include "../koneksi.php";

$kodePsn = $_GET['kodePsn'];
$query = "DELETE FROM pasien where kodePsn = '$kodePsn'";
if($query = mysql_query ($query)){
?>
<script language="javascript">document.location="index.php?menu=pasien"</script>
<?php
echo"berhasil";
}else{
echo "Gagal menghapus data";}
?>