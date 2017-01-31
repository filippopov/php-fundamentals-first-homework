<?php
$timeZone = new DateTimeZone('Europe/Sofia');
$begin = new DateTime('first day of this month', $timeZone);
$end = new DateTime('last day of this month', $timeZone);

while ($begin <= $end) {
    $begin->modify('+1 day');
    if ($begin->format('D') == 'Sun') {
        echo $begin->format('jS F, Y') . '<br>';
    }
}
?>