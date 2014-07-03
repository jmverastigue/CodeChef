<?php
while (true) {
$input = fgets(STDIN, 3);
if ($input == 42) {
break;
} else {
echo $input;
}
}
?> 