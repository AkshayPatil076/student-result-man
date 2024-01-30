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
                // echo"Yes";

                $stu="SELECT*FROM student WHERE roll ='$roll'";
                $res1=$conn->query($stu);

                while($row = mysqli_fetch_assoc($res1) ){
                        echo"<br>Name : &#160 &#160 &#160 &#160 &#160".$row["name"]."<br> <br>Class : &#160 &#160 &#160 &#160 &#160".$row["class"]."<br> <br>Roll No . :  &#160 &#160".$row['roll'];
                }

                $marks="SELECT*FROM result WHERE roll ='$roll'";
                $res2=$conn->query($marks);

                while($rows = mysqli_fetch_assoc($res2) ){
                      ?>
                  <style>
                    button{
                      position: relative;
                      top: 4cm;
                      right: 2cm;
                    }
                    body{
                      overflow-y: hidden;
                      overflow-x: hidden;
                    }
                    table{
                      position: relative;
                 
                      top: 4cm;
                      text-align: center;
                       font-size: 0.8cm;
                       
                    }
                  </style>
                       
                       
                       <?php   
                       
                       echo " <table style='float:right'>
                       <tr>
                         <th>Subject</th>
                         <th>Marks</th>
                       </tr>
                       <tr>
                         <td>PHP</td>
                         <td>". $rows['s1']."</td>
                       </tr>
                       <tr>
                         <td>Python Programming</td>
                         <td>" . $rows['s2']."</td>
                       </tr>
                       <tr>
                         <td>JAVA Programming</td>
                         <td>".$rows['s3'] ."</td>
                       </tr>
                       <tr>
                         <td>R Programming</td>
                         <td>".$rows['s4']."</td>
                       </tr>
                       <tr>
                         <td>MysQL DB</td>
                         <td>".$rows['s5']."</td>
                       </tr>
                       <tr>
                         <td>Web Development</td>
                         <td>". $rows['s6']."</td>
                       </tr>
                       <tr>
                         <td>SoftwareDevelopmen</td>
                         <td>".$rows['s7']."</td>
                       </tr>
                     </table>

";
                       ?>
                       <button onclick="window.print()">Print Result</button>

                          <h3><?php  

                            $total_marks = $rows['s1']+$rows['s2']+$rows['s3']+$rows['s4']+$rows['s5']+$rows['s6']+$rows['s7'];

                            $marks = 100*7;

                            $persentage =($total_marks / $marks)*100 ;
                            echo "persentage"." &#160 ". $persentage."%";

                            if($persentage > 36.00){
                              echo "<br><br> Result:  &#160 &#160"."Pass";
                            }
                            else{
                              echo "Fale";
                            }

                          ?></h3>

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
