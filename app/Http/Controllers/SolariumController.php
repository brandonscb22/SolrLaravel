<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class SolariumController extends Controller
{
    //
    protected $client;

    public function __construct()
    {
        $this->client = new \Solarium\Client(Config::get('solarium'));
    }

    public function ping()
    {
        $ping = $this->client->createPing();

        try {
            $this->client->ping($ping);
            return response()->json('OK');
        } catch (\Solarium\Exception $e) {
            return response()->json('ERROR', 500);
        }
    }

}
