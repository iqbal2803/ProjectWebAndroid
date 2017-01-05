<?php

function getPage($page){
	if($page =="about"){
		include("page/about.html");
	}
	else if ($page == "login"){
		include($page.".php");
	}
	else if ($page != ""){
		if($_SESSION['username']==''){
		echo "<script>
		window.location = 'index.php';
		</script>";
		}else{
		include("page/".$page.".php");
		}
	}
	else{
		if($_SESSION['username']==''){
		include("home.php");
		}else{
		include("page/home.php");	
		}
	}
}


?>