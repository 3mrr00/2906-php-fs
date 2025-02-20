<pre> 
<?php

var_dump($_POST['first_name']);
$f_name = $_POST['first_name'];
if (preg_match("/^[A-Z]{2,}$/i", $f_name)) {
    echo "<h2>First Name is Valid</h2>";
} else {
    echo "<h2>First Name is Invalid</h2>";
}

echo '<hr>';

var_dump($_POST['last_name']);
$l_name = $_POST['last_name'];
if (preg_match("/^[A-Z]{2,}$/i", $l_name)) {
    echo "<h2>Last Name is Valid</h2>";
} else {
    echo "<h2>Last Name is Invalid</h2>";
}

echo '<hr>';


var_dump($_POST['email']);
$email = $_POST['email'];
if (preg_match("/^[\w._-]+@[\w.-]+\.[\w]{2,}$/", $email)) {
    echo "<h2>Email is Valid</h2>";
} else {
    echo "<h2>Email is Invalid</h2>";
}

echo '<hr>';


var_dump($_POST['mobile']);
$mobile = $_POST['mobile'];
if (preg_match("/^(010|011|012|015)\d{8}$/", $mobile)) {
    echo "<h2>Mobile is Valid</h2>";
} else {
    echo "<h2>Mobile is Invalid</h2>";
}

echo '<hr>';

var_dump($_POST['date_of_birth']);
$date_of_birth = $_POST['date_of_birth'];
if (preg_match("/^(1[0-9]{3}|20[0-9]{2})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[0-1])$/", $date_of_birth)) {
    echo "<h2>Date is Valid</h2>";
} else {
    echo "<h2>Date is Invalid</h2>";
}

echo '<hr>';

var_dump($_POST['id']);
$id = $_POST['id'];
if (preg_match("/^\d{14}$/", $id)) {
    echo "<h2>ID is Valid</h2>";
} else {
    echo "<h2>ID is Invalid</h2>";
}


echo '<hr>';

var_dump($_POST['salary']);
$salary = $_POST['salary'];
if (preg_match("/^\d{3,}$/", $salary)) {
    echo "<h2>Salary is Valid</h2>";
} else {
    echo "<h2>Salary is Invalid</h2>";
}


echo '<hr>';

var_dump($_POST['username']);
$username = $_POST['username'];
if (preg_match("/^\w{3,20}$/", $username)) {
    echo "<h2>Username is Valid</h2>";
} else {
    echo "<h2>Username is Invalid</h2>";
}

echo '<hr>';

var_dump($_POST['password']);
$password = $_POST['password'];
if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[\d])(?=.*[\W])[A-Za-z\d\W]{8,100}$/", $password)) {
    echo "<h2>Password is Valid</h2>";
} else {
    echo "<h2>Password is Invalid</h2>";
}
echo '<hr>';

var_dump($_POST['password-confirm']);
$password_confirm = $_POST['password-confirm'];
if (preg_match($password, $password_confirm)) {
    echo "<h2>Password not matched</h2>";
} else {
    echo "<h2>Password Confirmed Successfully</h2>";
}







