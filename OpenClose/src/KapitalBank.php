<?php 

namespace src;
class KapitalBank implements IBank{
    private $accountNo;
    private $amount;
    public function setAccountNo(string $accountNo){
        $this->accountNo=$accountNo;
    }
    public function setAmount(int $amount){
        $this->amount=$amount;
    }
    public function paraTransfer(int $amount, string $accountNo) : bool
    {
        $this->setAmount($amount);
        $this->setAccountNo($accountNo);
        echo "$this->amount AZN para $this->accountNo numaralı Kapital Bank sesabına transfer edildi";
        return true;
    }
}