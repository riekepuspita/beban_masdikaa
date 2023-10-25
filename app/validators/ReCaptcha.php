<?php

namespace App\validators;

use GuzzleHttp\Client;

class recaptcha 
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $client = new Client;
        $response = $client->post(
            'https://www.googl.com/recaptcha/api/siteverify',
            [
                'form_params' =>
                [
                    'secret' => config('services.recaptcha.secret'),
                    'response' => $value
                ]
            ]
                );
                $body = json_decode((string)$response->getBody());
                return $body->success;
    }
}
