<?php 

$numbers = array(1, 2, 3, 4, 5);
foreach($numbers as $number) {
    echo $number, "<br>";
}

$person = array('name' => 'Alice', 'age' => 29);
foreach ($person as $value) {
    echo $value, "<br>";
}
foreach ($person as $key => $value) {
    echo $key, ' ', $value, "<br>";
}

?>