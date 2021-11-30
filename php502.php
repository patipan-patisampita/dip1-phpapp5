<?php
echo"<h1>";
$season = array("Summer", "winter", "Spring", "atumn");
//                  0,      1,      2,      3,
$season[4] = "Special"; //4

echo $length = count($season); //5

// echo "$season[0]<br />";
// echo "$season[1]<br />";
// echo "$season[2]<br />";
// echo "$season[3]<br />";
// echo "$season[4]<br />";
for ($i = 0; $i <= $length - 1; $i = $i + 1) {
    echo $season[$i]. ",";
}
echo"</h1>";
