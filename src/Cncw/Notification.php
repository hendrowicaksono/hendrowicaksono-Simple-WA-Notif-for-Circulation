<?php

namespace Cncw;

class Notification {
    private $ccnw = NULL;

    public function __construct($ccnw) {
        $this->ccnw = $ccnw;
    }

    public function sendToWhacenter($data) {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://app.whacenter.com/api/send', [
            'form_params' => $data
        ]);
    }

    public function sendToFonnte($data) {
        global $ccnw;
        $client = new \GuzzleHttp\Client();
        $data['target'] = $data['number'];
        $data['countryCode'] = '62'; //optional
        $headers = array ();
        $headers['Authorization'] = $this->ccnw['token'];
        $response = $client->request('POST', 'https://api.fonnte.com/send', [
            'headers' => $headers,
            'form_params' => $data
        ]);
    }


}


