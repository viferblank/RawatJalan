<?php
include "../koneksi.php";

$id_user = $_GET['id_user'];
$query = "DELETE FROM user where id_user = '$id_user'";
if($query = mysql_query ($query)){
?>
<script language="javascript">document.location="index.php?menu=user"</script>
<?php
echo"berhasil";
}else{
echo "Gagal menghapus data";}
?>