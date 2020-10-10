<?php

include "vendor/autoload.php";


$service = new \Isolta\OpenData\Service\BusinessService(new \Isolta\OpenData\Formatter\BusinessResponseFormatter());

dd($service->fetch('3163643-1'));