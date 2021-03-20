<?php
//select input = 16, 36, 64, 121
$input = 1;  //type number here
/* insert your code here */
$result = 0;
switch ($input) {
    case '16':
        $result = (16 / 4 * 2) - 1;
        break;
    case '36':
        $result = (36 / 6 * 2) - 1;
        break;
    case '64':
        $result = (64 / 8 * 2) - 1;
        break;
    case '121':
        $result = (121 / 11 * 2) - 1;
        break;
    default:
        echo 'Number is not avaliable !';
        break;
}
$rowSrc = ceil($result/2);
$number = 1;
echo "<table border='1'>";
for ($row = 1; $row <= $rowSrc; $row++){
echo "<tr>";
    for ($col = 1; $col <= $row; $col++){
            echo "<td>" . $number . "</td>";
            $number++;
    }
    echo "<br>";
echo "</tr>";
}
for ($row = $rowSrc-1; $row >= 1; $row--){
    echo "<tr>";
    for($col = 1; $col <= $row; $col++){
            echo "<td>" . $number . "</td>";
            $number++;
    }
    echo "<br>";
    echo "</tr>";
}
echo "</table>";
?>