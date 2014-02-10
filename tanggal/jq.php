<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="jquery.ui.datepicker-id.js"></script>
<link rel="stylesheet" type="text/css"
href="jquery-ui-1.8.11.custom.css" />
   <script type="text/javascript">
 $(document).ready(function() {
 $("#tanggal1").datepicker({
   dateFormat : "dd-mm-yy",
   changeMonth: true,
   changeYear: true,
   yearRange: "-100:+0",
   showon: "button",
   buttonText: "menampilkan date picker",
   buttonImage: "calendar.gif",
   buttonImageonly: true
   });
   });
   </script>
</head>

<body>
Tanggal :
<input id="tanggal1" />
</body>
</html>
