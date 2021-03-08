<?php
session_start();
?>
<html>
    <title>
        Fetch Data From Database
    </title>
            <link href="style1.css" type="text/css" rel="stylesheet"/>  
    <body>
        <h1><center style="font-size:50px">Time for Action</center></h1>
        <table align="center" border="1px" bgcolor="brown" style="width:600px; line-height:40px;">
            <tr>
            <th colspan="9" ><h2>CRIMINAL LIST</h2></th>
            </tr>
            <th>image</th>
            <th>name</th>
            <th>sex</th>
            <th>hair</th>
                <th>eyes</th>
                <th>height</th>
                <th>weight</th>
                <th>finger</th>
                <th>glass</th>
            <?php
            $conn=mysqli_connect("localhost","root","","criminalreg");
            if($conn->connect_error)
            {
                die("connection failed:" . $conn->connect_error);
            }
            $sql="SELECT  * from criminal ";
            $result=$conn->query($sql);
             while($rows=mysqli_fetch_assoc($result))
              {
                  echo "
                  <tr>
                  <td>".$rows['image']."</td>
                  <td>".$rows['name']."</td>
                  <td>". $rows['sex']."</td>
                  <td>".$rows['hair']."</td>
                  <td>".$rows['eyes']."</td>
                  <td>".$rows['height']."</td>
                  <td>".$rows['weight']."</td>
                  <td>".$rows['finger']."</td>
                  <td>".$rows['glass'];
              }
            echo"</table>";
          
            $conn->close();
            ?>
        <h1> <a href="logout.php">logout</a></h1>   
        </table>
    </body>
</html>