<?php


namespace Isolta\OpenData\Request\Builder;

use \GuzzleHttp\Client as Client;
use GuzzleHttp\Exception\GuzzleException;
use Isolta\OpenData\Request\Builder\Interfaces\UriInterface;

abstract class AbstractRequestBuilder implements UriInterface
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * CompanyByBusinessIdRequest constructor.
     */
    public function __construct()
    {
        //@TODO it's better to use setClient() method for Dependency Injection
        $this->client = new Client(['base_uri' => 'https://avoindata.prh.fi/']);
    }

    /**
     * @return Client
     */
    protected function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return $this
     */
    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return string
     * @throws GuzzleException
     */
    public function fetchResult(): string
    {
        return $this->getClient()
            ->request('GET', $this->getUri())
            ->getBody()
            ->getContents();

    }

}