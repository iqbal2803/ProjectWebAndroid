<?php

function getPage($page){
	if($page =="about"){
		include("page/about.html");
	}
	else if ($page == "login"){
		include($page.".php");
	}
	else if ($page != ""){
		include("page/".$page.".php");
	}
	else{
		include("page/home.php");
	}
}


?>