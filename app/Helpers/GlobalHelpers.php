<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;

function get_route_name()
{
    return $currentPath = Route::getFacadeRoot()->current()->uri();
}

function send_request($uri, $params = array(), $method = Request::METHOD_GET)
{
    $client = new Client();
    $response = $client->request(
        $method,
        $uri,
        array(
            'form_params' => $params
        )
    );

    return json_decode($response->getBody()->getContents());
}