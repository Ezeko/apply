<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <title>EZEKIELCODES - AUTOEMAIL sender sample</title>
    
        <link rel="icon" type="image/jpg" href="https://res.cloudinary.com/ezeko/image/upload/v1566502038/images/31517324_l4rbyl.jpg" />
    <style>
    body{
    background-color: white;
    color:#2148AA;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 5%;
    padding-left:25%;
    padding-right:25%;
    
}
h1{
    font-weight: bolder;
    text-align: center
}
h4{
    font-weight: lighter;
    text-align: center;
    color: #5680E9;
}
input{
    text-align: center;
    outline: none;
    width: 100%;
    height: 32px;
    font-size: 200%;
    margin-bottom: 2%;
    border: none;
    border-bottom: solid 1px #C1C8E4;
}
input[type='submit']{
    background-color: #5680E9;
    color: white;
}
</style>
   
</head>
<body>
    <div>
    <section id="form">
    
    <form action="aamailer.php" method="POST">
        <input type="text" name="firstname" placeholder="Recipient firstname" required>
        <input type="text" name="lastname" placeholder="Recipient lastname" required>
        <input type="email" name="email" placeholder="Recipient Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <input type="number" minlength="8" name="ticketID" placeholder="ticket ID" required>
        <input type="submit" value="Send Email" >
    </form>
    </section>
    </div>
</body>
</html>