<?php
include "../koneksi.php";

$kodePlk = $_GET['kodePlk'];
$query = "DELETE FROM poliklinik where kodePlk = '$kodePlk'";
if($query = mysql_query ($query)){
?>
<script language="javascript">document.location="index.php?menu=poliklinik"</script>
<?php
echo"berhasil";
}else{
echo "Gagal menghapus data";}
?>