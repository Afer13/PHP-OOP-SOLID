<?php

interface IMailSender{
    function send($to,$message);
}