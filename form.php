<?php 
//if (isset($_POST['name']) && isset($_POST['email'])) {
//$name = $_POST['name'];
//$email = $_POST['email'];
//$to = 'info@nyumbanitaxi.com';
//$subject = "New Subscriber";
//$body = '<html>
//            <body>
//                <h2>Feedback- example.com</h2>
//                <hr>
//                <p>Name<br>'.$name.'</p>
//                <p>Email<br>'.$email.'</p>
//            </body>
//        </html>';
//
////headers
//$headers = "From: ".$name." <".$email.">\r\n";
//$headers = "Reply-To: ".$email."\r\n";
//$headers = "MIME-Version: 1.0\r\n";
//$headers = "Content-type: text/html; charset=utf-8";
////send
//$send = mail($to, $subject, $body, $headers);
//if ($send) {
//    echo '<br>';
//    echo 'Thanks for contcting us. We will get back to you shortly.';
//} else {
//    echo 'error';
//}
//}

if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $town=$_POST['town'];

  //send mail 
 $to='	info@nyumbanitaxi.com';
 $subject='New Subscriber';
 $body='<html>
            <body>
                <h3>Feedback</h3>
                <hr>

                <p> Name : '.$name.'</p>
                <br>

                <p> Phone Number : '.$phone.'</p>
                <br>

                <p> Email : '.$email.'</p>
                <br>
                
                <p> Town : '.$town.'</p>

            </body>

        </html>';

 $headers  ="From:".$name."<".$email.">\r\n";
 $headers .="reply-To:".$email."\r\n";
 $headers .="NINE-Version: 1.0\r\n";
 $headers .="Content-type: text/html; charset=utf-8";


//confirmation mail
 //$user=$email;
 //$usersubject = "Nyumbani Taxi";
 //$userheaders = "From: info@nyumbanitaxi.com\n";
 //$usermessage = "Thank you for contacting us. We will get back to you as soon as possible.";


//sending process
 $send=mail($to, $subject, $body, $headers);
 //$confirm=mail($user, $usersubject, $userheaders,$usermessage );

 if($send){
  echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
 }

 else{
  echo "Failed";
 }

}
    
?>