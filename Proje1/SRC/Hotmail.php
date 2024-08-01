<?php
// require_once 'IMailSender.php';
class Hotmail implements IMailSender{
    public function send($to,$message){
        echo "$to mailinə Gmail ilə \"$message\" mesajı göndərildi";
    }
}