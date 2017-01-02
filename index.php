<?php
ini_set("display_errors",0);
include("page/koneksi.php");
include("fungsi.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML</title>

<!-- jQuery -->
<script type="text/javascript" src="assets/libs/jquery/jquery.js"></script>
<script type="text/javascript" src="assets/libs/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/libs/jquery/bootstrap.min.js"></script>
<script src="assets/jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/jQueryAssets/jquery.ui-1.10.4.progressbar.min.js" type="text/javascript"></script>

<!-- untuk menambahkan class active untuk highlight -->
<!-- ganti warna di demo.css -->

<script type='text/javascript'>
$(function() {
var path = window.location.href; // Mengambil data URL pada Address bar
$('nav a').each(function() {
// Jika URL pada menu ini sama persis dengan path...
if (this.href === path) {
// Tambahkan class "active" pada menu ini
$(this).addClass('active');
}
});
});
</script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery init -->
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});
	});
</script>
<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- SmartMenus core CSS (required) -->
<link href="assets/css/sm-core-css.css" rel="stylesheet" type="text/css" />

<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="assets/css/sm-mint/sm-mint.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<!-- YOU DO NOT NEED THIS - demo page content styles -->
<link href="assets/libs/demo-assets/demo.css" rel="stylesheet" type="text/css" />
<link href="assets/jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="assets/jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
<link href="assets/jQueryAssets/jquery.ui.progressbar.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form method="get" action="index.php">
<div id="header"><center><img class="img-responsive" src="assets/img/header.jpg"/></center></div>
<nav id="main-nav" role="navigation">
  <!-- Sample menu definition -->
  <ul id="main-menu" class="sm sm-mint">
    <li><a href="index.php">Home</a></li>
   <?php if($_SESSION['username']==''){?>
   <li><a href="index.php?page=login">Login</a></li>
   <?php }?>
   <?php if($_SESSION['hak_akses']=='Admin'){?>
    <li><a href="#">Master</a>
      <ul>
        <li><a href="index.php?page=user">User</a></li>
        <li><a href="index.php?page=barang">Barang</a></li>
        <li><a href="index.php?page=pelanggan">Pelanggan</a></li>
      </ul>
    </li>
    <li><a href="logout.php">Logout</a>
    </li>
    <?php }?>
    
    <?php if($_SESSION['username']==''){?>
    <li ><a href="index.php?page=about">About</a></li>
    <?php }?>
    <input name="page" type="hidden" value="" />
    </ul>
</nav>
</form>
<div class="columns">

<div class="left-column">
  <div id="content">
    <?php getPage($_REQUEST['page']); ?>
  </div>
</div>

</div>
<div class="columns">
<div id="footer">
<?php 
// No argument required for current year.
// Otherwise, pass start year as a 4-digit value.
function auto_copyright($startYear = null) {
	$thisYear = date('Y');  // get this year as 4-digit value
    if (!is_numeric($startYear)) {
		$year = $thisYear; // use this year as default
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) { // $year cannot be greater than this year - if it is then echo only current year
		echo "&copy; $thisYear"; // display single year
	} else {
		echo "&copy; $year&ndash;$thisYear"; // display range of years
	}   
 } 
 ?>

 <marquee>
 Copyright <?php auto_copyright(); // Current year?>. <a>Design by <a href="https://www.facebook.com/M.Iqbaal28">Kelompok 3</a>.
 </marquee>
 </div>
</div>
</body>
</html>
