<?php
/**
 * Very simple "server" script. Takes two post parameters and then
 * returns a random number.
 * 
 * Sam Scott, McMaster University, 2025
 */

// get the parameters
$min = filter_input(INPUT_POST, "min", FILTER_VALIDATE_INT);
$max = filter_input(INPUT_POST, "max", FILTER_VALIDATE_INT);

// echo the random number
echo rand($min, $max);
