<?php
namespace src;
interface IBank{
    public function paraTransfer(int $amount,string $accountNo):bool;
}