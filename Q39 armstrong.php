<?php
$num = 153;
$digit = str_split((String) $num);
$num = 0;
foreach($digit as $digits) {
    $num+=pow((int) $digit, 3);
}
if($num == $num) {
    echo "$num is armstrong";
}
else {
    echo "$num is not armstrong";
}
echo "Program by Aryan(0221BCA161)";
?>
