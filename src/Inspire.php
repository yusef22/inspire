<?php

namespace Yusef22\Inspire;

use GuzzleHttp\Client;

class Inspire {
    public function justDoIt() {
        $client = new Client();
        $response = $client->get('https://inspiration.goprogram.ai/');
        $data = json_decode($response->getBody()->getContents(), true);

        return $data['quote'] . ' -' . $data['author'];
    }
}
