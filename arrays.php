<?php
$cities = ["London", "Paris", "New York", "Berlin", "Prague"];

foreach($cities as $city) {
    echo $city . "<br>";
}

$students = array("Sam"=>12, "Chris"=>24, "John"=>9);
    foreach ($students as $student=>age) {
        echo  $student . ' is ' . $age . ' years old';
        echo "<br>";
} 

?>