<?php
include "../koneksi.php";
$id=$_GET['id_user'];
if(isset($_POST['submit'])){
	$id_user=$_POST['id_user'];
	$password=md5($_POST['password']);
	$pass=md5($_POST['pass']);
	$conf=md5($_POST['conf']);
	if($pass==$conf){
	$set="UPDATE user SET password='$pass' where id_user='$id_user'";
	//echo $set;
	if($sukses=mysql_query($set)){
	?>
		<script language="javascript">
		alert("Berhasil mengubah password !");
		document.location="index.php?menu=detailUser";
		</script>
		<?php
	}else{
	$err=mysql_error();
	echo "$err";
	}
	}else{
	?>
	<script language="javascript">
alert("Maaf password yang Anda masukkan salah !");
document.location="index.php?menu=change";
</script>
<?
	}
}else{ 

$sql="select * from user where id_user='$id'";
$sql = mysql_query($sql);
$data = mysql_fetch_array($sql);
}
	?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=detailUser">View User</a></li>
                    	<li><a href="index.php?menu=change" class="active">Change Password</a></li>
                    	<li><a href="index.php?menu=editUser">Edit User</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=detailUser">User</a> &raquo; <a href="index.php?menu=change">Change Password</a></h2>
                
                <div id="main">
				<h3>Change Password</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>Old Password:</label><input type="password" class="text-long" name="password"></p>
                        	<p><label>New Password:</label><input type="password" class="text-long" name="pass"></label></p>
                        	<p><label>Confirm New Password:</label><p><label><input type="password" class="text-long" name="conf"></label></p>
    
	 <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>
					