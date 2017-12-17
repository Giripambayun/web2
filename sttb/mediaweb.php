<?php
session_start();
error_reporting(0);

if (empty($_SESSION[username]) AND empty($_SESSION[password])){
?>
   <script type="text/javascript">
      alert("Untuk mengakses halaman web aplikasi penjualan, Anda harus login");
      self.location.href="index.php";
   </script>
<?php
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>:: Aplikasi Penjualan ::</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

<link href="css/style_admin.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/style_print.css" rel="stylesheet" type="text/css" media="print" />
<link href="js/ui/jquery-ui.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/fungsi_mod.js"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.PrintArea.js"></script>
<script type="text/javascript" src="js/ui/jquery-ui.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap --> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function(e) {
	// aksi ketika tombol cetak ditekan
	$("#cetak").bind("click", function(event) {
	  $('#laporan').printArea();
	});
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $(".tgl").datepicker({
	  dateFormat : "dd-mm-yy",
	  changeMonth : true,
	  changeYear : true,
	  showOn : "button", // tampilkan button
      buttonText : "klik untuk menampilkan date picker", // nilai atau value untuk button
      buttonImage : "images/calendar.png", //ubah button dengan gambar
      buttonImageOnly : true //tetapkan button dengan tampilan gambar
	});
  });
</script>

</head>

<body>
   <div id="container">
       <?php include  "layout/header.php"; ?>
       <?php include "layout/menu.php"; ?>
           <div class="container">
               <div class=" col-md-12" style="min-height:300px;">
                   <?php include "layout/content.php"; ?>
               </div>
           </div>
        <?php include "layout/footer.php"; ?>
    </div>
</body>
</html>
<?php
}
?>
