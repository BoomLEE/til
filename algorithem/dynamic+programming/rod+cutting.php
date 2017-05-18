<?php
/*
rod cutting

*/
$p = [0, 1, 5, 8, 9, 10, 17, 17, 20, 24, 30] ;
function cutRod($p, $n)
{
	$r = [0];
	for ($j=1;$j <= $n; $j++){
		$q = -1;
		for ($i=1; $i<=j; $i++) {
			$q = max($q, $p[$i]+$r[$j-$i]);
		}
		$r[$j] = $q;
	}
	return $r[$n];
}
echo cutRod($p, 2);
echo cutRod($p, 3);
echo cutRod($p, 4);
echo cutRod($p, 7);

exit;