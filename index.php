

<?php 
require 'vendor/autoload.php';
if(isset($_POST['submit'])){
  $sendgrid = new SendGrid('app42668519@heroku.com', 'x5w5nn9j5494');

   $message = new SendGrid\Email();
   $message->addTo('bryanbenson83@gmail.com')->
              setFrom($_POST['email'])->
                       setSubject("Lunarshucks Email List submission")->
                                setText("The sender of this email wishes to be informed about Lunar Shucks.")->
                                         setHtml('<strong>The sender of this email wishes to be informed about Lunar Shucks.</strong>');
   $response = $sendgrid->send($message); 
   $message = new SendGrid\Email();
   $message->addTo($_POST['email'])->
              setFrom('guydelperthehelper@gmail.com')->
                       setSubject("LunarShucks Email List Submission")->
                                setText("Hi " .  $_POST['email'] . "!" . "Thanks for your interest in Lunar Shucks! We need some help defeating the Archeologist, so stay tuned for more info!")->
                                         setHtml("<p>Hi " .  $_POST['email'] . "! </p><br></br>" . "<p>Thanks for your interest in Lunar Shucks! We need some help defeating the Archeologist, so stay tuned for more info!</p><br></br> </p>-- The Study Clash Team</p>");
   $response = $sendgrid->send($message); 
   echo "Mail Sent. Thank you.";
}
?>

<?php include_once("index.html"); ?>
