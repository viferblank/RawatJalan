<?
include "koneksi.php";
$submit=$_POST['submit'];
$id_user=$_POST['id_user'];
$password=MD5($_POST['password']);
if (isset ($submit)  && $submit !="") {
$cekUser="SELECT * FROM user where username='$id_user' and password='$password' and status='aktif'";

$cekUser=mysql_query($cekUser);
$user=mysql_num_rows($cekUser);
if($user > 0) {
$data=mysql_fetch_array ($cekUser);
session_start();
$_SESSION['ok']=true;
$_SESSION['user'] = $data['full_name'];
$_SESSION['id_user'] = $data['id_user'];
$_SESSION['level'] = $data['level'];
if($data['level']=="Administrator"){
$_SESSION['isAdmin'] = true;
header("Location:administrator/index.php");
}else{ 
$_SESSION['isAdmin'] = false;
header("Location:user/index.php");
}

}

?><script language="javascript">
alert("Maaf, Username atau password yang anda masukkan salah.");
document.location="index.php";
</script>
<?
}
?>
<html>
<title>Mey Hospital | Log In</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.slidertron-1.0.js"></script>
<link rel="stylesheet" href="css/flexi-background.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/stylesL.css" type="text/css" media="screen" />

</head>


<body>
<script src="js/flexi-background.js" type="text/javascript" charset="utf-8"></script>
	<div id="box">
		<img src="images/logo1.png" class="logo" alt="yourlogo" />
		<h1>Member Login</h1>
		<form method="post" action="">
			<input type="text" onClick="this.value='';" onFocus="this.select()" name="id_user" onBlur="this.value=!this.value?'Username':this.value;" value="Username" />
			<input type="password" onClick="this.value='';" onFocus="this.select()" name="password" onBlur="this.value=!this.value?'Password':this.value;" value="Password">
			
			<input type="submit" name="submit" value="Log In" />
		</form>
	</div>
</body>
</html>
