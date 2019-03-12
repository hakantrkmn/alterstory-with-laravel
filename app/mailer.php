<?php

namespace App;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\User;
use Illuminate\Database\Eloquent\Model;

class mailer extends Model
{
    protected $mailer;
    public function __construct()
{
    parent::__construct();

    $this->mailer = new PHPMailer(true);
        $this->mailer->CharSet = 'utf-8';
        $this->mailer->SMTPDebug = 0;
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.mailtrap.io';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = '71c6d39b1291a3';
        $this->mailer->Password = 'bfbdc9a1acc661';
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->Port = 465;
        $this->mailer->setFrom('support@alterstory.org', 'AlterStory');
}
    public function sendMail(User $user)
    {
        try {
    //Server settings
    $this->mailer->SMTPDebug = 2;                                 // Enable verbose debug output
    $this->mailer->isSMTP();                                      // Set mailer to use SMTP
    $this->mailer->Host = '	smtp.mailtrap.io';  // Specify main and backup SMTP servers
    $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
    $this->mailer->Username = '71c6d39b1291a3';                 // SMTP username
    $this->mailer->Password = 'bfbdc9a1acc661';                           // SMTP password
    $this->mailer->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $this->mailer->Port = 465;                                    // TCP port to connect to

    //Recipients
    $this->mailer->setFrom('support@alterstory.org', 'AlterStory');
    $this->mailer->addAddress($user->mail, $user->ad);     // Add a recipient
    // Attachments
    // $this->mailer->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $this->mailer->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $this->mailer->isHTML(true);                                  // Set email format to HTML
    $this->mailer->Subject = "sa krdşm $user->ad";
    $this->mailer->Body    = 'This is the HTML message body <b>in bold!</b>';
    $this->mailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $this->mailer->send();
        } catch (Exception $e) {
         echo 'Message could not be sent. Mailer Error: ', $this->mailer->ErrorInfo;
        }

        }
    
}
