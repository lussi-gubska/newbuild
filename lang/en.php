<?
$lngg = "en";

function lang($str)
{
	$lang = array (
        
	);

	$str = $lang[$str];
	if (in_array($str, $lang)) return $str; else return false;
}

?>