<?php
require"config.php";
if(isset($_POST['submit']))
    {

        $b=$_POST['name'];
        $c=$_POST['sex'];
        $d=$_POST['hair'];
        $f=$_POST['eyes'];
        $g=$_POST['height'];
        $h=$_POST['weight'];
        $j=$_POST['finger'];
        $k=$_POST['glass'];
	
        if($b=='' && $c=='' && $d=='' && $f=='' && $g=='' && $h=='' && $j=='' && $k=='')
		      {
          		  echo"please fill in all the information";
       		  }
        else
              {
            		$img=$_FILES['image']['tmp_name'];
           		    $imgcontent=addslashes(file_get_contents($img));
        	                 $insert=$conn->query("Insert into criminal(image,name,sex,hair,eyes,height,weight,finger,glass)values('$imgcontent','$b','$c','$d','$f','$g','$h','$j','$k')");
           		 if($insert)
                    {
                        echo"registered successfully";
                      ?>
                        <script type="text/javascript"> windows.location="searchcriminal.php";</script>	
<?php>
                    }
                 else
	               {
                        echo"registered failed";
                                ?>
                        <script type="text/javascript">windows.location="addcriminal.php";</script>
<?php
                
                   }
            }
    }

?>
<html>
<head>
<title>admin registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1 class="title"><i>Criminal Data Entry</i></h1>
    <div class="adminregform">
                      
        <form action="addcriminal.php" method="post" enctype="multipart/form-data"> Select image to upload:
            <input type="file" name="image" id="fileToUpload">
             
            <div class="form-group" auto>
                <label style="color:black">Name:</label>
                <input type="text" name="name" id="name"  required >
            </div><br>

             <div class="form-group">
                <label style="colorL:black">Sex:</label>
                <input type="text" name="sex" id="sex" required >
            </div><br>

             <div class="form-group">
                <label style="colorL:black">Hair:</label>
                <input type="text" name="hair" id="hair"  required >
            </div><br>

            <div class="form-group">
                <label style="color:black">Eyes:</label>
                <input type="text" name="eyes" id="eyes"  required>
            </div><br>

            <div class="form-group">
                <label style="color:black">Height:</label>
                <input type="text" name="height" id="height"  required >
            </div><br>

            <div class="form-group">
                <label style="color:black">Weight:</label>
                <input type="text" name="weight" id="weight"  required >    
             </div><br>

            <div class="form-group">
                <label style="color:black">Fingerprint:</label>
                <input type="text" name="finger" id="finger"  required >
            </div><br>
             <div class="form-group">
                <label style="color:black">Does he wear any glasses:</label>
                <input type="text" name="glass" id="glass"  required >
            </div>
            <div>
                <button class="btnreg" id="submit" name="submit">Register</button>
            </div>

        </form>
</div>
    </div>
</body>
</html>