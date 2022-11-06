<!DOCTYPE html>
<html>
    <head>
<style>
    table, th, td{
        border:1px solid black 
    };
</style>
</head>
<body>

<?php
$number = 1; 
$Max_number=$_POST["num"];

echo "<table>";
while($number <=$Max_number)
{
    echo "<tr>";
    for ($i=1; $i<=5 && $number <= $Max_number; $i++)
    {
        echo "<td align=center>$number</td>";
        $number++;
    }
    echo "</tr>";
}
echo "<br>";
echo "</table>";
?>
</body>
</html>