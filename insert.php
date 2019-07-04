<?php

$connect = mysqli_connect("localhost","root","","live_edit");

if(isset($_POST['surname'])){

        $surname = $_POST['surname'];
        $firstname = $_POST['firstname'];
        $email= $_POST['email'];
        $phone_number = $_POST['phone_number'];
        if(!empty($surname) && !empty($firstname) && !empty($email) && !empty($phone_number))
        {
            $surname = mysqli_real_escape_string($connect,$surname);
            $firstname = mysqli_real_escape_string($connect,$firstname);
            $email = mysqli_real_escape_string($connect,$email);
            $phone_number = mysqli_real_escape_string($connect,$phone_number);

            $sql = "INSERT INTO biodata(surname,firstname,email,phone_number) VALUES('{$surname}','{$firstname}','{$email}','{$phone_number}')";
            if(mysqli_query($connect,$sql))
            {
                echo "Data successfully registered";
            }
        }
}





?>