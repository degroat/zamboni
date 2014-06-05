<?
require "zamboni.php";
$zamboni = new zamboni();
$zamboni->load_from_url('http://www.w3schools.com/browsers/browsers_stats.asp');
$data = $zamboni->extract('TABLE.reference');
print_r($data);
?>
