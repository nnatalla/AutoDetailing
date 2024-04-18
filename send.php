<?php


//varible setting
 $name= $_REQUEST['name'];
 $email = $_REQUEST['Email'];
 $message = $_REQUEST['Message'];
 $subject = "AutoDetailing wiadomość z formularza!";

 $to ="nitychoruknatalia@gmail.com";  // change receiving email id

 $content = "IMIĘ : ". $name. "\r\nE-MAIL : ". $email. "\r\n \r\nTREŚĆ WIADOMOŚCI : \r\n \r\n".$message ; // name [break] email [break] message



// check input fields
if ( empty($name)|| empty($email)|| empty($message))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}
else
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}


?>