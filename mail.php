<?php
$email= $_POST['email'];
$msg = $_POST['msg'];

echo $email;
echo $msg;
mail("petekanyuk@gmail.com", "Nonbook Club" $msg);

?>