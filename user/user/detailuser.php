<?php
include "../koneksi.php";
$id=$_GET['id_user'];
$sql="SELECT * from user where id_user='".$_SESSION['id_user']."'";
	$sql=mysql_query($sql);
	$data=mysql_fetch_array($sql);
	?>
<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="index.php?menu=detailUser" class="active">View User</a></li>
                    	<li><a href="index.php?menu=change">Change Password</a></li>
                    	<li><a href="index.php?menu=editUser">Edit User</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=detailuser">User</a> &raquo; <a href="index.php?menu=detailuser" class="active">View User</a></h2>
    <?php //print("Login as ".$_SESSION['user']) ; ?>
<!-- form --><div id="main">
					<h3>Edit Dokter</h3>
					<form method="post" action="">
                    	<fieldset>
						<p><label><b>ID User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[id_user]"; ?></label></p>
						<p><label><b>Username &nbsp;: </b><?php echo "$data[username]"; ?></label></p>
						<p><label><b>Fullname &nbsp;&nbsp;&nbsp;: </b><?php echo "$data[full_name]"; ?></label></p>
						<p><label><b>Password &nbsp;: </b><i>**  Password Protected  **</i></label></p>
						<p><label><b>Level &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[level]"; ?></label></p>
						<p><label><b>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[status]"; ?></label></p>
						
						<?php	
						
						echo "
						<a href=\"index.php?menu=change&id_user=$data[id_user]\">Change Password</a>"; 
						echo "
						<a href=\"index.php?menu=editUser&id_user=$data[id_user]\">Edit</a>"; ?>
					   
                        </fieldset>
                    </form>
					</div>