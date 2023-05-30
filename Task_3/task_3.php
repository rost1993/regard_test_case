<?php

$boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
$weight = 6;

echo getResult($boxes, $weight);
echo "\n\r";

$boxes = [2, 4, 3, 6, 1];
$weight = 5;

echo getResult($boxes, $weight);

function getResult(array $boxes, int $weight): int
{
	$result = 0;
	$i = 0;
	$j = count($boxes) - 1;

	sort($boxes);

	while($i < $j) {
		$sum = $boxes[$i] + $boxes[$j];

		if($sum == $weight) {
			$result++;
			$i++;
			$j--;
		} else if($sum < $weight) {
			$i++;
		} else {
			$j--;
		}
	}

	return $result;
}
