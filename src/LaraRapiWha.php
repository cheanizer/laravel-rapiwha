<?php
namespace Cheanizer\LaraRapiWha;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

class LaraRapiWha
{
    protected $parameters;
    protected $client;

    public function __construct($parameters = [])
    {
        $this->parameters = $parameters;
        $this->client = new Client([
            'base_uri' => $parameters['base_url'],
            'timeout' => 60
        ]);
    }

    public function send($to, $message)
    {
        $response = $this->client->request('GET','send_message.php',[
            'query' => [
                'apikey' => $this->parameters['api_key'],
                'number' => $to,
                'text' => $message
            ]
        ]);

        return $response->getBody();
    }
}
