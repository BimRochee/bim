<?php
  if(isset($_POST['submit']))
  {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(empty($fullname) || empty($email) || empty($phone) || empty($subject) || empty($message))
    {
      header('location:index.php?error');
    }
    else
    {
      $to = "bemzagliam14@gmail.com";
      $headers = "From: $email";

      if(mail($to, $subject, $message, $headers))
      {
        header('Location:index.php?success');
      }
    }
  }
?>


