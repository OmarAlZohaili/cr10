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
  .imgrow{
    margin-top: 5vh;
  }
  .imgrow img{
    border:2px solid blue;
    max-height: 40vh;
    max-width: 35vh;
  }
  .container-fluid{
    background-color: #713A1B;
    color: white;
  }
  #title{
    font-size: 25px;
  }
  p{
    font-size: 18px;
    font-family: : curier;
  }
  a {
      color: white;
    }
  @import url('https://fonts.googleapis.com/css?family=Raleway');
    h1{
      font-family: 'Raleway', sans-serif;
      font-size:15pt;
    }
    #header img{
      max-height: 100px;
      width: 100%;
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
            include "printrow.php";
              $sqlstatement = "SELECT * FROM products";
              $photos = mysqli_query($conn,$sqlstatement);
              $linkArray = Array();
              $counter = 0;
                echo "<div id=\"allproducts\">";
              $row = mysqli_fetch_array($photos, MYSQLI_NUM);
              while ($row != NULL){
                print_row($row); 
                
               
                
               
                $linkArray[$counter] = $row[0];
                $counter += 1;
                $row = mysqli_fetch_array($photos, MYSQLI_NUM);
              }
              echo "</div>";
              echo "</div>";
             // var_dump($_SESSION);
        



            ?>

<script>
            $(document).ready(function(){
            $("#submit").click(function(){
            var productName = $("#productName").val();
            var productPrice = $("#productPrice").val();
            
            var productDetail = $("#productDetail").val();
            var productImg = $("#photoLink").val();
           
           
            var dataString = 'productName1='+ productName;
            var dataString1 = '&productPrice1='+ productPrice;
            var dataString2 = '&productDetail1='+ productDetail;
            
            var dataString3 = '&photoLink1='+ productImg;
           \
           
            
            
            dataString4=dataString;
            dataString4+=dataString1;
            dataString4+=dataString2;
            dataString4+=dataString3;
            

           

            if(productName==''){
            alert("Please Fill All Fields");
            }else{
            // AJAX Code To Submit Form.
              $.ajax({
                type: "POST",
                url: "exerciseajax.php",
                data: dataString7,
                cache: false,
                success: function(result){
                  alert(result);
                 // window.location.reload();
                 $('#allproducts').prepend(result);
                }
            });
            }
 return false;
       });
      });

    $(document).ready(function()
    {
        $(".delete_video").click(function()
        { console.log("Hallo");
            var del_id = $(this).val();

            console.log(del_id);
            $.ajax({
                type:'POST',
                url:'delete.php',
                data:'delete_id='+del_id,
                cache: false,
                success: function(data)
                {
                  alert(data);
                    //window.location.reload();
                    $("#"+data).remove();
                }
            });
        });
    });





</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script-ajax.js" type="text/javascript"></script>
</body>
</html>
<?php ob_end_flush(); ?>