<?php
include "../koneksi.php";
$id_user=$_GET['id_user'];
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$full_name=$_POST['full_name'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];
	$status=$_POST['status'];
	
	$set="UPDATE user SET username='$username',full_name='$full_name',password='$password',level='$level',status='$status' WHERE id_user='$id_user'";
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

$sql="select * from user where id_user='$id_user'";
$sql = mysql_query($sql);
$data = mysql_fetch_array($sql);
}
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=user" class="active">Daftar User</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=user">List User</a> &raquo; <a href="index.php?menu=user">Daftar User</a> &raquo; <a  class="active">Edit User</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Edit User</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>ID User:</label><p><label><b><?php echo $data['id_user']; ?></b></label></p>
                        	<p><label>Username:</label><input type="text" name="username" class="text-long" value="<?php echo $data['username']; ?>" /></p>
                        	<p><label>Fullname:</label><input type="text" name="full_name" class="text-long" value="<?php echo $data['full_name']; ?>" /></p>
                        	<p><label>Password:</label><input type="text" name="password" class="text-long" value="<?php echo $data['password']; ?>" /></p>
                        	<p><label>Level:</label><input type="text" name="level" class="text-long" value="<?php echo $data['level']; ?>" /></p>
                        	<p><label>Status:</label><input type="text" name="status" class="text-long" value="<?php echo $data['status']; ?>" /></p>
                            
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>
					