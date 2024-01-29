<?php 
    $host = "localhost";
    $user="root";
    $password = "";
    $DB="sms2024";

    $conn = mysqli_connect($host,$user,$password,$DB);

    if(!$conn){
        die("Connection Error".mysqli_connect_error());
    }
    // echo "yes";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roll = $_POST["roll"];
        $class = $_POST["class"]; 
     
        // You should properly sanitize and validate user inputs before using them in queries to prevent SQL injection.
        $sql = "SELECT * FROM result WHERE roll = '$roll' AND class = '$class'";
        $result = $conn->query($sql);
     
        if ($result->num_rows == 1) {
            // Login successful
            $_SESSION["roll"] = $roll;
              $_SESSION["class"] = $class;
            
              
              $student = "SELECT * FROM student WHERE class = '$class'   AND  roll = '$roll'  ";
              $res = $conn->query($student);  
            
            if($res->num_rows == 1)
            {
                $_SESSION["roll"] = $roll;
                $_SESSION["class"] = $class;
                // $_SESSION["nmae"] = $name;
                echo"Yes";

                $stu="SELECT*FROM student WHERE roll ='$roll'";
                $res1=$conn->query($stu);

                while($row = mysqli_fetch_assoc($res1) ){
                        echo"<br>".$row["name"]."<br>".$row["class"];
                }

                $marks="SELECT*FROM result WHERE roll ='$roll'";
                $res2=$conn->query($marks);

                while($rows = mysqli_fetch_assoc($res2) ){
                      ?>

                    


<?php
                        
                }
            
            //    echo $roll."<br>".$class."<br>".$res['name'];
            }
            else{
                echo "Not Avalavbel";
            }
          
                
            }
            else{
                echo "Not Avalavbel";
            }
        } 
        else {
            
            echo "Not Avalavbel";
        }
    
?>
