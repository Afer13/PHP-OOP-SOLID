<?php

interface ILogger
{
    public function logError(string $message): void;
}

class DatabaseLogger implements ILogger
{
    public function logError(string $message): void
    {
        //...
    }
}

class MailService
{
    protected ILogger $iLogger;
    public function __construct(ILogger $iLogger)
    {
        $this->iLogger = $iLogger;
    }

    public function sendMail(): void
    {
        try{
            //...
        }
        catch(Exception $exception){
            $this->iLogger->logError($exception->getMessage());
        }
    }
}
