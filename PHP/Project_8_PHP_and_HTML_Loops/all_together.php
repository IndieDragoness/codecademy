<h1>Shoe Shop</h1>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>
<p>Our footwear:</p>
<h3>foreach</h1>
<?php
foreach ($footwear as $type => $brands):
?>
<p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
endforeach;
?>
<h3>for</h1>
<?php
$types = [
  "sandals",
  "sneakers",
	"boots"
];
$quantities = [
  4,
  7,
	3
];
for ($i=0; $i<count($types); $i++):
?>
<p>We sell <?=$quantities[$i]?> brands of <?=$types[$i]?></p>
<?php
endfor;
?>
<h3>while</h1>
<?php
$types = [
  "sandals",
  "sneakers",
	"boots"
];
$quantities = [
  4,
  7,
	3
];
$i = 0;
while ($i<count($types)):
?>
<p>We sell <?=$quantities[$i]?> brands of <?=$types[$i]?></p>
<?php
$i++;
endwhile;
?>