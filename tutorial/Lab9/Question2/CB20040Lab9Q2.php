<!DOCTYPE html>
<html>
<body>

<?php
$number = 1; 
while($number <= 100)
{

for ( $i = 1;$i <= 5;$i++) 
{


print_number($number);

$number++; 
}

echo "<br> ";

}

function print_number($number){
    echo "$number "; 
}
?>
</body>
</html>