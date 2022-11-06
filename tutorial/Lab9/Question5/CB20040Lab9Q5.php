<!DOCTYPE html>
<html>
<body>


<?php
$data = array ("malique"=>"cerita kedai kopi", "dato' siti"=>"sesuci lebaran", "jamal abdillah"=>"aku maafkan kamu");

echo "<h2>Sort Array in Ascending Order, According to Value </h2>";
asort($data);
foreach($data as $x => $x_value){
    echo " key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}

echo "<br>";

echo "<h2>Sort Array in Ascending Order, According to key </h2>";
ksort($data);
    foreach($data as $x => $x_value){
        echo " key = " . $x . ", Value = " . $x_value;
        echo "<br>";
    
}

?>

</body>
</html>
