{nocache}
<!DOCTYPE html> 
<html>
<head>
	<title>{$title}</title> 
	{if isset($xajax)}
	{$xajax->configure('javascript URI',$base_url)}
	{$xajax->setRequestURI($site_url)}
	{$xajax->printJavascript()}
	{/if}
</head>

<body>
<h1>CodeIgniter Template mit XAJAX und Smarty</h1>
<p>Ohne CSRF</p>
<a href="#" onclick="xajax_say_hello();return false;" >xajax say hello</a>
</body>
</html>
{/nocache}