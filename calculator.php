<?php
$a=$_GET['a'];
$b=$_GET['b'];
$op=$_GET['op'];
switch($op){
case "add":
$c=$a+$b;
print "$a+$b=$c";
break;
case "sub":
$c=$a-$b;
print "$a-$b=$c";
break;
case "mul":
$c=$a*$b;
print "$a*$b=$c";
break;
case "div":
if ($b==0){
print "Na nol' delit' nel'zya";
}
else
{$c=$a/$b;
print "$a/$b=$c";}
break;
default:
print "Vi vveli nepravil'nyy operaciy";
}
?>
