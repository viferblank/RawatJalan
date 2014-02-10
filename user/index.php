<?php
session_start();
if(!isset($_SESSION['id_user'])){
header("Location:../index.php");
}else {
if($_SESSION['isAdmin']==true){
header("Location:../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Thality Hospital | Admin Panel </title>

<!-- CSS -->
<link href="../style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />

<!-- JavaScripts-->
<script type="text/javascript" src="../style/js/jquery.js"></script>
<script type="text/javascript" src="../style/js/jNice.js"></script>
</head>

<body>
	<div id="wrapper">
    	<h1><a href="#"><span>Thality Hospital</span></a></h1>
        <?php
		include "header.php";
		?>
        
        <div id="containerHolder">
			<div id="container">
        		<?php			
if($_GET['menu']==""){

//Administrasi
include"administrasi/content.php";

}elseif($_GET['menu']=="pembayaran"){
include"administrasi/pembayaran.php";

}elseif($_GET['menu']=="pendaftaran"){
include"administrasi/pendaftaran.php";

}elseif($_GET['menu']=="detailResep"){
include"administrasi/detailresep.php";

}elseif($_GET['menu']=="resep"){
include"administrasi/resep.php";

//List Data
}elseif($_GET['menu']=="listdata"){
include"listdata/content.php";

}elseif($_GET['menu']=="dokter"){
include"listdata/dokter.php";

}elseif($_GET['menu']=="tambahDkt"){
include"listdata/tambahDkt.php";

}elseif($_GET['menu']=="detailDkt"){
include"listdata/detaildkt.php";

}elseif($_GET['menu']=="deleteDkt"){
include"listdata/deletedkt.php";

}elseif($_GET['menu']=="editDkt"){
include"listdata/editdkt.php";

}elseif($_GET['menu']=="pasien"){
include"listdata/pasien.php";

}elseif($_GET['menu']=="tambahPsn"){
include"listdata/tambahpsn.php";

}elseif($_GET['menu']=="editPsn"){
include"listdata/editPsn.php";

}elseif($_GET['menu']=="deletePsn"){
include"listdata/deletepsn.php";

}elseif($_GET['menu']=="detailPsn"){
include"listdata/detailpsn.php";

}elseif($_GET['menu']=="poliklinik"){
include"listdata/poliklinik.php";

}elseif($_GET['menu']=="tambahplk"){
include"listdata/tambahplk.php";

}elseif($_GET['menu']=="detailPlk"){
include"listdata/detailplk.php";

}elseif($_GET['menu']=="editPlk"){
include"listdata/editplk.php";

}elseif($_GET['menu']=="deletePlk"){
include"listdata/deleteplk.php";

}elseif($_GET['menu']=="obat"){
include"listdata/obat.php";

}elseif($_GET['menu']=="tambahObt"){
include"listdata/tambahobt.php";

}elseif($_GET['menu']=="editObt"){
include"listdata/editobt.php";

}elseif($_GET['menu']=="detailObt"){
include"listdata/detailobt.php";

}elseif($_GET['menu']=="deleteObt"){
include"listdata/deleteobt.php";

//List Data Adm
}elseif($_GET['menu']=="listdataadm"){
include"listdataadm/content.php";

}elseif($_GET['menu']=="lpendaftaran"){
include"listdataadm/lpendaftaran.php";

}elseif($_GET['menu']=="tambahDft"){
include"listdataadm/tambahDft.php";

}elseif($_GET['menu']=="detailDft"){
include"listdataadm/detailDft.php";

}elseif($_GET['menu']=="deleteDft"){
include"listdataadm/deleteDft.php";

}elseif($_GET['menu']=="editDft"){
include"listdataadm/editDft.php";

}elseif($_GET['menu']=="lpembayaran"){
include"listdataadm/lpembayaran.php";

}elseif($_GET['menu']=="tambahByr"){
include"listdataadm/tambahByr.php";

}elseif($_GET['menu']=="editByr"){
include"listdataadm/editByr.php";

}elseif($_GET['menu']=="deleteByr"){
include"listdataadm/deleteByr.php";

}elseif($_GET['menu']=="detailByr"){
include"listdataadm/detailByr.php";

}elseif($_GET['menu']=="lresep"){
include"listdataadm/lresep.php";

}elseif($_GET['menu']=="tambahRsp"){
include"listdataadm/tambahRsp.php";

}elseif($_GET['menu']=="detailRsp"){
include"listdataadm/detailRsp.php";

}elseif($_GET['menu']=="editRsp"){
include"listdataadm/editRsp.php";

}elseif($_GET['menu']=="deleteRsp"){
include"listdataadm/deleteRsp.php";

}elseif($_GET['menu']=="ldetailResep"){
include"listdataadm/ldetailResep.php";

}elseif($_GET['menu']=="tambahDt"){
include"listdataadm/tambahDt.php";

}elseif($_GET['menu']=="editDt"){
include"listdataadm/editDt.php";

}elseif($_GET['menu']=="detailDt"){
include"listdataadm/detailDt.php";

}elseif($_GET['menu']=="deleteDt"){
include"listdataadm/deleteDt.php";

//User
}elseif($_GET['menu']=="change"){
include"user/change.php";

}elseif($_GET['menu']=="editUser"){
include"user/edituser.php";

}elseif($_GET['menu']=="detailUser"){
include"user/detailuser.php";

}elseif($_GET['menu']=="resetUser"){
include"user/resetuser.php";



}elseif($_GET['menu']=="logout"){
include"logout.php";

}
				?>
               <div class="clear"></div>
            </div>
        </div>
        
        <p id="footer"><a href="#">Thality Hospital</a> | Contact Us <a href="#"> thalityhospital.com </a></p>
    </div>
</body>
</html>
<?
}
?>
