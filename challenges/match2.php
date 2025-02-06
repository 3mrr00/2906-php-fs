<?php 

$day_name = 'sunday';

$msg = match ($day_name) {
     'friday' ,'saturday' => 'Happy weekend' ,
     'sunday' , 'monday' , 'tuesday' , 'wednesday' , 'thursday' => 'Enjoy your work' ,
     default => false
};

echo ($msg === false)
? 'Invalid Day name'
: "The day is $day_name, $msg ";


