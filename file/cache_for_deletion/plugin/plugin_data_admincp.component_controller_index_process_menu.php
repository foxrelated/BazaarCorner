<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = '@eval(base64_decode("ICAgICAgICAgJG0gPSAiYWR2YW5jZWRtYXJrZXRwbGFjZSI7CgkkcCA9ImFkdmFuY2VkX21hcmtldHBsYWNlIjsKICAgIGlmKHBocGZveDo6aXNNb2R1bGUoJG0pKQogICAgewogICAgICAgIGlmKCFwaHBmb3g6OmlzTW9kdWxlKCd5b3VuZXRjb3JlJykpCiAgICAgICAgewogICAgICAgICAgICBwaHBmb3g6OmdldExpYignZGF0YWJhc2UnKS0+dXBkYXRlKHBocGZveDo6Z2V0VCgncHJvZHVjdCcpLGFycmF5KCdpc19hY3RpdmUnPT4wKSwncHJvZHVjdF9pZCA9ICInLiRwLiciJyk7CiAgICAgICAgICAgIHBocGZveDo6Z2V0TGliKCdkYXRhYmFzZScpLT51cGRhdGUocGhwZm94OjpnZXRUKCdtb2R1bGUnKSxhcnJheSgnaXNfYWN0aXZlJz0+MCksJ21vZHVsZV9pZCA9ICInLiRtLiciJyk7CiAgICAgICAgICAgIHBocGZveDo6Z2V0TGliKCdjYWNoZScpLT5yZW1vdmUoKTsKICAgICAgICB9CiAgICB9CiAgICA=")); if (phpfox::isModule(\'younetcore\'))
{
    phpfox::getService(\'younetcore.core\')->reverifiedModules(); 
    $aModules = phpfox::getService(\'younetcore.core\')->checkYouNetProducts($aModules);
} '; ?>