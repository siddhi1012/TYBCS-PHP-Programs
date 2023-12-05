<?php

$email=$_POST['email'];

$z= '/^[a-z 0-9-]+(\.[a-z 0-9-]+)*@[a-z 0-9]+(\.[a-z 0-9-]+)*(\.[a-z]{2,3})$/';

if(preg_match($z,$email)){

            echo $email .  " <br> it is valid email id";

           

}

else

{

            echo $email ."<br> invalid email,Please try again.";

           

            
}

?>