<! DOCTYPE html>
<html>
<head>

<title>Welcome</title>

</head>

<body>

<? php


servername => localhost
// username => root
// password => empty
// database name => cmrit
$conn = mysqli_connect ("localhost", "root", "", "cmrit");
// Check connection
if ($conn === false) {
die ("ERROR: Could not connect. "
. mysqli_connect_error ()) ;

// Taking all 5 values from the form data (input)
$name = $_REQUEST ['name'];
$email = $_REQUEST ['email'];
$user = $_REQUEST ['user'];
$pass = $_REQUEST ['pass'];
$confirm = $_REQUEST ['confirm'];
$mobile = $_REQUEST ['mobile'];
// Performing insert query execution
// here our table name is student
$sql = "INSERT INTO student VALUES ('$name', '$email', '$user', '$pass', '$confirm', '$mobile') ";
}
if (mysqli_query ($conn, $sql) ) {
        echo "<h3>data stored in a database successfully .< /h3>";
        echo nl2br("\n$name\n$email\n ". "$user \n $mobile");

} else{
	echo "ERROR: $sql. ". mysqli_error ($conn);
}
// Close connection
mysqli_close ($conn) ;
?>
</body>

</html>