<?php

	$host="localhost";
	$user="root";
	$pass="";
	$database="RawatJalan1";
	$site_url='http://localhost/RawatJalan';
	$site_path= $_SERVER['DOCUMENT_ROOT']."/RawatJalan/";


		mysql_connect($host,$user,$pass) or die ("Error Tidak Bisa Konek ke Database");
		mysql_select_db($database) or die ("Error Tidak Bisa Memilih  Database");

?>
