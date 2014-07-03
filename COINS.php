<?
$i = array();
function maxUSD($c) {
	global $i;
	
	if (!isset($i[$c])) {
		$f2 = floor($c/2);
		$f3 = floor($c/3);
		$f4 = floor($c/4);
		
		$i[$c] = ($f2 + $f3 + $f4 <= $c) ?
			$c :
			maxUSD($f2) + maxUSD($f3) + maxUSD($f4);
	}
	return $i[$c];
}
 
while($c = fgets(STDIN)){
	echo maxUSD((int) $c) . "\n";
}
?> 