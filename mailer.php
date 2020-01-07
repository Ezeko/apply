<?php
  $email= $_REQUEST['email'];
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $ticketID = $_REQUEST['ticketID'];
  $team = "ADMIN";
  $to = $email;
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers  .= "From: NO-REPLY<no-reply@mydomain.com>" . "\r\n";
  $subject = $_REQUEST['subject'];
  $message = '<html>
                  <body style="color:grey">
                      <p style="color: green">Hi '.$firstname.' '.$lastname.'</p>
                      <p>
                          We recieved below details from you. Please use given Request/Ticket ID for future follow up:
                      </p>
                      <p>
                          Your Request/Ticket ID: <b>'.$ticketID.'</b>
                      </p>
                      <p>
                      Thanks,<br>
                      '.$team.' Team.
                      </p>
                  </body>
              </html>';
  $success = mail( $to, $subject, $message, $headers ); 
  
  if( $success == true){
  echo ("Email sent to $email successfully!!!");
  }else{
  
 echo "<script>alert('COULD NOT SEND EMAIL TO $email!!!'); window.location.replace('index.php');</script>";
  }
?>