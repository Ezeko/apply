<?php
  $email= $_REQUEST['email'];

  $to = $email;
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers  .= "From: NO-REPLY<no-reply@mydomain.com>" . "\r\n";
  $subject = $_REQUEST['subject'];
  $message = '<html>
                  <body style="color:grey">
                      <p style="color: green">Dear Hiring Manager,

                      APPLICATION FOR THE POST OF A WEBSITE DEVELOPER
                      
                      </p>
                      <p>
                          We recieved below details from you. Please use given Request/Ticket ID for future follow up:
                      </p>
                      <p>
                      I write in response to your post about your search to fill the vacant position in your organization.
                      
                      I am a seasoned fullstack website developer with core competencies in html5, css3, bootsrap4, JavaScript, php mysql, mongodb, react, expressJs and NodeJs.
                      
                      I have full knowledge of version control system (git). I also understand fully well unit and integrated testing and also have an in-depth knowledge of agile frameworks.
                      
                      Kindly find below the attached copy of my resume. Looking to hearing from you soon. Thanks for your time and consideration.
                      
                    
                      </p>
                      <p>
                      Yours Sincerely,<br>
                      Ezekiel ADEJOBI.
                      </p>
                      <a href=''>Click here to view resume</a>
                  </body>
              </html>';
  $success = mail( $to, $subject, $message, $headers ); 
  
  if( $success == true){
  echo ("Email sent to $email successfully!!!");
  }else{
  
 echo "<script>alert('COULD NOT SEND EMAIL TO $email!!!'); window.location.replace('index.php');</script>";
  }
?>