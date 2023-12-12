<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myQuery = $_POST['myQuery'];
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myPhone = $_POST['myPhone'];
    $mesg = $_POST['mesg'];

    //  echo "$myQuery </br>";
    //  echo "$myName </br>";
    //  echo "$myEmail </br>";
    //  echo "$myPhone </br>";
    //  echo "$mesg </br>";

     include './dbcon.php';

     $insertQuery = "INSERT INTO contact_us (myQuery, myName, myEmail, myPhone, mesg) VALUES (:myQuery, :myName, :myEmail, :myPhone, :mesg)";
     $insertStmt = $pdo->prepare($insertQuery);
     $insertStmt->execute([
         'myQuery' => $myQuery,
         'myName' => $myName,
         'myEmail' => $myEmail,
         'myPhone' => $myPhone,
         'mesg' => $mesg
     ]);
     ?>
 
     <!DOCTYPE html> 
     <html lang="en"> 
     
     <head> 
         <meta charset="UTF-8"> 
         <meta name="viewport" content= 
             "width=device-width, initial-scale=1.0"> 
     
         <link rel="stylesheet" href="style.css"> 
         <title>ContactUs</title> 
     </head> 
     
     <body> 
         <h3 style='text-align:center; margin:10px;'>Thanks for contacting us!</h3>
         <div id="btnHomepage"><a href="./index.html">Go to Homepage</a></div>
     
     </body> 
     
     </html> 
     <?php
 } else {
     header("Location: ./contact.html");
 }
    
?>