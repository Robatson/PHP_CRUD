<?php include "db.php";

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $encrypted_password=md5($password);


    $filename = $_FILES["photo"]["name"];

    $tempname = $_FILES["photo"]["tmp_name"];  

    

        $folder = "image/".$_FILES["photo"]["name"];
        
        move_uploaded_file($tempname,$folder);
  
    $query= "INSERT into registrations(firstname,lastname,birthday,gender,email,phone,password,photo)";
    $query .="Values ('$firstname','$lastname','$birthday','$gender','$email','$phone','$encrypted_password','$filename')";

    print_r($query);

  echo "<script>document.location='view.php'</script>";

    
    $result = mysqli_query($connection,$query);
    if(!$result){
    
        die('Query Failed'.mysqli_error());
    
    }
  }

?>