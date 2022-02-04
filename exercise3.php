<?php

#TASK 1
echo "TASK 1 <br>";
$a = date("F");
if ($a == "August") {
    echo "<br>"."so it's still holiday.";
} else {
    echo "<br>"."This is $a so i don't have any holidays. <br>";
}

#TASK 2
echo "<br>"."TASK 2 <br>";
$color = "red";
if ($color == "red") {
    echo "<br>"."The color is red.<br>";
} else {
   echo "<br>"." The color is not red. <br>";
}

#TASK 3
echo "<br>"."TASK 3 <br>";
$student_grade = 30;
if ($student_grade > 80) {

  echo "<br>"."Excellent";
}
elseif ($student_grade >70 && $student_grade<80) {
    echo "<br>"."Great";
}
elseif ($student_grade >60 && $student_grade<70) {
    echo "<br>"."Good";
}
elseif ($student_grade >50 && $student_grade<60) {
    echo "<br>"."Pass";
}
elseif ($student_grade <50) {
    echo "<br>"."Fail";
}

#TASK 4
echo "<br>"."TASK 4 <br>";
$name = readline('Enter your name :');
echo $name;



 





?>