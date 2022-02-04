<?php

# SWITCH
$a = 4;
switch ($a) {
    case '0':
        echo ("the number is 0.");
        break;
    case '1':
        echo ("the number is 1.");
        break; 
    case '2':
        echo ("the number is 2.");
        break;     
    case '3':
        echo ("the number is 3.");
        break;      

    default:
        echo ("the number is not in range.");
        break;
}

#WHILE-

$b = 0;

while ($b <= 10) {
    echo "<br>". "the number is ".$b;
    $b++;
}

# DO-WHILE
$c=0;
do {
    echo "<br>". "the number is ".$c;
    $c++;
    
} 
while ($c <= 10);

#FOR LOOP
for ($i=0; $i <7 ; $i++) { 
    echo "<br>"."the number is $i <br />";
}

# FOREACH LOOP
$x = array(3,5,8,2,12,62,98,32,12);
foreach ($x as $key => $value) {
    echo "<br>". $value;
}
#github test


?>