<?php

use Isolta\OpenData\Formatter\ResultToBusinessFormatter;
use Isolta\OpenData\Service\GetCompanyByBusinessIdService;
use Psr\Container\ContainerInterface;

return [

    'amir' => DI\Create(ResultToBusinessFormatter::class),
    'GetCompanyByBusinessIdService' => static function (ContainerInterface $container) {
        return new GetCompanyByBusinessIdService($container->get('amir'));
    }

];