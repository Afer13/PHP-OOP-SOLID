<?php
// require_once 'IMailSender.php';
class MailSender{
    public function send(IMailSender $iMailSender){
        $iMailSender->send("aferrehimov@gmail.com","Hollo Word!");
    }
}