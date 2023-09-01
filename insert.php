<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>liquid records</title>

</head>
<body>
<center>
<?php
//server name => localhost
//username => root
//password => empty
//database name => liquid
$conn = mysqli_connect("localhost", "root", "root", "waste");
//check connection
if($conn === false){
die ("ERROR: could not connect. " . mysqli_connect_error());
}
//Taking all 5 values from the form data (input)
$company_name = $_REQUEST['company_name'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];
$source = $_REQUEST['source'];
$truck_number = $_REQUEST['truck_number'];

// Performing insert query execution 
// Table name is college

$sql = "INSERT INTO liquid VALUES ('$company_name',
'$date ', '$time', '$source', '$truck_number ')";

if (mysqli_query ($conn, $sql)){
echo "<h3>data stored in database successfully."
. "Please browse your localhost php, my admin"
. "to view the updated data</h3>";
echo n12br("\n$company_name\n $date\n"
. "$time\n $source\n $truck_number");
} else {
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
//close connection
mysqli_close($conn);
?>

</center>
</body>
</html>