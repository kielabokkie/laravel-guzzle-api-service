<?php

namespace Kielabokkie\GuzzleApiService\Tests;

use GuzzleHttp\Client;
use Kielabokkie\GuzzleApiService\ApiClient;

class ApiServiceFake extends ApiClient
{
    /**
     * Base URL of the API.
     *
     * @var string
     */
    protected $baseUrl = 'https://httpbin.org';

    /**
     * Array of default query parameters.
     *
     * @return array
     */
    protected function defaultQueryParams()
    {
        return [
            'apiKey' => '123xxx',
        ];
    }

    /**
     * Array of default headers.
     *
     * @return array
     */
    protected function defaultHeaders()
    {
        return [
            'X-Foo' => ['Bar', 'Baz']
        ];
    }

    /**
     * Create ApiServiceFake instance.
     */
    public function __construct(Client $client = null)
    {
        $this->setClient($client);
    }

    /**
     * Get the full uri.
     *
     * @param string $uri
     * @return string
     */
    public function getFullUri($uri)
    {
        return $this->addDefaultQueryParams($uri);
    }

    /**
     * GET request.
     *
     * @param string $uri
     * @return string
     */
    public function getRequest($uri)
    {
        return $this->get($uri);
    }

    /**
     * POST request.
     *
     * @param string $uri
     * @return string
     */
    public function postRequest($uri, $data)
    {
        return $this->post($uri, $data);
    }
}
