<!DOCTYPE html>
<html>
<body>
<pre>
<?php
$a=5;
$b=5.34;
$c="hello";
$d=true;
$e=NULL;

$a=(array)$a;
$b=(array)$b;
$c=(array)$c;
$d=(array)$d;
$e=(array)$e;

// To verify the type of any object in PHP, use the var_dump() function
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
</pre>
<p>When converting into arrays, most data types converts into an indexed array with one element.</p>
<p>NULL value converts to an empty array object.</p>
</body>
</html>