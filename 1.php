<?php
$link = mysqli_connect("localhost", "root", "", "demo");
if($link === false){ die("ERROR: Could not connect. " . mysqli_connect_error()); }
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('John', 'Rambo', 'johnrambo@mail.com'), ('Clark', 'Kent', 'clarkkent@mail.com'), ('John', 'Carter', 'johncarter@mail.com'), ('Harry', 'Potter', 'harrypotter@mail.com')"; 
if(mysqli_query($link, $sql)){
echo "Records added successfully."; } else{ echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); }
mysqli_close($link); 
?>
