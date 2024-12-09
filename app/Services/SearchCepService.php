<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SearchCepService
{
    public $api;

    public function __construct()
    {
        $this->api = config('services.cep');
    }

    public function fetchAddress(string $cep)
    {
        return Http::get($this->api['url'] . $cep)->json();
    }
}
