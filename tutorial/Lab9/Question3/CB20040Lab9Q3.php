<!DOCTYPE html>
<html>
<body>

<?php
$number = 1; 
$Max_number = 79;

print_number($Max_number);


function print_number($Max_number){
global $number;
    while($number < $Max_number)
{

for ( $i = 1;$i <= 5;$i++) 
{
echo "$number ";
$number++; 
}

echo "<br> ";

} 
}
?>
</body>
</html>