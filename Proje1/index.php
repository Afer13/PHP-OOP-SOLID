<?php 
// require_once 'MailSender.php';
// require_once 'Gmail.php';
// require_once 'Hotmail.php';
function startMyProje(){
    $mailSender=new MailSender();
    $mailSender->send(new Hotmail());
}

startMyProje();