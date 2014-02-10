<?php
include "../koneksi.php";

if(isset($_POST['submit'])){
	$id_user=$_POST['id_user'];
	$username=$_POST['username'];
	$full_name=$_POST['full_name'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];
	$status=$_POST['status'];
	
	$sql = "INSERT INTO user values('$id_user','$username','$full_name','$password','$level','$status')";
		echo $sql;
			if( mysql_query($sql))
			{
?>
<script language="javascript">document.location="index.php?menu=user"</script>
<?php
 			}else{
			$pesan="Error Insert Data ";
			
}
}		
?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=user" class="active">Daftar User</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=user">List User</a> &raquo; <a href="index.php?menu=user">Daftar User</a> &raquo; <a  class="active">Create User</a></h2>
                
                <div id="main">
					<!-- form -->
					<h3>Create user</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label>ID User:</label><input type="text" name="id_user" class="text-medium" /></p>
                        	<p><label>Username:</label><input type="text" name="username" class="text-long" /></p>
                        	<p><label>Fullname:</label><input type="text" name="full_name" class="text-long" /></p>
                        	<p><label>Password:</label><input type="text" name="password" class="text-long" /></p>
							<p><label>Level:</label>
                            <select name="level">
                            	<option value="">Pilih salah satu</option>
                            	<option value="Administrator">Administrator</option>
                            	<option value="User">User</option>
								</select>
								</p>
							<p><label>Status:</label><input type="radio" name="status" value="Aktif"/>Aktif
															<input type="radio" name="status" value="Tidak aktif"/>Tidak Aktif</p>
                            
                            <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                    </form>
					</div>