<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          $name = strip_tags(trim($_POST["name"]));
          $name = str_replace(array("\r","\n"),array(" "," "),$name);
          $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
          $message = trim($_POST["message"]);

          if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
               http_response_code(400);
               echo "Oops! There was a problem with your submission. Please complete the form and try again.";
               exit;
          }

          $recipient = "dylan@msptechservices.com";
          $subject = "Website message from $name";

          $email_content = "Name: $name\n";
          $email_content .= "Email: $email\n\n";
          $email_content .= "Message:\n$message\n";

          $email_headers = "From: $name <$email>";

          if (mail($recipient, $subject, $email_content, $email_headers)) {

          http_response_code(200);
          echo "Thank you! Your message has been sent. We will contact you soon.";
          } else {

               http_response_code(500);
               echo "Oops! Something went wrong and we couldn't send your message.";
          }

     } else {

          http_response_code(403);
          echo "There was a problem with your submission. Please try again.";
     }
?>