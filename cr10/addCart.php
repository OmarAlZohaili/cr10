
<?php
  include 'dbconnect.php';
	


// Selecting Database
//Fetching Values from URL
$productId=$_POST['productId'];

$userId=$_POST['userId'];

 //var_dump($_POST);
$sql = "INSERT INTO cart (productId, userId) VALUES (\"$productId\", \"$userId\")";

if (mysqli_query($conn, $sql)) {
	$sql = "SELECT * FROM products WHERE productId = \"$productId\"";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<h3>" . $row['productName'] . "</h3>";
    echo "<p>" . "$" . $row['productPrice'] . "</p>";
    echo "<img class=\"img-responsive\" src=\"".$row['productImg'] ."\">" . "<br>";
   // echo "<p>".$productName."</p>";
   // echo "<p>".$productPrice."</p>";
    // echo '<button action="delete.php" id="delete" value="'.$productId.'" id="'.$videoId.'" type="button">Remove</button>';
    //echo $sql;
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}
mysqli_close($conn);
?>