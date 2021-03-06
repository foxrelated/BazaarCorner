<?php

defined('PHPFOX') or exit('NO DICE!');

/**
 * Author		Teamwurkz Technologies Inc.
 * package		phpfox article module 
 */
 
class Article_Component_Controller_Unfeature extends Phpfox_Component
{	
	public function process()
	{
		Phpfox::isUser(true);
		
		if(!Phpfox::IsAdmin()) {
			$this->url()->send('article',null,'You have no permission to access the page.');
		}
		
		if(Phpfox::getService('article.process')->featureArticle($this->request()->getInt('id'), false)) {
			$this->url()->send('article',null,'Article successfully unfeatured.');
		} else {
			$this->url()->send('article',null,'Article not found.');
		}
					
	}
}

?>