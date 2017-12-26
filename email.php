<?php
$servername="localhost";
$username="id3783995_email";
$password="email1991";
$dbname="id3783995_realtech";
//make a Mysql connection
$conn=new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
if(isset($_POST['submit']))
{
    $sql="INSERT INTO contact_us(name,email,number,message)VALUES('$_POST[name]','$_POST[email]','$_POST[number]','$_POST[message]')";
    
    $result=$conn->query($sql);
    
}
?>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message=$_POST['message'];
    $to="mudassartousifeie@gmail.com";
    $header="from:$name<$email>";
    $message="Name: $name \n\nEmail: $email \n\nNumber:$number \n\nMessage: $message";
   if(mail($to,$number,$message,$header))
   {
       echo "Email sent";
   }
   else
   {
       echo "Error:please try again later";
   }
}
?>
<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="post">
        <p>Name<br/>
        <input type="text" name="name"/></p>
        <p>Email<br/>
        <input type="text" name="email"/></p>
        <p>Number<br/>
        <input type="text" name="number"/></p>
        <p>Message<br/>
        <textarea name="message" cols="30" rows="10">
        </textarea></p>
        <p><input type="submit" value="Send Email" name="submit" /></p>
        </form>
    </body>
</html>