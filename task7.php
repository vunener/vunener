<?php include 'menu.inc';
echo "/////////////// Task7 (a) /////////////////////////// <br>";
function splitString($str) {
	$headers = explode(':', $str);

    for ($x = 1; $x <= count($headers); $x++) {
        $subString = $headers[$x];
        $subStringLength = strlen($headers[$x]);
        $lastChar = substr($headers[$x], -1);
        echo $subString."<br>", $subStringLength."<br>", $lastChar."<br>";
    }
}

echo splitString('I:am:Sam')."<br>";
echo splitString('Too:good:to:be:true')."<br>";
echo "/////////////// Task7 (b) /////////////////////////// <br>";
$today = new DateTime();
$futureDate = new DateTime('31-12-2022');
$difference = $today->diff($futureDate);
echo $difference->m; // 4
echo "/////////////// Task7 (c) /////////////////////////// <br>";
function moduleInfo($idCode) {
	echo "Module code is {$idCode} <br>";
    echo "Offered at year {$idCode[3]} <br>";
    echo "With NQF level {$idCode[4]} <br>";
}
echo "/////////////// Task7 (d) /////////////////////////// <br>";
$d=strtotime("today");
$today = date("d-m-Y", $d);
echo "Today is {$today} <br>";

$d=strtotime("next Saturday");
$nextSaturday = date("d-m-Y", $d);
echo "Next Saturday is {$nextSaturday} <br>";
?>
<iframe src="task7.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
