<?php

use src\KapitalBank;
use src\ParaGonderici;

$PG=new ParaGonderici();
$PG->paraGonder(new KapitalBank(),100,"AZ234234");