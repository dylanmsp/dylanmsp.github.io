<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     $contact = $_POST['contact'];
     $email = filter_var($email, FILTER_SANITIZE_EMAIL);

     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          if (!preg_match("/^[0-9]{10}$/", $contact)) {
               // echo "Please put in a valid phone number, no dashes”;
          } else {
               // $subjectCust = ‘Thank you for your message ‘.$name;
               // $subjectOwner = ‘Website message from: ‘ . $name;
               // $headers = ‘MIME-Version: 1.0’ . “\r\n”;
               // $headers .= ‘Content-type: text/html; charset=iso-8859-1’ . “\r\n”;
               // $headers .= ‘From:’ . $email. “\r\n”;
               
               // $template2Customer = ‘Hello ‘ . $name . ‘,’
               // . ‘Thank you for contacting us.’
               // . ‘Your message to us: ‘
               // . ‘Full Name:’ . $name . ”
               // . ‘Email Address:’ . $email . ”
               // . ‘Telephone:’ . $contact . ”
               // . ‘Message:’ . $message . ”
               // . ‘This is a confirmation mail.’
               // . ”
               // . ‘We will contact you as soon as possible.’
               // . ‘http://www.msptechservices.com’;
               
               // $template2SiteOwner = ‘Website message from: ‘
               // . ‘Full Name: ‘ . $name . ”
               // . ‘Email Address: ‘ . $email . ”
               // . ‘Telephone: ‘ . $contact . ”
               // . ‘Message: ‘ . $message . ”
               // . ”
               // . ‘This message was sent from: http://www.msptechservices.com‘;
               
               // $sendmessage2Cust = $template2Customer;
               // $sendmessage2SiteOwner = $template2SiteOwner;
               
               // $sendmessage2Cust = wordwrap($sendmessage2Cust, 70);
               // $sendmessage2SiteOwner = wordwrap($sendmessage2SiteOwner, 70);
               
               // mail($email, $subjectCust, $sendmessage2Cust, $headers);
               // mail(“dylan@msptechservices.com”, $subjectOwner, $sendmessage2SiteOwner, $headers);
               
               // echo “Your message has been received. We will contact you soon.”;
          }
     } else {
          // echo “*** INVALID EMAIL ***”;
     }
?>