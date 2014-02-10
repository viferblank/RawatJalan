<?php
include "../koneksi.php";
$id=$_GET['id_user'];
if(isset($_POST['submit'])){
	$id_user=$_POST['id_user'];
	$username=$_POST['username'];
	$full_name=$_POST['full_name'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];
	$status=$_POST['status'];
	
	$set="UPDATE user SET username='$username',full_name='$full_name', level='$level', status='$status' where id_user=$id_user";
	//echo $set;
	if($sukses=mysql_query($set)){
	?>
<script language="javascript">document.location="index.php?menu=user"</script>
		
		<?php
	}else{
	$err=mysql_error();
	echo "$err";
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
                    	<li><a href="index.php?menu=change">Change Password</a></li>
                    	<li><a href="index.php?menu=editUser" class="active">Edit User</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div> 

				<h2><a href="index.php?menu=detailUser">User</a> &raquo; <a href="index.php?menu=editUser">Edit User</a></h2>				
                <div id="main">
					<!-- form -->
					<h3>Edit User</h3>
                    	<fieldset>
						<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
						<form method="post" action="">
						<p><label>Username:</label><input type="text" name="username" class="text-long" value="<?php echo $data['username']; ?>" /></p>
						<p><label>Fullname:</label><input type="text" name="full_name" class="text-long" value="<?php echo $data['full_name']; ?>" /></p>	
		<input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>
					