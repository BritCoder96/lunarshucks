

<?php 
require 'vendor/autoload.php';
if(isset($_POST['submit'])){
  $sendgrid = new SendGrid('app42668519@heroku.com', 'x5w5nn9j5494');

   $message = new SendGrid\Email();
   $message->addTo('bryanbenson83@gmail.com')->
              setFrom($_POST['email'])->
                       setSubject("Study Clash Email List submission")->
                                setText("The sender of this email wishes to be informed about study clash.")->
                                         setHtml('<strong>The sender of this email wishes to be informed about study clash.</strong>');
   $response = $sendgrid->send($message); 
   $message = new SendGrid\Email();
   $message->addTo('scott.benson96@gmail.com')->
              setFrom($_POST['email'])->
                       setSubject("Study Clash Email List submission")->
                                setText("The sender of this email wishes to be informed about study clash.")->
                                         setHtml('<strong>The sender of this email wishes to be informed about study clash.</strong>');
   $response = $sendgrid->send($message); 
   $message = new SendGrid\Email();
   $message->addTo($_POST['email'])->
              setFrom('studyclash@gmail.com')->
                       setSubject("Study Clash Email List Submission")->
                                setText("Hi " .  $_POST['email'] . "!" . "Thanks for your interest in Study Clash! We are working hard to get our site up and running and will be sure to keep you updated. -- The Study Clash Team")->
                                         setHtml("<p>Hi " .  $_POST['email'] . "! </p><br></br>" . "<p>Thanks for your interest in Study Clash! We are working hard to get our site up and running and will be sure to keep you updated. </p><br></br> </p>-- The Study Clash Team</p>");
   $response = $sendgrid->send($message); 
   echo "Mail Sent. Thank you.";
}
?>

<?php include_once("index.html"); ?>
