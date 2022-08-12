<?php include 'menu.inc'; 
///////////////<!-- add to the table --> task5 ///////////////////////////

// getting data
$code = filter_input (INPUT_POST, 'code', VALIDATE_INT);
$name = filter_input (INPUT_POST, 'name');
$lecturer = filter_input (INPUT_POST, 'lecturer');

// validating input
if($code == false || $code == null || $name == null || $lecturer == null){
    $error = "Invalid data. Check all fields and try again";
}else{
    echo $code. "," .$name.",".$lecturer;
    echo "<br>";

try{
    $conn = new PDO ("mysql: host=$hostname; dbname=$databaseName; charset=UTF8",
    $userName, $password);
    echo "<br>";

echo "<br>";
$query= "INSERT INTO modules
(code, name, lecturer) VALUES (:code, :name, :lecturer)";
$statement = $conn ->prepare ($query);

$statement->bindValue(':code', $code);
$statement->bindValue(':name', $name);
$statement->bindValue(':lecture', $lecturer);
$statement->execute();
$statement->closeCursor();

echo "Values added successfully";
echo "<br>";
}catch(PDOException $pe){
    ("Could not connect to the database $dbname:" . $pe->getMessage());
    die ("Could not connect". $pe->getMessage());
}
}

?>
<iframe src="task5.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
