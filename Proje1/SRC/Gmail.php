<?php
// require_once 'IMailSender.php';
class Gmail implements IMailSender{
    public function send($to,$message){
        echo "$to mailinə Gmail ilə \"$message\" mesajı göndərildi";
    }
}