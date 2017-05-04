<?php

$input = $modx->getOption('input', $scriptProperties, false);
$output = '';

if ($input === false) return $output;

$arr = explode("\n", $input);

foreach($arr as $val) {
	$output .= "<span>$val</span>";
}

return $output;