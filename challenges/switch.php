<?php 

$day_name ='monday';
$msg = '';


switch($day_name){
    case 'friday':
    case 'saturday';
    $msg = 'Happy weekend';
    break;
    case 'sunday':
    case 'monday':
    case 'tuesday':
    case 'wednesday':
    case 'sunday':
     $msg = 'Enjoy your work';
     break;
     default :
     $msg = false;
}

echo ( $msg === false) ?
'<h2>Invalid Day name !!!!</h2>'
: "<h2>The day is $day_name , $msg</h2>";