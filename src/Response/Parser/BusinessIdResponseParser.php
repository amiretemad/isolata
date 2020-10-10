<?php


namespace Isolta\OpenData\Response\Parser;


use Isolta\OpenData\Response\BusinessIdResponse;
use Isolta\OpenData\Response\DTO\AddressDTO;
use Isolta\OpenData\Response\DTO\ContactDetailDTO;
use Isolta\OpenData\Response\DTO\NameDTO;
use Isolta\OpenData\Exception\EmptyResponseException;
use Isolta\OpenData\Exception\JsonParseException;

class BusinessIdResponseParser
{

    /**
     * @param string $json
     * @return BusinessIdResponse
     * @throws JsonParseException
     * @throws EmptyResponseException
     */
    public static function parse(string $json): BusinessIdResponse
    {

        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new JsonParseException(json_last_error_msg());
        }

        if (empty($data)) {
            throw new EmptyResponseException(sprintf('[Response is empty in %s ]', __CLASS__));
        }

        $result = $data['results'][0];
        $response = (new BusinessIdResponse())
            ->setBusinessId($result['businessId'])
            ->setName($result['name'])
            ->setRegistrationDate($result['registrationDate'])
            ->setCompanyForm($result['companyForm'])
            ->setDetailsUri($result['detailsUri']);


        foreach ($result['names'] as $name) {
            $nameObject = (new NameDTO())
                ->setName($name['name'])
                ->setOrder($name['order'])
                ->setVersion($name['version'])
                ->setRegistrationDate($name['registrationDate'])
                ->setEndDate($name['endDate'])
                ->setSource($name['source']);

            $response->setNames($nameObject);
        }

        foreach ($result['addresses'] as $address) {
            $response->setAddresses((new AddressDTO())
                ->setCareOf($address['careOf'])
                ->setStreet($address['street'])
                ->setPostCode($address['postCode'])
                ->setType($address['type'])
                ->setVersion($address['version'])
                ->setCity($address['city'])
                ->setCountry($address['country'])
                ->setRegistrationDate($address['registrationDate'])
                ->setEndDate($address['endDate'])
                ->setLanguage($address['language'])
                ->setSource($address['source']));
        }

        foreach ($result['contactDetails'] as $contactDetail) {
            $response->setContactDetails(
                (new ContactDetailDTO())
                    ->setVersion($contactDetail['version'])
                    ->setValue($contactDetail['value'])
                    ->setContactDetailType($contactDetail['type'])
                    ->setRegistrationDate($contactDetail['registrationDate'])
                    ->setEndDate($contactDetail['endDate'])
                    ->setLanguage($contactDetail['language'])
                    ->setSource($contactDetail['source'])
            );
        }


        return $response;

    }


    private function a()
    {

    }
}