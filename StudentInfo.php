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

if (isset($_POST['form_submitted']))
{
    echo "<center><h2 style='font-family: Sylfaen'>Student Details</h2></center>";
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
    echo "<tr><td><lable style='font-weight: bold'>Percentage     </lable></td><td>".($marks/100*100)."%</td></tr>";
    echo "<tr><td><lable style='font-weight: bold'>address             </lable></td><td>".$address."</td></tr> </table>";
}
else
{
    echo "please submit the form";
}
?>