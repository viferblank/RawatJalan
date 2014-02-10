<?
include "../koneksi.php";
$id_user=$_GET['id_user'];
$sql="SELECT * from user where id_user='$id_user'";
	$sql=mysql_query($sql);
	$data=mysql_fetch_array($sql);
	?>
	
	
<div id="sidebar">
             	<ul class="sideNav">
                    	<li><a href="index.php?menu=user" class="active">Daftar User</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

<h2><a href="index.php?menu=user">List User</a> &raquo; <a href="index.php?menu=user">Daftar User</a> &raquo; <a  class="active">View User</a></h2>
                 
                <div id="main">
					<!-- form -->
					<h3>Detail User</h3>
					<form method="post" action="">
                    	<fieldset>
                        	<p><label><b>ID User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[id_user]"; ?></label></p>
                        	<p><label><b>Username : </b><?php echo "$data[username]"; ?></label></p>
                        	<p><label><b>Fullname &nbsp;&nbsp;&nbsp;: </b><?php echo "$data[full_name]"; ?></label></p>
                        	<p><label><b>Password &nbsp;: </b><i>**  Password Protected  **</i></label></p>
                        	<p><label><b>Level &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[level]"; ?></label></p>
                        	<p><label><b>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo "$data[status]"; ?></label></p>
                            
                            <a href="index.php?menu=user"><< Back</a>
                        </fieldset>
                    </form>
					</div>