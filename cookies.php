<?php
if(isset($_GET["acp"]) && $_GET["acp"] == "ok")
{
	setcookie("sr_cookies", $_GET["acp"], time() + (60 * 60 * 24 * 365), "/");
	header("Location: ".$_GET["url"]);
}else{
	unset($_COOKIE["sr_cookies"]);
	setcookie("sr_cookies", "", time() - 3600, "/");
	header("Location: ".$_GET["url"]);
}
?>
