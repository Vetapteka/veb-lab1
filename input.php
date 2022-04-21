<?php $time_start = microtime(true); ?>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$r = $_POST["r"];

$result = (($x <= 0) && ($y >= 0) && ($y <= $r) && ($x <= $r) ||
    ($x <= 0) && ($y <= 0) && ($y * $y + $x * $x <= $r * $r) ||
    ($x >= 0) && ($y <= 0) && ($y > $x - $r)) ? "yes" : "no";


?>
<tr>
    <td><h2><?php echo $x ?></h2></td>
    <td><h2><?php echo $y ?></h2></td>
    <td><h2><?php echo $r ?></h2></td>
    <td><h2><?php echo $result ?></h2></td>
    <td><h2><?php echo date('Y-m-d H:i:s'); ?></h2></td>

    <?php $time_end = microtime(true);
    $time = $time_end - $time_start;
    ?>

    <td><h2><?php echo number_format($time, 10);
            echo "c"; ?></h2></td>
</tr>

