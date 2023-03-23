<?
   if(isset($_POST["submit"])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     
     $message=$_POST["this is your text email "];
     $toEmail = $_POST["hansikak1998@gmail.com"];

     $mailHeaders = "Name: " .$name.
     "\r\n Email: " .$email.
     "\r\n Message: " .$message. "\r\n";

     if(mail($toEmail, $name, $mailHeaders)){
        $message ="your information recieved successfully";
     }
     else{
        echo "error";
     }

   }
?>