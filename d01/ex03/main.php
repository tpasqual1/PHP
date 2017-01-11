#!/usr/bin/php
<?php
include("ft_split.php");
function ft_split($str)
{
	$str = trim($str, ' ');
	$tab = explode(' ', $str);
	sort($tab);
	return ($tab);
}
print_r(ft_split("Hello World AAA"));
?>