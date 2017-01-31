<?php
$timeZone = new DateTimeZone('Europe/Sofia');
$begin = new DateTime('now', $timeZone);
$year = (int) $begin->format('Y') + 1;
$since_start = $begin->diff(new DateTime("$year-01-01 00:00:00"));
$days = $since_start->days;
$hours =  $since_start->h;
$minutes = $since_start->i;
$seconds = $since_start->s;

$hourUntilNewYear = ($days * 24) + $hours;
$minutesUntilNewYear = ($hourUntilNewYear * 60) + $minutes;
$secondsUntilNewYear = ($minutesUntilNewYear * 60) + $seconds;
echo "Hours until new year : $hourUntilNewYear" . '<br>';
echo "Minutes until new year : $minutesUntilNewYear" . '<br>';
echo "Seconds until new year : $secondsUntilNewYear" . '<br>';
echo "Days:Hours:Minutes:Seconds {$days}:{$hours}:{$minutes}:{$seconds}";