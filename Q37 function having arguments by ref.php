<?php
function selfMultiply(&$number)
{
$number*=$number;
return $number;
}
$mynum=5;
echo $mynum;
echo"<br>";
selfMultiply($mynum);
echo $mynum;

echo "Program by Aryan(0221BCA161)";

?>
