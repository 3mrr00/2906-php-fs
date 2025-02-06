<?php

$day_name = 'friday';


$short_name = match($day_name){
    'saturday' => 'sat',
    'sunday' => 'sun',
    'monday' => 'mon',
    'tuesday' => 'tue',
    'wednesday' => 'wed',
    'thursday' => 'thu',
    'friday' => 'fri',
    default => false
};

$msg = $short_name === false?
'Invalid day'
: "The day name <span style='color: #950; '>$day_name</span> is written <span style='color: #950; '>$short_name</span> in short.";

echo "<h3>$msg</h3>";