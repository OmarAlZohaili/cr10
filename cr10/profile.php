
<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
}else{
  $_SESSION['login'] = True;
}
 // select logged-in users detail
 $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['firstName']; ?></title>
<style>
	    
  
  .container-fluid{
    background-color: #696969;
    color: white;
  }
  @import url('https://fonts.googleapis.com/css?family=Raleway');
    h1{
      font-family: 'Raleway', sans-serif;
      font-size:15pt;
    }










</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

		 <?php echo "<div class=\"container-fluid\">";
            
            echo "<div class=\"row\">";
            echo "<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-9\">";
            echo "<img class=\"img-responsive\" src=\"0.png"."\">";
            echo "</div>";
            echo "</div>";
            echo "<div class=\"row\">";
              echo "<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">";
              echo "<h1>" . "Welcome" ." ".$userRow['firstName']. "!"."</h1>";
              echo "</div>";
              echo "<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-3\">";
              echo "<img class=\"img-responsive\" src=\"".$userRow['photolink'] ."\">";
              echo "<a href=\"logout.php?logout\">Sign Out</a>";
              echo "</div>";
              echo "</div>";
            ?>
       
         <?php

		$product_id= $_GET["id"];
		$res=mysqli_query($conn, "SELECT * FROM products WHERE productId=" . $product_id);
 		$productRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
 		
 		echo "<div class=\"row\">";
 		echo "<div class=\"col-md-12\">";
 		echo "<img class=\"img-responsive\" style='width:200px; height:250px' src='" . $productRow['productImg']. "'>";
		echo "<h2>".$productRow['productName']."</h2>"; 
		echo "<h3>"."$".$productRow['productPrice']."<b>"."</h3>"; 
		 
		echo "<p>".$productRow['productDetail']."</p>";
        echo "</div>";
        echo "</div>";
        echo "<a href=\"products.php\">Back to products list</a>";
        echo "</div>";
         ?>



         <script>
  function initMap(){
    //Map options
    var options = {
      zoom:10,
      center:{lat:48.299052, lng:16.564012}
    }

    //New map
    var map = new google.maps.Map(document.getElementById('map'), options);

    var icon = {
    url: "https://vignette.wikia.nocookie.net/tinyzoo/images/d/d2/Fruit_Basket.png/revision/latest?cb=20130130013048", // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
};

var marker = new google.maps.Marker({
    position: new google.maps.LatLng(48.394066, 16.663693 ),
    map: map,
    icon: icon
});


 
    var infoWindow = new google.maps.InfoWindow({
      content:'<p>We are open:</p><br></p>Mo-Fr: 08:00-17:00</p><br><p>Sa: 09:00-16:00</p><br><p>Sunday: closed</p>'
    });
    

    marker.addListener('click', function(){
       infoWindow.open(map, marker);
});



    

  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLsA8u10nhLIvj2GU1Gn3D8p4LHnQX9c4&callback=initMap">
    </script> 
          
</body>
</html>
<?php ob_end_flush(); ?>