<?php

namespace src;
class PashaBank implements IBank{
    public function paraTransfer(int $amount, string $accountNo): bool
    {
        echo "$amount AZN para $accountNo numaralı Pasha Bank sesabına transfer edildi";
        return true;
    }
}