<?php


namespace Isolta\OpenData\Service;

use GuzzleHttp\Exception\GuzzleException;
use Isolta\OpenData\Adapters\BusinessAdapter;
use Isolta\OpenData\Exception\BadRequestException;
use Isolta\OpenData\Exception\ValidationException;
use Isolta\OpenData\Formatter\ResultFormatterInterface;
use Isolta\OpenData\Exception\EmptyResponseException;
use Isolta\OpenData\Exception\JsonParseException;
use Isolta\OpenData\Schema\BusinessSchema;
use Isolta\OpenData\Validator\Validation;

class BusinessService
{

    protected $resultFormatter;

    /**
     * BusinessService constructor.
     * @param ResultFormatterInterface $resultFormatter
     */
    public function __construct(ResultFormatterInterface $resultFormatter)
    {

        $this->resultFormatter = $resultFormatter;
    }

    /**
     * @param string $businessId
     * @return BusinessSchema
     * @throws BadRequestException
     * @throws EmptyResponseException
     * @throws JsonParseException
     * @throws ValidationException
     */
    public function fetch(string $businessId): BusinessSchema
    {
        $businessId = Validation::validateBusinessId($businessId);

        try {
            $result = BusinessAdapter::getBusinessById($businessId);

            return $this->resultFormatter->format($result);
        } catch (GuzzleException $e) {
            throw new BadRequestException($e->getMessage());
        }
    }

}