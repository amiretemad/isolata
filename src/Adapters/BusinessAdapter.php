<?php


namespace Isolta\OpenData\Adapters;


use GuzzleHttp\Exception\GuzzleException;
use Isolta\OpenData\Exception\EmptyResponseException;
use Isolta\OpenData\Exception\JsonParseException;
use Isolta\OpenData\Request\Builder\BusinessIdRequestBuilder;
use Isolta\OpenData\Response\BusinessIdResponse;
use Isolta\OpenData\Response\Parser\BusinessIdResponseParser;

class BusinessAdapter
{

    /**
     * @param string $businessId
     * @return BusinessIdResponse
     * @throws GuzzleException
     * @throws EmptyResponseException
     * @throws JsonParseException
     */
    public static function getBusinessById(string $businessId): BusinessIdResponse
    {

        $result = (new BusinessIdRequestBuilder())
            ->setBusinessId($businessId)
            ->fetchResult();

        return BusinessIdResponseParser::parse($result);
    }

}