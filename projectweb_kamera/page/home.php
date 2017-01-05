<?php
ini_set("display_errors",0);
$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = '../index.php';
		</script>";
	}	
?>
<script type="text/javascript" src="./typetext.js"></script>
<script>
$(function(){
  $('.typing').typetext();
});
</script>
<br>
<div class="typing">
  <h1>Selamat datang di template ku.</h1>
 <h1>Template ini sudah responsive, didalamnya juga terdapat beberapa tutorial</h1>
 </div>
