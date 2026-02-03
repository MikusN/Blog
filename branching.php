<?php 
require_once "functions.php";
// $x = "Kaķēni";
dd(isset($x));
if (isset($x)) {
    $y = $x;
  } else {
    $y = "Ups!";
}

$y = isset($x) ? $x : "Ups!";

$y = $x ?? "Ups!";
// Šis jau ārpus paša if, vienkārši parādu, ka izvadu $y
dd($y);