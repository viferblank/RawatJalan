<?php
include "../koneksi.php";

$kodeDkt = $_GET['kodeDkt'];
$query = "DELETE FROM dokter where kodeDkt = '$kodeDkt'";
if($query = mysql_query ($query)){
?>
<script language="javascript">document.location="index.php?menu=dokter"</script>
<?php
echo"berhasil";
}else{
echo "Gagal menghapus data";}
?>