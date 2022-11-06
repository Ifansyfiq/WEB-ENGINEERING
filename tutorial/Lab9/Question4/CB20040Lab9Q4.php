<!DOCTYPE html>
<html>
<body>

<style>
.grid{
   display: flex;
   gap: 50px;

   width: 100%;
   height: fit-content;

}
    </style>

<?php
function print_number($max){
    $cols=5;

    echo '<table>';
    echo '<th colspan="', $cols, '"> Max = ', $max, '</th>';
    for ($x = 0; $x < $max; $x++){
    if ($x % $cols == 0){
        echo '<tr>';
    }

    echo '<td>' , $x + 1, '</td>';

    if ($x %cols == $cols - 1){
        echo '</tr>';
    }
}
    echo '</table>';
}
?>

    <div class="grid">
        <?php>
            $nums = [50,67,81];

            foreach ($nums as $num){
                print_number($num);
            }
        ?>
    </div>
</body>
</html>