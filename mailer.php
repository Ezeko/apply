<?php
  $email= $_REQUEST['email'];

  $to = $email;
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers  .= "From: Ezekiel Adewole Adejobi<adejobiezekieladewole@gmail.com>" . "\r\n";
  $subject = $_REQUEST['subject'];
  $message = '<html>
            <link rel="icon" type="image/jpg" href="https://res.cloudinary.com/ezeko/image/upload/v1566502038/images/31517324_l4rbyl.jpg" />
                  <body style="color:grey">
                      <p style="color: green">Dear Hiring Manager,
                      
                      </p>
                      <p>
                      APPLICATION FOR THE POST OF A WEBSITE DEVELOPER
                          
                      I write in response to your advertisement of the vacant position in your organization. 
                      </p>
                      <p>

                        I am a seasoned fullstack website developer with more than three years experience in HTML5, CSS3, JavaScript (ES6, ES7,ES8, fetchAPI, xmlhttprequest),react, nodeJs, and also PHP MYSQL. Some Example projects are listed in the bracket below. 
                        <ul>
                        <li><a href="http://startdown.dx.am"> Click here to check startdown</a>
                        <li><a href="http://ezekoconcept.dx.am/login.php"> Click here to check to check Ezekoconcept</a>
                        <li><a href="https://trim.ng"> Click here to check to check trimly</a>
                        <li><a href="https://hng6teamsuccess.000webhostapp.com/register.html"> Click here to check to check hngteamsuccess project</a>
                        <li><a href="https://spendless-hng.000webhostapp.com"> Click here to check to check Spendless</a>
                        <li><a href="https://dlbcore.000webhostapp.com"> Click here to check to check dlbc registration page</a>
                        </ul>
                        </p>
                        <p>
                         I also have good knowledge of version control system.

                        I am conversant with agile frameworks and also with security measures.
                        My GitHub handle is <a href="https://github.com/Ezeko"> <img src="https://res.cloudinary.com/ezeko/image/upload/v1578773356/images/github_af6hr1.png" alt="Github Image"> </a>.

                        My resume is attached for your kind perusal. Looking forward to hearing from you soon and thanks for your time and consideration.

                    
                      </p>
                      <p>
                      Yours Sincerely,<br>
                      Ezekiel ADEJOBI.
                      </p>
                      <a href="https://docs.google.com/document/d/1oIbM81srxtKqLGw2X9hSAnVb_RWw39JwOhiyl84xlRY/edit">Click here to view resume</a>
                  </body>
              </html>';
  $success = mail( $to, $subject, $message, $headers ); 
  
  if( $success == true){
  echo ("Email sent to $email successfully!!!");
  }else{
  
 echo "<script>alert('COULD NOT SEND EMAIL TO $email!!!'); window.location.replace('index.php');</script>";
  }
?>