<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 2, 2013, 11:24 pm */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author			Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: license.html.php 3469 2011-11-07 16:51:48Z Raymond_Benc $
 */
 
 

?>
<iframe width="500" src="http://www.phpfox.com/site_license.php?language=en&amp;v=3" name="iframe1" height="300" marginwidth="0" marginheight="0" frameborder="1" style="border:1px #B7B9BB solid; width:100%;" scrolling="yes">license text</iframe>
<div class="table_clear mT10">
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("".$this->_aVars['sUrl'].".license"); ?>" id="install_form">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<div><input type="hidden" name="agree" value="1" /></div>
		<input type="submit" name="submit" value="I Agree. Lets continue.." class="button" id="button" />
	
</form>

</div>
