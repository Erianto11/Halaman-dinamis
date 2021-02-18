<?php
inclued "header.php";
if(isset($_GET["home"])){
	include "home.php";	
}else if(isset($_GET["about"])){
	include "about.php";
}else if(isset($_GET["contact"])){
	include "contact.php";
}else{
	include"home.php";
}
include"footer.php";
?>