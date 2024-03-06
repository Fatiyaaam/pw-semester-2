<?php
$ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v</li>";
}
echo '</ol>';

asort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v</li>";
} 
echo '</ol>';

ksort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v</li>";
}
echo '</ol>';

arsort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v</li>";
}
echo '</ol>';

ksort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v</li>";
}
echo '</ol>';

$ar_buah = ["Pepaya", "Apel",  "Mangga",  "Jambu"];
 
sort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v</li>";
}
echo '</ol>'; 

$ar_buah2 = ["Pepaya", "Apel",  "Mangga",  "Jambu"];

rsort($ar_buah2);

echo '<ol>';
foreach ($ar_buah2 as $k => $v) {
    echo "<li>$k - $v</li>";
}
echo '</ol>';
?>
