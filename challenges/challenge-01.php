<?php 

$status = 'Shipped';

$color = '';

// for next cases, the color should be red => Canclled, Refunded, Complain
// for next cases, the color should be blue => Pending, On Hold, Postpond
// for next cases, the color should be green => Delivered, Shipped, Reviewed
// handle not matched status

$color = match ($status) {
     'Canclled' , 'Refunded' , 'Complain'=> 'red' ,
     'Pending' , 'On Hold' , 'Postpond' => 'blue',
     'Delivered' , 'Shipped' , 'Reviewed' => 'green' ,
     default => false
};

echo ($color === false)
? 'Not matched status'
: "<h2 style='color:$color'>The Status is $status</h2>";