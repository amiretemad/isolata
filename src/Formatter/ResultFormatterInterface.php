<?php


namespace Isolta\OpenData\Formatter;


use Isolta\OpenData\Response\Interfaces\ApiResponseInterface;

interface ResultFormatterInterface
{

    /**
     * @param $adapterResult
     * @return mixed
     */
    public function format(ApiResponseInterface$adapterResult);

}