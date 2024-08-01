<?php

namespace src;
class ParaGonderici{
    public function paraGonder(IBank $iBank,$amount,$accountNo){
        $iBank->paraTransfer($amount,$accountNo);
    }
}