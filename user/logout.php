<?php
$_SESSION['ok'] = false;
$_SESSION = array();
session_destroy();
?>
<script language="javascript">document.location="../index.php"</script>
