<?php
$sYounetLibPath = PHPFOX_DIR . 'module' . PHPFOX_DS . 'younetcore' . PHPFOX_DS . 'include' . PHPFOX_DS . 'service' . PHPFOX_DS . 'libs' . PHPFOX_DS;
if (!class_exists('Younet_Cache'))
{	
	require_once($sYounetLibPath . 'yncache.class.php');
}
if (!class_exists('Younet_Service'))
{
	require_once($sYounetLibPath . 'ynservice.class.php');
}
?>