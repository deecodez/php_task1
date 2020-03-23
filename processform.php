<?php



    // print_r($_POST);


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    echo"$first_name" ."<br/>";
    echo"$last_name" ."<br/>";
    echo"$email" ."<br/>";
    echo"$department" ."<br/>";
    echo"$gender" ."<br/>";
    echo"$message" ."<br/>";


    $feedback = "Dear [website owner] <br/> you have a new contact message <br/>";

    $feedback  .= "<strong> The contact details below: </strong>";

    $feedback  .= "First Name: " . $first_name . "<br/>";
    $feedback  .= "Last Name: " . $last_name . "<br/>";
    $feedback  .= "Email: " . $email . "<br/>";
    $feedback  .= "Department: " . $department . "<br/>";
    $feedback  .= "Gender: " . $gender . "<br/>";
    $feedback  .= "Message: " . $message . "<br/>";


 
$myfile = fopen("$first_name.txt", "w") or die("Unable to open file!");

fwrite($myfile, $feedback );
fclose($myfile);


?>


