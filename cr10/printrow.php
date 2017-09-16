 <?php   function print_row($row){
                $id = $row[0];
                 echo "<div class=\"row imgrow dummy1\" id=".$id.">";
                 echo "<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">";
                 echo "<div class=\"row\">";
                  echo "<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">";
                     echo "<img class=\"img-responsive\" src=\"".$row[2] ."\">";
                echo "</div>";
                  echo "<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">";
                    echo "<a id=\"title\" href='profile.php?id=" . $row[0] . "'>" . $row[1]. "</a>"."<br>";
                    echo "<p>"."$".$row[3]."</p>";
                    echo "<p>".$row[4]."</p>";
                    echo '<button class="delete_video" value="'.$id.'" id="'.$videoId.'" type="button">Delete</button>';
                    echo "</div>";
                     echo "</div>";
                     echo "</div>";
                     echo "<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3\">";
                     
                     echo "</div>";
                     echo "</div>";
              }
              ?>