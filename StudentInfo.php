

<?php


/*-------------------------------------------file upload starts here-----------------------------------*/
$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
       // echo "Sorry, there was an error uploading your file.";
    }
}


/*-------------------------------------------file upload starts here-----------------------------------*/

$name = $_POST['sname'];
$dob = $_POST['dob'];
$gender = $_POST['genradio'];
$email = $_POST['email'];
$course = $_POST['course'];
$yop = $_POST['yop'];
$address = $_POST['address'];
$marks1=$_POST['marks1'];
$marks2=$_POST['marks2'];
$marks3=$_POST['marks3'];
$marks4=$_POST['marks4'];
$marks5=$_POST['marks5'];
$marks6=$_POST['marks6'];
$total=$marks1+$marks2+$marks3+$marks4+$marks5+$marks6;
$dateTime=$_POST['dateTime'];

if (isset($_POST['form_submitted']))
{
    echo "<html>";
    echo "
    <head>
    <title>Student Registration form</title>
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    

   <style type=\"text/css\">
        body{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }
        .stud-profile{
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;

        }
        .profile-img{
            margin-top: 10%;
            width: 70%;
            height: 50%;
        }
        td{
            padding: 10px;
        }
        input:focus{
            background-color: aquamarine;
        }
        .control-label.required:before {
            content: '*';
            color: red;
        }
        h3{
            font-family: Sylfaen;
            font-weight: bold;
        }

        #yop,#lyop{
            display: none;
        }
        #submit{
            width: 75px;
            height: 35px;
            font-weight: bold;
            box-shadow: 3px 3px aquamarine;
            border-color: aqua;
        }
    </style>
</head>
    ";
    echo "<body>";

    echo "
    <div class='container stud-profile'>
     <label style='float: right'>date and time : ".$dateTime."</label>
    <center><h3>Student Personal Details</h3></center>
    <div class='row'>
        <div class='col-md-4'>
           <div class='profile-img'>
                <img src='../img/".$target_file."' alt='stud_photo'/>
           </div>
                
         </div>
        <div class='col-md-8'>
       
           &emsp;&emsp;&emsp;&emsp; <center><table>
                <tr><td><lable style='font-weight: bold'>Student Name        </lable></td><td>".$name." </td></tr>
                <tr><td><lable style='font-weight: bold'>Date of Birth       </lable></td><td>".$dob."</td></tr>
                <tr><td><lable style='font-weight: bold'>Gender              </lable></td><td>".$gender."</td></tr>
                <tr><td><lable style='font-weight: bold'>Email id            </lable></td><td>".$email."</td></tr>
                <tr><td><lable style='font-weight: bold'>address             </lable></td><td>".$address."</td></tr> 
            </table></center></div>
    </div>
             <hr size='4' width='100%' style='border-top: 1px solid darkcyan'>
            <center><h3>Student Marks Details</h3></center>
        <br>
        <center>
             <table>
                    <tr><td><lable style='font-weight: bold'>course completed    </lable></td><td>".$course."</td></tr>
                    <tr><td><lable style='font-weight: bold'>year of passing     </lable></td><td>".$yop."</td></tr>
                    <tr><td><lable style='font-weight: bold'>Total Marks     </lable></td><td>".$total."</td></tr>
                    <tr><td><lable style='font-weight: bold'>Percentage     </lable></td><td>".($total/600*100)."%</td></tr>
             </table>
        </center>
    </div>
    
    
    ";
    echo "</body>";
echo "</html>";
}
else
{
    echo "please submit the form";
}







    /*echo "<center><h2 style='font-family: Sylfaen'>Student Details</h2></center>";
    echo "<table>";
   // echo "<tr><td></td><td></td><td><img src='../img/".$target_file."' alt='stud_photo'/></td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>Student Name        </lable></td><td>".$name." </td>
    <td rowspan='9'>&emsp;&emsp;&emsp;<img src='../img/".$target_file."' alt='stud_photo'/></td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>Date of Birth       </lable></td><td>".$dob."</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>Gender              </lable></td><td>".$gender."</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>Email id            </lable></td><td>".$email."</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>course completed    </lable></td><td>".$course."</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>year of passing     </lable></td><td>".$yop."</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>Mark     </lable></td><td>".$marks."</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>Percentage     </lable></td><td>".($marks/600*100)."%</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>address             </lable></td><td>".$address."</td></tr> </table>";
}
else
{
    echo "please submit the form";
}*/
?>