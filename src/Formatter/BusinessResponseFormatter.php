<?php


namespace Isolta\OpenData\Formatter;


use Isolta\OpenData\Response\BusinessIdResponse;
use Isolta\OpenData\Response\Interfaces\ApiResponseInterface;
use Isolta\OpenData\Schema\AddressSchema;
use Isolta\OpenData\Schema\BusinessSchema;

class BusinessResponseFormatter implements ResultFormatterInterface
{

    /**
     * @param ApiResponseInterface|BusinessIdResponse $adapterResult
     * @return BusinessSchema
     */
    public function format(ApiResponseInterface $adapterResult): BusinessSchema
    {

        return (new BusinessSchema())
            ->setName($adapterResult->getName())
            ->setAddress($this->getAddressSchema($adapterResult))
            ->setWebsite($adapterResult->getWebsiteAddress());

    }


    /**
     * @param BusinessIdResponse $adapterResult
     * @return AddressSchema|null
     */
    protected function getAddressSchema(BusinessIdResponse $adapterResult): ?AddressSchema
    {
        /**
         * @var $latestAddress AddressSchema
         */
        if ($latestAddress = $adapterResult->getLastAddress()) {
            return (new AddressSchema())
                ->setStreet($latestAddress->getStreet())
                ->setCity($latestAddress->getCity())
                ->setPostCode($latestAddress->getPostCode());
        }

        return null;
    }

}