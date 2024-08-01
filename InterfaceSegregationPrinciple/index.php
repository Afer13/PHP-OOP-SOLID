<?php

interface IExportPDF{
    public function getPDF();
}
interface IExportCSV{
    public function getCSV();
}

class Invlice implements IExportCSV,IExportPDF{
    public function getPDF()
    {
        //...
    }
    public function getCSV()
    {
        //...
    }
}
class CreditNote implements IExportCSV{
    public function getCSV()
    {
        //...
    }
}